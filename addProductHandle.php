<?php
require_once "dbConnection.php";
session_start(); 

if(isset($_POST['addProduct'])){

    // variables declare
    $errors = [];
    $productName = $_POST['ProdName'];
    $productCode = $_POST['code'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category'];    
    $details = $_POST['details'];
    $price = $_POST['price'];
    $img_url = $_POST['img'];


    

    // username validation
    if(empty($productName)){
        $errors []= "productName is required";
    }elseif (!preg_match('/^[a-zA-Z0-9 ]*$/', $productName)) {
        $errors []= "productName must contain string and numbers only";
    }
    else{
        $productName = trim(htmlspecialchars($productName));
    }


    // email validation
    if(empty($productCode)){
        $errors []= "productCode is required";
    }elseif (!ctype_digit($productCode)) {
        $errors []= "productCode must be numbers only";
    }
    else{
        $productCode = trim(htmlspecialchars($productCode));
    }

    // password validation
    if(empty($quantity)){
        $errors []= "quantity is required";
    }elseif (!ctype_digit($quantity)) {
        $errors []= "quantity must numbers only";
    }else{
        $quantity = trim(htmlspecialchars($quantity));
    }


    // category_id validation
    
    if(empty($category_id)){
        $errors []= "category is required";
    }elseif (!ctype_digit($category_id)) {
        $errors []= "category_id must numbers only";
    }else{
        $category_id = trim(htmlspecialchars($category_id));
    }
    // price validation
    if(empty($price)){
        $errors []= "price is required";
    }elseif (!is_numeric($price)) {
        $errors []= "price must numbers only";
    }else{
        $price = trim(htmlspecialchars($price));
    }

    // price validation
    if(empty($img_url)){
        $errors []= "image is required";
    }else{
        $img_url = trim(htmlspecialchars($img_url));
    }

    // address validation
    $details = trim(htmlspecialchars($details));




    if(empty($errors)){
        $query = "insert into products (code,quantity,details,category_id,price,image_url)
        values ('$productCode','$quantity','$details','$category_id','$price','$img_url')";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['result'] = "the data inserted successfuly";
            $_SESSION['add'] = "add product successfuly";
            header("location:addProduct.php");
        }else{
            echo $productCode;
            echo $quantity;
            echo $details;
            echo $category_id;
            echo $price;
            $_SESSION['result'] = "the data inserted failed";
        }


    }else{
        header("location:addProduct.php");
        $_SESSION['add'] = "add product failed";

    }


}else{
    header("location:addProduct.php");
}






?>