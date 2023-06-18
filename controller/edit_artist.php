<?php
include "model/dataBase.php";
$artist_id=$_GET["artist"];
$artist=$db->query("SELECT * FROM artists WHERE id=$artist_id")->fetch_assoc();
require  "view/edit_artist.php";

?>