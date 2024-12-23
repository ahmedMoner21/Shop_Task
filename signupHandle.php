<?php
require_once "dbConnection.php";
session_start(); 

if(isset($_POST['signup'])){

    // variables declare
    $errors = [];
    $username = $_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];    
    $address = $_POST['address'];


    

    // username validation
    if(empty($username)){
        $errors []= "username is required";
    }elseif (!preg_match('/^[a-zA-Z0-9 ]*$/', $username)) {
        $errors []= "username must contain string and numbers only";
    }
    else{
        $username = trim(htmlspecialchars($username));
        // $query = "select username, email from users where email = $username";
        // $result = mysqli_query($conn,$query);
        // if(mysqli_num_rows($resultUser) >0){
        //     $errors = "this username already used";
        // }
    }


    // email validation
    if(empty($email)){
        $errors []= "email is required";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors []= "email format not correct";
    }
    else{
        $email = trim(htmlspecialchars($email));
        // $query = "select username, email from users where email = $email";
        // $result = mysqli_query($conn,$query);
        // if(mysqli_num_rows($resultUser) >0){
        //     $errors = "this email already used";
        // }
    }

    // password validation
    if(empty($password)){
        $errors []= "password is required";
    }elseif (strlen($password)<8) {
        $errors []= "password must be more than 8 characters";
    }else{
        $password = trim(htmlspecialchars($password));
    }


    // phone validation
    
    if(empty($phone)){
        $errors []= "phone is required";
    }else{
        $phone = trim(htmlspecialchars($phone));
        // $queryPhone = "select username, email from users where phone = $phone";
        // $resultPhone = mysqli_query($conn,$queryPhone);
        // if (mysqli_num_rows($resultPhone) >0) {
        //     $errors = "this phone already used";
        // }
    }

    // address validation
    $address = trim(htmlspecialchars($address));




    if(empty($errors)){
        $query = "insert into users (username,email,password,phone,address)
        values ('$username','$email','$password','$phone','$address')";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['result'] = "the data inserted successfuly";
            $_SESSION['sign'] = "Sign up successfuly";
            header("location:front/signup.php");
        }else{
            $_SESSION['result'] = "the data inserted failed";
        }


    }else{
        header("location:front/signup.php");
        $_SESSION['sign'] = "Sign up failed";

    }


}else{
    header("location:signup.php");
}






?>