<?php
include "packages/bladeOne/BladeOne.php";
include "db/dotenv_loader.php";
// foreach (glob("packages/dotenv/*.php") as $filename){
// 	include $filename;
// }
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
use eftec\bladeone;

$views = './views';
$compiledFolder = './compiled';
$blade = new bladeone\BladeOne($views, $compiledFolder);
$googleApiKey = $_ENV['GOOGLE_API_KEY'];

echo $blade->run("contact", ["googleApiKey" => $googleApiKey]);
