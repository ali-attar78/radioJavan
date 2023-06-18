<?php
include "model/dataBase.php";


$artist_id=$_GET["artist"];

$albums=$db->query("SELECT * FROM albums WHERE artists_id=$artist_id");

$artist_name=$db->query("SELECT name FROM artists WHERE id=$artist_id");
$artist_name=$artist_name->fetch_assoc();
require  "view/albums.php";

?>