<?php
include "packages/bladeOne/BladeOne.php";
// include "db/dotenv_loader.php";
include "db/connectionDb.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use eftec\bladeone;

$views = './views';
$compiledFolder = './compiled';
$blade = new bladeone\BladeOne($views, $compiledFolder);

$query = "SELECT * FROM rooms LIMIT 3";
$rooms = $conn->query($query);

echo $blade->run("index", ['rooms' => $rooms->fetch_all()]);
