<?php
include "model/dataBase.php";
$albums=$db->query("SELECT * FROM albums");
$artists=$db->query("SELECT * FROM artists");
$genres=$db->query("SELECT * FROM genres");
require  "view/add_music.php";

?>