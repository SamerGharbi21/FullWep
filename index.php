<?php 
include './inc/conn.php';
include './inc/form.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST">
    <input type="text" name="fname" id="fname" placeholder="First Name">
    <input type="text" name="lname" id="lname" placeholder="Last Name">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="submit" name="submit" value="Send">
</form>



<script src="./js/script.js"></script>
</body>
</html>
