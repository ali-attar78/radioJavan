<?php include "header_main.php";


?>

    ?>

    <div class="container">

        <?php if (isset($_SESSION["message"])): ?>

            <div class="alert alert-danger d-flex align-items-center mb-0 my_alert" role="alert">
                <div class="row" style="width: 100%">

                    <div class="col-11">
                        <strong><?php echo $_SESSION["message"] ?></strong>
                    </div>


                    <div class="col-1">
                        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>


            </div>


            <?php unset($_SESSION["message"]) ?>
        <?php endif; ?>


        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-11">

                <div class="card mb-3 text-light rounded-4" style="background-color: #171717">
                    <div class="row g-0">
                        <div class="col-md-3 col-lg-3  col-sm-3 col-3">
                            <img src="view/image/singlePics/sign_up.png" class="img-fluid rounded-start image_mobile_signup" alt="..."
                                 style="height: 100%">
                        </div>
                        <div class="col-md-8 col-lg-8  col-sm-8 col-8">
                            <div class="card-body ">
                                <div class="container">
                                    <div class="justify-content-center align-content-center">
                                        <h3 class="justify-content-center text-light mb-4 mt-2 "><b>Sign Up</b></h3>
                                    </div>
                                    <form method="post" action="signup_process">

                                        <div class="form-group mt-2">
                                            <label for="exampleInputPassword1">User Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                   name="username" placeholder="Enter UserName">
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-secondary">We'll never share
                                                your email with anyone else.</small>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                   id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirmPassword"
                                                   id="exampleInputPassword1" placeholder="Confirm Password">
                                        </div>

                                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                            <button type="submit" class="btn btn-primary btn-danger">sign up</button>
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