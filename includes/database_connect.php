<?php

define('DBHOST', '127.0.0.1');
define('DBUSER', 'root');
define('DBPASS', 'secret');
define('DBNAME', 'codeinventor');

$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if (!$con) {
  die("Connection failed : " . $con->error);
}
