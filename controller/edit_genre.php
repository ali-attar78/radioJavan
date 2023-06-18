<?php
include "model/dataBase.php";
$genre_id=$_GET["genre_id"];
$genre=$db->query("SELECT * FROM genres WHERE id=$genre_id")->fetch_assoc();
require  "view/edit_genre.php";

?>