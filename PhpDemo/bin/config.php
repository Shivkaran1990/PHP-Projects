<?php
$config = array(
    'defaultController' => 'navigationcontroller',
    'dbname' => 'database name need to put here',
    'dbpass' => 'password need to put here',
    'dbuser' => 'username need to put here',
    'baseurl' => 'http://127.0.0.1'
);

 $str = $config["baseurl"] ."/". $_SERVER['REQUEST_URI'];

 $urlPathParts = explode('/', ltrim(parse_url($str, PHP_URL_PATH),'/'));

 //var_dump($urlPathParts);

include 'router.php';
$route = new router($urlPathParts, $config);

?>