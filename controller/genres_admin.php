<?php

include "model/dataBase.php";
$genres=$db->query("SELECT * FROM genres");
require  "view/genres_admin.php";

?>