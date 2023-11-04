<?php 
$sql = 'SELECT * FROM users' ;
$result = mysqli_query($mysqli , $sql);
$users = mysqli_fetch_all($result , MYSQLI_ASSOC);
?>