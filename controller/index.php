<?php
include "model/dataBase.php";

$albums=$db->query("SELECT * FROM albums ORDER BY id DESC");

$artists=$db->query("SELECT * FROM artists ORDER BY id DESC ");

$genres=$db->query("SELECT * FROM genres ");

require  "view/index.php";

?>