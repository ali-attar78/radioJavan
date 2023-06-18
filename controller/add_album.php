<?php
include "model/dataBase.php";
$artists=$db->query("SELECT * FROM artists");

require  "view/add_album.php";

?>