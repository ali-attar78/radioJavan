<?php
include "model/dataBase.php";

$myImage= $_FILES["image"]["name"];
$name=$_POST["name"];
$artist_id=$_POST["artist_id"];
$album_id=$_POST["album_id"];
 

if ($_FILES["image"]["name"]=="") {

    $db->query("UPDATE albums SET name='$name', artists_id='$artist_id' WHERE id=$album_id");
    header("Location:album_admin.php");

}
else{


    if($_FILES["image"]["size"]>50000000)
    {
        echo "فایل خیلی بزرگ است";
        header("Location:edit_album.php");
    }else{
  

//        step one

$image="view/image/albums/".$myImage;


        //     image/artists/1.jpg

        $db->query("UPDATE albums SET name='$name',image='$image', artists_id='$artist_id' WHERE id=$album_id");
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:album_admin.php");
    }



}














?>
