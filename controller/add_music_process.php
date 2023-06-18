<?php
include "model/dataBase.php";



if (isset($_POST["name"]) && isset($_POST["album_id"]) && isset($_POST["artist_id"]) && isset($_POST["genre_id"]) ) {
//echo "step one" ;
    $name=$_POST["name"];
    $album_id=$_POST["album_id"];
    $artist_id=$_POST["artist_id"];
    $genre_id=$_POST["genre_id"];




    if ($_FILES["image"]["size"]>5000000000 || $_FILES["mp3"]["size"]>5000000000)
    {
//        echo "step two" ;
        echo "فایل خیلی بزرگ است";
        header("Location:add_music.php");
    }else{

//        step one

        $image="view/image/musics/" . $_FILES["image"]["name"];
        $mp3="view/mp3/" . $_FILES["mp3"]["name"];
        //     image/musics/1.jpg
        //    mp3/1.mp3



        $db->query("INSERT INTO musics(name,image,album_id,mp3,artist_id,genre_id) VALUES('$name','$image','$album_id','$mp3','$artist_id','$genre_id')");

        move_uploaded_file($_FILES["mp3"]["tmp_name"],$mp3);
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:music_admin.php");
    }





}


?>
