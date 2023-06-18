<?php
include "model/dataBase.php";
$artist_id=$_GET["artist"];

$db->query("DELETE FROM artists WHERE id=$artist_id");
header("Location:artist_admin.php");


?>