<?php

include "header_main.php";




?>

?>

<div class="container">


<div class="row mt-3 d-flex justify-content-center">
    <div class="col-lg-8 col-md-9 col-sm-10">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="view/image/slider/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Amir Azimi</h5>
                        <p>man Ba Hame Badam Joz To</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="view/image/slider/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Roozbeh Bemani</h5>
                        <p>Basse Bargard</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="view/image/slider/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Shadmehr Aghili</h5>
                        <p>Batel</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>







    </div>
</div>







    <hr class="text-light mt-4">
    <h4 class="text-light">New Albums</h4>
    <div class="row mt-3">
        <?php
        $i=1;
        foreach ($albums as $album):?>
        <?php if (($i<=6)):?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 d-flex justify-content-center mt-3 objectAnimation">
            <a href="musics.php?album=<?php echo $album["id"];  ?>">
                <img src="<?php echo $album["image"]; ?>" style="width:100%" class="rounded-4">
                <h6 class="text-light mt-1 subname"><?php echo $album["name"];?></h6>
            </a>

        </div>
            <?php endif;?>
        <?php
            $i=$i+1;
        endforeach; ?>

    </div>



    <hr class="text-light mt-4">
    <h4 class="text-light">New Artists</h4>
    <div class="row mt-3">
        <?php
        $i=1;
        foreach ($artists as $artist):

            ?>
            <?php if ($i<=6):?>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 d-flex justify-content-center mt-3 objectAnimation">
                    <a href="albums.php?artist=<?php echo $artist["id"];  ?>" style="text-align: center">
                        <img src="<?php echo $artist["image"]; ?>" style="width:100%" class="rounded-4 rounded-circle">
                        <h6 class="text-light mt-1 subname"><?php echo $artist["name"];?></h6>
                    </a>

                </div>
            <?php endif;?>

        <?php
            $i=$i+1;
        endforeach; ?>

    </div>


    <hr class="text-light mt-4">
    <h4 class="text-light">genres</h4>
    <div class="row mt-3">
        <?php
        $i=1;
        foreach ($genres as $genre):?>
            <?php if (($i<=6)):?>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 d-flex justify-content-center mt-3 objectAnimation">
                    <a href="genre_musics.php?genre_id=<?php echo $genre["id"];  ?>">
                        <img src="<?php echo $genre["image"]; ?>" style="width:100%;" class="rounded-4">
                        <h6 class="text-light mt-1 subname"><?php echo $genre["name"];?></h6>
                    </a>

                </div>
            <?php endif;?>
            <?php
            $i=$i+1;
        endforeach; ?>

    </div>



</div>


<?php include "footer_main.php"; ?>