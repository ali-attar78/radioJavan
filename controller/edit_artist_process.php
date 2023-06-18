<?php
include "model/dataBase.php";

$myImage= $_FILES["image"]["name"];
$name=$_POST["name"];
$artist_id=$_POST["artist_id"];
 
if ($_FILES["image"]["name"]=="") {

    $db->query("UPDATE artists SET name='$name' WHERE id=$artist_id");
    header("Location:artist_admin.php");

}
else{
  
    if($_FILES["image"]["size"]>50000000)
    {
        echo "فایل خیلی بزرگ است";
        header("Location:edit_artist.php");
    }else{

//        step one

$image="view/image/artists/".$myImage;


        //     image/artists/1.jpg

        $db->query("UPDATE artists SET name='$name',image='$image' WHERE id=$artist_id");
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:artist_admin.php");
    }



}














?>
