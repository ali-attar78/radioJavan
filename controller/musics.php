<?php

include "model/dataBase.php";

$album_id=$_GET["album"];

$musics=$db->query("SELECT * FROM musics WHERE album_id=$album_id");

$rowNumbers=$musics->num_rows;



if (isset($_SESSION["userID"])){
    $user_id =$_SESSION["userID"];
}


if($_SESSION["login_user_status"]){

    foreach ($musics as $music){
        $music_id=$music["id"];
        $music["likes"]=$db->query("SELECT music_id FROM favourites WHERE music_id=$music_id AND user_id=$user_id")->fetch_assoc();
        $music_array[]=$music;

    }
}
elseif($_SESSION["login_user_status"]==false){
    foreach ($musics as $music){

        $music_array[]=$music;

    }
}

//for ($i=0;$i<count($music_array);$i++){
//
//   var_dump($music_array[$i]);
//}
//

$jsonArray = array();
if (isset($music_array)) {

    for ($i = 0; $i < count($music_array); $i++) {

        $jsonArray[] = $music_array[$i];
    }
}



//var_dump($jsonArray);
//die();


//while($row =mysqli_fetch_assoc($music_array))
//{
//    $jsonArray[] = $row;
//}

//
//var_dump($jsonArray);
//die();

$albums=$db->query("SELECT * FROM albums WHERE id=$album_id")->fetch_assoc();

$artist_id=$albums["artists_id"];

$artist_name=$db->query("SELECT name FROM artists WHERE id=$artist_id");
$artist_name=$artist_name->fetch_assoc();

require  "view/musics.php";

?>