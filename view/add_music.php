<?php

?>
<?php if ($_SESSION["login_admin_status"] !=null && $_SESSION["login_admin_status"]==true ):
    include "header_admin.php";

    ?>

    <div class="container d-flex justify-content-center mt-5 card_update" >

        <div class="container py-5 h-100 " >
            <div class="row d-flex justify-content-center align-items-center h-25" >
                <div class="col-12 col-md-9 col-lg-7 col-xl-8" >
                    <div class="card  text-light card_add card_login" >
                        <div class="card-body p-5 text-center">

                            <form method="post" action="add_music_process.php" enctype="multipart/form-data">
                                <h2 class="mb-5 mt-5">Add New music</h2>
                                <!-- Email input -->

                                <div class="input-container mb-5">
                                    <input type="text" name="name" required=""/>
                                    <label> Music Name</label>
                                </div>
                                <div class="input-container mb-5" >
                                    <input type="file"  name="image" required=""/>
                                    <label id="margin_label">image source</label>

                                </div>


                                <div class="input-container mb-5" >

                                        <select class="form-select bg-dark text-light" aria-label="Default select example" name="artist_id" >
                                    <?php foreach ($artists as $artist):?>
                                        <option value="<?php echo $artist["id"];?>" class="text-light" selected><?php echo $artist["name"];?></option>
                                    <?php endforeach;?>
                                </select>

                                </div>


                                <div class="input-container mb-5" >

                                    <select class="form-select bg-dark text-light" aria-label="Default select example" name="album_id" >
                                        <?php foreach ($albums as $album):?>
                                            <option value="<?php echo $album["id"];?>" class="text-light" selected><?php echo $album["name"];?></option>
                                        <?php endforeach;?>
                                    </select>

                                </div>

                                
                                <div class="input-container mb-5" >

                                    <select class="form-select bg-dark text-light" aria-label="Default select example" name="genre_id" >
                                    <?php foreach ($genres as $genre):?>
                                    <option value="<?php echo $genre["id"];?>" class="text-light" selected><?php echo $genre["name"];?></option>
                                    <?php endforeach;?>
                                    </select>

                                </div>
                                                                    

                                <div class="input-container mb-0 pb-0" >
                                    <input type="file" name="mp3" required=""/>
                                    <label id="margin_label">mp3 source</label>
                                </div>

                        </div>

                        <!-- 2 column grid layout for inline styling -->

                        <div class="d-flex justify-content-center button_add_position">
                            <input type="submit" class="btn btn-secondary btn-block mb-5 add_button" value="ADD" </input>

                        </div>
                        <!-- Submit button -->


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


<?php else:
    header("Location:index.php");
endif;
?>


<?php include "footer_admin.php";?>
