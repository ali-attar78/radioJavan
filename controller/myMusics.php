<?php

include "model/dataBase.php";



$musics=$db->query("SELECT *,musics.id AS music_id,artists.id AS artist_id,artists.image AS artist_image,musics.image AS music_image,artists.name AS artist_name,musics.name AS music_name,musics.artist_id AS music_artist_id
FROM musics
 INNER JOIN artists ON musics.artist_id=artists.id 
    INNER JOIN favourites ON musics.id=favourites.music_id");




$rowNumbers=$musics->num_rows;



if (isset($_SESSION["userID"])){
    $user_id =$_SESSION["userID"];
}


if($_SESSION["login_user_status"]){

    foreach ($musics as $music){
        $music_id=$music["music_id"];
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




require  "view/myMusics.php";

?>