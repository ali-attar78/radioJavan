<?php

?>
<?php if ($_SESSION["login_admin_status"] !=null && $_SESSION["login_admin_status"]==true ):
    include "header_admin.php";


    ?>

    <div class="container d-flex justify-content-center mt-5 card_update" xmlns="http://www.w3.org/1999/html">

        <div class="container py-5 h-100 " >
            <div class="row d-flex justify-content-center align-items-center h-25" >
                <div class="col-12 col-md-9 col-lg-7 col-xl-8" >
                    <div class="card  text-light card_add card_login" >
                        <div class="card-body p-5 text-center">

                            <form method="post" action="edit_genre_process.php" enctype="multipart/form-data">
                                <h2 class="mb-5 mt-5">Edit Genre</h2>
                                <!-- Email input -->

                                <div class="input-container mb-5">
                                    <input type="text" name="name" required="" value="<?php echo $genre["name"]; ?>"/>
                                    <label>Name</label>
                                </div>
                                <div class="input-container" >
                                    <input type="file" name="image" />
                                    <label id="margin_label">image source</label>
                                </div>
                                <input type="hidden" name="genre_id" value="<?php echo $genre_id?>" class="form-control" />

                        </div>

                        <!-- 2 column grid layout for inline styling -->

                        <div class="d-flex justify-content-center button_add_position">
                        
                            <input type="submit" class="btn btn-secondary btn-block mb-5 add_button" value="Edit">

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
