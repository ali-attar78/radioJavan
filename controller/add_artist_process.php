<?php
include "model/dataBase.php";




if (isset($_POST["name"])) {

    $name = $_POST["name"];

    if ($_FILES["image"]["size"] > 50000000) {
        echo "this file is too large";
        header("Location:add_artist.php");
    } else {
        echo "salam";


        $image = "view/image/artists/" . $_FILES["image"]["name"];



        $db->query("INSERT INTO artists(name,image) VALUES('$name','$image')");
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
        header("Location:artist_admin.php");
    }


}


?>
