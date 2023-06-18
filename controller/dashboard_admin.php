<?php
include "model/dataBase.php";
$musics=$db->query("SELECT * FROM musics");
require  "view/dashboard_admin.php";

?>