<?php
include "model/dataBase.php";
$artists=$db->query("SELECT * FROM artists");
$_SESSION["artist_id"]=array();
require  "view/artists.php";

?>