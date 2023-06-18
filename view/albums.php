<?php include "header_main.php";

?>


    <div class="container">
        <h2 class="text-light mt-3" >Albums of <?php echo $artist_name["name"];  ?></h2>
        <hr class="text-light">
        <?php if($albums->num_rows==0):?>
    <div class="alert alert-dark " role="alert" style="text-align: center">
        <b>There are currently no albums from this artist</b>
    </div>
    <?php else:?>

        <div class="row mt-3">
            <?php foreach ($albums as $album):?>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 d-flex justify-content-center mt-3 objectAnimation">

                    <a href="musics.php?album=<?php echo $album["id"];  ?>">
                        <img src="<?php echo $album["image"]; ?>" style="width:100%" class="rounded-4">
                        <h6 class="text-light mt-1 subname"><?php echo $album["name"];?></h6>
                    </a>

                </div>
            <?php endforeach; ?>
            <?php endif;?>
        </div>

    </div>


<?php include "footer_main.php"; ?>