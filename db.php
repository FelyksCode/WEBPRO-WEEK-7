<?php
// Bikin koneksi ke DB
define('DSN', 'mysql:host=sql112.infinityfree.com;dbname=if0_37484352_uts_webpro');
define('DBUSER', 'if0_37484352');
define('DBPASS', 'toayJbHkGk8fn');

// 1. Connection to database
$db = new PDO(DSN, DBUSER, DBPASS);
