<?php 
include './inc/conn.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

if(isset($_POST['submit'])){
$sql = "INSERT INTO users(fname , lname , email)
        VALUE ('$fname' , '$lname' , '$email')"; 

if(empty($fname)){
    echo "First name empty" ;
}elseif(empty($lname)) {
    echo "Last name empty" ;
}elseif(empty($email)){
    echo "Email empty" ;
}elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
    echo "Email is incorrect";
}else{
    if(mysqli_query($mysqli , $sql)){
        header ('Location: index.php');
    }else {
        echo "Error creating new record: " . mysqli_error($mysqli);
    }
}
}
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
