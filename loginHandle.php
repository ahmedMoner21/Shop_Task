<?php

require_once "dbConnection.php";
session_start();

if(isset($_POST['login'])){

    extract($_POST);
    $email = trim(htmlspecialchars($email));
    $password = trim(htmlspecialchars($password));

    $query = "SELECT type FROM `users` 
    WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){
        $userType = mysqli_fetch_assoc($result);
        if($userType['type'] == "admin"){
            
            header("location:adminView.php");
            $_SESSION['type'] = $userType;
        }else{
            $_SESSION['type'] = $userType;
            header("Location:/PHP/route/ShopTask/shop/front/index.php");
            $_SESSION['msg'] = "user found";
        }
    }else{
        // echo $email;
        // echo $password;
        header("Location:/PHP/route/ShopTask/shop/front/login.php");
        $_SESSION['msg'] = "login failed";
    }

}else{
    header("Location:/PHP/route/ShopTask/shop/front/login.php");
}







?>