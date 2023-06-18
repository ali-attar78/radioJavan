<?php
include "model/dataBase.php";

$userName=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm_password=$_POST["confirmPassword"];

$secure_pass=md5($password);


if($password==$confirm_password){
    $numUser=$db->query("SELECT * FROM users WHERE username='$userName'")->num_rows;
    if ($numUser==0){

        $find1 = strpos($email, '@');
        $find2 = strpos($email, '.');
        if ($find1 !== false && $find2 !== false && $find2 > $find1){


//                $db->query("INSERT INTO users(username,password,email) VALUES ('$userName','$secure_pass','$email')");
//            header("Location: view/user_login.php");
            require  "user_login.php";
//                $_SESSION["message"]="your sign up is success";
//                $_SESSION["type"]="success";


        }else{
            $_SESSION["message"]="your email is incorrect";
            require  "signup.php";
//            header("Location: view/signup.php");

//            $_SESSION["type"]="error";
        }

    }else{
        $_SESSION["message"]="username already exist";
//        $_SESSION["type"]="error";
        require  "signup.php";

//        header("Location: view/signup.php");


    }

}

else{
    $_SESSION["message"]="passsword is incorrect";
//    $_SESSION["type"]="error";
    require  "signup.php";

//    header("Location: view/signup.php");



}




?>









?>