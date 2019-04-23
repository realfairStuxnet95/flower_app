<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/flower');
define("VIEWS", ROOT_URL.'App/Views/');
define("APP_URL", ROOT_URL.'/Dashboard/');
define("LOADER", APP_URL.'App/Views/Utils/classes_loader.php');
define("APP_NAME", 'Arums Flowers');

require LOADER;
?>