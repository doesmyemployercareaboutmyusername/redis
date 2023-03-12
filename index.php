<?php
require './vendor/autoload.php';

##### This also works #####
Predis\Autoloader::register();

$redis = new Predis\Client(array(
    "scheme" => "tcp",
    "host" => "hostname",
    "port" => 8080,
    "password" => "password"));

    echo "Connected to Redis";

##### Until this part - breaks #####
    $redis->set("foo", "bar");
    $value = $redis->get("foo");
    var_dump($value);

##### END #####

    
##### This works #####
// $redis = new Predis\Client();
// echo "Connected to Redis <br><br><br>";

// echo $redis->ping();

##### END #####

?>