<?php
include "model/dataBase.php";
$albums=$db->query("SELECT * FROM albums");
require  "view/album_admin.php";

?>