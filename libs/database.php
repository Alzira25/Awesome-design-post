<?php

define('DBHOST', 'dev.local');
define('DBUSER', 'developer');
define('DBPASS', 'develop123');
define('DBNAME', 'codeinventor');

$db = \Kisphp\Kisdb::getInstance();
$db->connect(DBHOST, DBUSER, DBPASS, DBNAME);
$db->enableDebug();
