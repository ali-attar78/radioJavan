<?php
include "model/dataBase.php";




if (isset($_POST["name"])) {

    $name=$_POST["name"];

    if ($_FILES["image"]["size"]>50000000)
    {
        echo "فایل خیلی بزرگ است";
        header("Location:add_genres.php");
    }else{

//        step one

        $image="view/image/genres/" . $_FILES["image"]["name"];

        //     image/artists/1.jpg

        $db->query("INSERT INTO genres(name,image) VALUES('$name','$image')");
move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:genres_admin.php");
    }


}






?>
