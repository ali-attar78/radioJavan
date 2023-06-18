

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="online music website">
    <meta name="keywords" content="musics,artists,albums,playList,irani,player,music player,online music,online">
    <meta name="author" content="Ali Attar">
    <meta name="author" content="Emineh ghafarzadeh taji">
    <title>Radio Javan</title>
    <link rel="stylesheet" type="text/css" href="view/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Biryani|Raleway:300|Source+Code+Pro|Muli"
          rel="stylesheet">

</head>
<body class="bg-dark">

<nav class="navbar navbar-expand-lg bg-light" dir="rtl">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><b>Radio Javan</b>
            <img src="view/image/singlePics/logo.png" width="45" height="45" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" dir="ltr">

            <form class="d-flex " role="search" method="post" action="search_musics">
                <input class="form-control me-2" type="search" placeholder="Search a music" name="searchText" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!--class="col-lg-2 col-md-3 col-sm-3-->

<nav class="navbar navbar-expand-lg navSecond" dir="rtl">
    <div class="container-fluid" style="padding: 0px!IMPORTANT">


        <div class="row myRow" dir="rtl">

            <div class="col-lg-2 col-md-3 col-sm-3 col-3 ">
                <a href="index.php">Home</a>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-3 col-3 ">
                <a href="artists.php">artists</a>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-3 col-3 ">
                <a href="playList.php">Playlists</a>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-3 col-3 ">
                <a href="all_musics.php">Musics</a>
            </div>





            <?php if ($_SESSION["login_user_status"] == true): ?>


                <div class="col-lg-4 col-md-4 col-sm-4 justify-content-start" dir="ltr" style="display: flex;">


                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a
                                    class="nav-link dropdown-toggle ms-2 text-light"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                            >
                                Acconut    <i class="bi bi-person-fill"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-strat bg-dark" >

                                <li><a class="dropdown-item" href="myMusics">My PlayList</a></li>
                                <li>
                                    <a class="dropdown-item" href="home">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                </div>


            <?php else: ?>

                <div class="col-lg-4 col-md-4 col-sm-4 justify-content-start" dir="ltr" style="display: flex;">
                    <a href="signup.php">Sign up</a>
                    <a href="user_login.php">Sign in</a>
                </div>

            <?php endif; ?>


        </div>


    </div>
    </div>
</nav>


<!--<nav class="navSecond">-->
<!--    <ul>-->
<!--        <li>-->
<!--            <a href="all_musics.php">Musics</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="playList.php">Playlists</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="artists.php">artists</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="index.php">Home</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</nav>-->
