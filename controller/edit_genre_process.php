<?php
include "model/dataBase.php";

$myImage= $_FILES["image"]["name"];
$name=$_POST["name"];
$genre_id=$_POST["genre_id"];
 
if ($_FILES["image"]["name"]=="") {

    $db->query("UPDATE genres SET name='$name' WHERE id=$genre_id");
    header("Location:genres_admin.php");

}
else{
  
    if($_FILES["image"]["size"]>50000000)
    {
        echo "فایل خیلی بزرگ است";
        header("Location:edit_genre.php");
    }else{

//        step one

$image="view/image/genres/".$myImage;


        //     image/artists/1.jpg

        $db->query("UPDATE genres SET name='$name',image='$image' WHERE id=$genre_id");
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:genres_admin.php");
    }



}














?>
