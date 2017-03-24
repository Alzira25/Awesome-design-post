<?php

define('DBHOST', '127.0.0.1');
define('DBUSER', 'root');
define('DBPASS', 'secret');
define('DBNAME', 'codeinventor');
 
 $con = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($con, DBNAME);
 
 if ( !$con ) {
  die("Connection failed : " . mysqli_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error());
 }

?>
