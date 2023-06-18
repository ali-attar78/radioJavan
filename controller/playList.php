<?php
include "model/dataBase.php";
$genres=$db->query("SELECT * FROM genres");

require  "view/playList.php";

?>