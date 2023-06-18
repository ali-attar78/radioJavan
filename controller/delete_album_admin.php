<?php
include "model/dataBase.php";
$album_id=$_GET["album"];

$db->query("DELETE FROM albums WHERE id=$album_id");
header("Location:album_admin.php");


?>