<?php

include "model/dataBase.php";
$album_id=$_GET["album"];
$album=$db->query("SELECT * FROM albums WHERE id=$album_id")->fetch_assoc();
$artists=$db->query("SELECT * FROM artists");

require  "view/edit_album.php";

?>