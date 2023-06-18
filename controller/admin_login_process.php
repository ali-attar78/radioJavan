<?php

include "model/dataBase.php";

$userName=$_POST["username"];
$password=$_POST["password"];

$secure_pass=md5($password);
//echo $secure_pass;
//die();

$admins=$db->query("SELECT * FROM admins WHERE password='$secure_pass' AND user_name='$userName'")->fetch_assoc();

if($admins!=null){

    if ( $userName==$admins["user_name"] && $secure_pass==$admins["password"]){
        $_SESSION["login_admin_status"]=true;
        require  "view/dashboard_admin.php";

    }
    elseif( $userName!=$admins["user_name"] || $secure_pass!=$admins["password"]){

        $_SESSION["errorMessage"]="your username or password is wrong";
        header("Location:admin_login.php");

    }
    else{
        require  "view/index.php";
    }


}else{
    $_SESSION["errorMessage"]="your username or password is wrong";
    header("Location:admin_login.php");
//    require  "view/admin_login.php";
}



?>

