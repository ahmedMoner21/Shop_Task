<?php

require_once "dbConnection.php";
session_start();


if (isset($_POST['category_btn'])) {
    extract($_POST);
    
    $errors = [];

    if(empty($category)){
        $errors [] = "category name is required";
    }elseif(!preg_match('/^[a-zA-Z0-9 ]*$/', $username)){
        $errors [] = "category format is wrong";
    }else{
        $category = trim(htmlspecialchars($category));
        $query = "insert into categories (Name) values ('$category')";
        $result = mysqli_query($conn,$query);
        if($result){
            $_SESSION['categoryMsg'] = "Category inserted successfuly";
            header("location:addCategory.php");
        }else{
            $_SESSION['categoryMsg'] = "Category inserted failed";
            header("location:addCateory.php");
        }
    }

    


}





?>