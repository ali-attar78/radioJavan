<?php

include "model/dataBase.php";

$music_id=$_GET["mId"];
$userId=$_SESSION["userID"];

$count=$db->query("SELECT * FROM favourites WHERE user_id=$userId AND music_id=$music_id")->num_rows;

if ($count==0){

    $db->query("INSERT INTO favourites(music_id,user_id) VALUES('$music_id','$userId') ");
    echo 1;

}else{

    $db->query("DELETE FROM favourites WHERE user_id=$userId AND music_id=$music_id");
    echo 0;

}







?>