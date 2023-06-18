<?php
include "model/dataBase.php";


$find1 = strpos($_POST["email"], '@');
$find2 = strpos($_POST["email"], '.');

$password=$_POST["password"];
$secure_pass=md5($password);

if ($find1 !== false && $find2 !== false && $find2 > $find1){
    $email=$_POST["email"];
   $thisUser=$db->query("SELECT * FROM users WHERE password='$secure_pass' AND email='$email'");
    $emailRow=$thisUser->num_rows;
    $user=$thisUser->fetch_assoc();



}




if (isset($emailRow) && $emailRow == 1) {
    $_SESSION["login_user_status"] = true;
    $userId=$user["id"];
    $_SESSION["userID"]=$userId;
    header("Location:index.php");
//    require  "index.php";


}
else {


    $_SESSION["login_user_message"] = "your email or password is incorrect";
    $_SESSION["type"] = "error";
    header("Location:user_login.php");
//    require  "user_login.php";


}



?>

