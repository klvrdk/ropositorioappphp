<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','localhost:3306'); 
define('DB_NAME','registro'); 
define('DB_USER','root'); 
define('DB_PASS','XETbas67919'); 
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS); 
mysql_select_db(DB_NAME,$con); 
?>