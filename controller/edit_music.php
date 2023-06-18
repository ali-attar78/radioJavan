<?php
include "model/dataBase.php";
$music_id=$_GET["music"];
$music=$db->query("SELECT * FROM musics WHERE id=$music_id")->fetch_assoc();
$albums=$db->query("SELECT * FROM albums");
$artists=$db->query("SELECT * FROM artists");
$genres=$db->query("SELECT * FROM genres");
require  "view/edit_music.php";

?>