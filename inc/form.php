<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];



if(isset($_POST['submit'])){

$fname = mysqli_real_escape_string($mysqli ,$_POST['fname']);
$lname = mysqli_real_escape_string($mysqli ,$_POST['lname']);
$email = mysqli_real_escape_string($mysqli ,$_POST['email']);


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