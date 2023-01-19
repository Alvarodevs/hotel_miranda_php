<?php
include 'packages/dotenv/Repository/Adapter/WriterInterface.php';
include 'packages/dotenv/Repository/Adapter/ReaderInterface.php';
include 'packages/dotenv/Repository/RepositoryInterface.php';
include 'packages/dotenv/Store/StoreInterface.php';
include 'packages/dotenv/Exception/ExceptionInterface.php';
include 'packages/dotenv/Exception/InvalidPathException.php';
include 'packages/dotenv/Loader/LoaderInterface.php';
include 'packages/dotenv/Parser/ParserInterface.php';
include 'packages/dotenv/Parser/Parser.php';
include 'packages/dotenv/Dotenv.php';
include 'packages/PhpOption/Option.php';
include 'packages/GrahamCampbell/Result.php';

foreach (glob("packages/GrahamCampbell/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Exception/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Loader/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Parser/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Store/File/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Store/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Repository/Adapter/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Repository/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/PhpOption/*.php") as $filename) {
  require_once $filename;
}
foreach (glob("packages/dotenv/Util/*.php") as $filename) {
  require_once $filename;
}
?>
