<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','user');

$conn = mysqli_connect(HOST,USER,PASS,DB); or die('Unable to connect');
?>