<?php
include "bladeOne/BladeOne.php";
use eftec\bladeone;

$views = './views';
$compiledFolder = './compiled';
$blade = new bladeone\BladeOne($views, $compiledFolder);
echo $blade->run("room_details");
