<?php
include "model/dataBase.php";
$genre_id=$_GET["genre_id"];

$db->query("DELETE FROM genres WHERE id=$genre_id");
header("Location:genres_admin.php");


?>