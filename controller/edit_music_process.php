<?php
include "model/dataBase.php";

$myImage= $_FILES["image"]["name"];
$mp3_name= $_FILES["mp3"]["name"];

$image="view/image/musics/" . $myImage;
$mp3="view/mp3/" . $mp3_name;

$name=$_POST["name"];
$music_id=$_POST["music_id"];
$album_id=$_POST["album_id"];
$artist_id=$_POST["artist_id"];
$genre_id=$_POST["genre_id"];



 

if ($_FILES["image"]["name"]=="" && !($_FILES["mp3"]["name"]=="") ) {

    $db->query("UPDATE musics SET name='$name', album_id='$album_id',artist_id='$artist_id', genre_id='$genre_id' , mp3='$mp3' WHERE id=$music_id");
    move_uploaded_file($_FILES["mp3"]["tmp_name"],$mp3);
    header("Location:music_admin.php");

}elseif($_FILES["mp3"]["name"]=="" && !($_FILES["image"]["name"]=="")){

    $db->query("UPDATE musics SET name='$name', album_id='$album_id' ,image='$image',artist_id='$artist_id', genre_id='$genre_id' WHERE id=$music_id");
    move_uploaded_file($_FILES["image"]["tmp_name"],$image);
    header("Location:music_admin.php");

}
elseif($_FILES["mp3"]["name"]=="" && $_FILES["image"]["name"]==""){


    $db->query("UPDATE musics SET name='$name', album_id='$album_id',artist_id='$artist_id', genre_id='$genre_id' WHERE id=$music_id");
    header("Location:music_admin.php");

}
else{



    if($_FILES["image"]["size"]>50000000)
    {
        echo "فایل خیلی بزرگ است";
        header("Location:edit_music.php");
    }else{

        echo "4";

//        step one

$image="view/image/albums/".$myImage;


        //     image/artists/1.jpg

        $db->query("UPDATE musics SET name='$name', album_id='$album_id' ,image='$image',mp3='$mp3',artist_id='$artist_id', genre_id='$genre_id' WHERE id=$music_id");
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        move_uploaded_file($_FILES["mp3"]["tmp_name"],$mp3);
        header("Location:music_admin.php");
    }



}














?>
