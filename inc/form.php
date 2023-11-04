<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$errors = [
    'FnameError' => '' ,
    'LnameError' => '' ,
    'EmailError' => '',
];

if(isset($_POST['submit'])){

$fname = mysqli_real_escape_string($mysqli ,$_POST['fname']);
$lname = mysqli_real_escape_string($mysqli ,$_POST['lname']);
$email = mysqli_real_escape_string($mysqli ,$_POST['email']);


$sql = "INSERT INTO users(fname , lname , email)
        VALUE ('$fname' , '$lname' , '$email')"; 

if(empty($fname)){
    $errors['FnameError'] = 'الرجاء ادخال الاسم الاول';
}
if(empty($lname)) {
    $errors['LnameError'] = 'الرجاء ادخال الاسم الاخير';
}
if(empty($email)){
    $errors['EmailError'] = 'الرجاء ادخال البريد الالكتروني';
}elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
    $errors['EmailError'] = 'الرجاء التأكد من البريد الالكتروني';
}else{
    if(mysqli_query($mysqli , $sql)){
        header ('Location: ' . $_SERVER['PHP_SELF']);
    }else {
        echo "Error creating new record: " . mysqli_error($mysqli);
    }
}
}
?>