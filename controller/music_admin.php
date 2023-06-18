<?php

include "model/dataBase.php";
$musics=$db->query("SELECT * FROM musics");
require  "view/music_admin.php";

?>