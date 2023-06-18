<?php
include "model/dataBase.php";
$artists=$db->query("SELECT * FROM artists");
require  "view/artist_admin.php";

?>