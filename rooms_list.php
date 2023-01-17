<?php
include "bladeOne/BladeOne.php";
use eftec\bladeone;

$views = __DIR__ . '/views';
$compiledFolder = __DIR__ . '/compiled';
$blade = new bladeone\BladeOne($views, $compiledFolder);
echo $blade->run("rooms_list");
