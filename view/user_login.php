<?php include "header_main.php";


?>



    <div class="container">

        <?php if (isset($_SESSION["login_user_message"])): ?>

            <div class="alert alert-danger d-flex align-items-center mb-0 my_alert" role="alert">
                <div class="row" style="width: 100%">

                    <div class="col-11">
                        <strong><?php echo  $_SESSION["login_user_message"]; ?></strong>
                    </div>

                    <div class="col-1">
                        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>
            </div>
            <?php unset($_SESSION["login_user_message"]) ?>
        <?php endif; ?>


        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-6 mt-2">

                <div class="card mb-3 text-light rounded-4" style="background-color: #171717">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="view/image/singlePics/sign_up.png" class="img-fluid rounded-start login_user_pic" alt="..."
                                 style="height: 100%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="container">
                                    <div class="justify-content-center align-content-center">
                                        <h3 class="justify-content-center text-light mb-4 mt-2 "><b>Sign In</b></h3>
                                    </div>
                                    <form method="post" action="user_login_process">



                                        <div class="form-group mt-2">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   name="email" aria-describedby="emailHelp" placeholder="Enter email">

                                        </div>
                                        <div class="form-group mt-2 mb-4">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                   id="exampleInputPassword1" placeholder="Password">
                                        </div>



                                        <div class="d-grid gap-2 col-6 mx-auto mt-4 ">
                                            <button type="submit" class="btn btn-primary btn-danger mt-4">sign in</button>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


<?php include "footer_main.php"; ?>