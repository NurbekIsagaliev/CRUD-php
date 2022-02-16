<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '1');
define('DATABASE', 'nurbek');

$connect = mysqli_connect('localhost','root', '1', 'nurbek');
if (!$connect) {
  die('Error connect to database!');
}
?>