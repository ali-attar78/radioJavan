<?php include "header_main.php";


?>


    <div class="container">
        <h2 class="text-light mt-3" >Artists</h2>
        <hr class="text-light">
        <div class="row mt-3">
            <?php foreach ($artists as $artist):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 d-flex justify-content-center mt-3 objectAnimation">


                <a href="albums.php?artist=<?php echo $artist["id"];?>">

                    <img src="<?php echo $artist["image"]; ?>" style="width:100%" class="rounded-4">
                    <h6 class="text-light mt-1 subname">Best of <?php echo $artist["name"];?></h6>
                </a>

            </div>
            <?php endforeach; ?>
        </div>

    </div>


<?php include "footer_main.php"; ?>