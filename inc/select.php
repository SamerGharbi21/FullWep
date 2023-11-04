<?php 
$sql = 'SELECT * FROM  users ORDER BY RAND() LIMIT 1 ' ;
$result = mysqli_query($mysqli , $sql);
$users = mysqli_fetch_all($result , MYSQLI_ASSOC);
?>