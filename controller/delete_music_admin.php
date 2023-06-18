<?php
include "model/dataBase.php";
$music_id=$_GET["music"];

$db->query("DELETE FROM musics WHERE id=$music_id");

header("Location:music_admin.php");


?>