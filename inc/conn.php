<?php 

$mysqli = mysqli_connect("localhost", "root", "root", "FullWep");

if (!$mysqli) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>