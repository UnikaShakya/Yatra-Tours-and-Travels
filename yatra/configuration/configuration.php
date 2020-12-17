<?php
define('ROOT_DIR', dirname(dirname(__FILE__)));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
/*define('PACKAGE_ROOT', dirname(dirname(dirname(__FILE__))));
define('PACKAGE_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(PACKAGE_ROOT))));*/ 
?>	