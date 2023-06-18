<?php include "header_main.php";

?>


<div class="container ">
    <h2 class="text-light mt-3" >My PlayList</h2>
    <hr class="text-light">
</div>



<?php foreach ($jsonArray as $json):?>

    <?php

    if ($_SESSION["login_user_status"] == true) {

        if ($json["likes"] == null) {
            $json["likes"]["music_id"] = "null";
        }

    }
//var_dump($json["likes"]["music_id"]);
    ?>

    <?php if (isset( $json["likes"])):?>

        <input id="like<?php echo $json["music_id"];?> " type="hidden" class="myJsonLikes" value="<?php echo $json["likes"]["music_id"];?>">
    <?php endif;?>
    <input type="hidden" class="myJsonId" value="<?php echo $json["music_id"];?>">
    <input type="hidden" class="myJsonImage" value="<?php echo $json["music_image"];?>">
    <input type="hidden" class="myJsonMp3" value="<?php echo $json["mp3"];?>">
    <input type="hidden" class="myJsonArtist" value="<?php echo $json["music_artist_id"];?>">
    <input type="hidden" class="myJsonName" value="<?php echo $json["music_name"];?>">


<?php endforeach;?>



<?php if($musics->num_rows==0):?>
    <div class="alert alert-dark " role="alert" style="text-align: center">
        <b>There are currently no music from this album</b>
    </div>
<?php else:?>
    <div class="row " dir="rtl">
        <div class="col-12 col-sm-5 col-lg-4 musicDivScroll" dir="ltr" >
            <?php foreach ($musics as $music):?>


                <input type="hidden" class="myMusicId" value="<?php echo $music["music_id"];?>">

                <ul class="list-group musicList ">
                    <!--                    $music["mp3"];?>' , '--><?php //echo $music["image"];?><!--',-->
                    <li class="list-group-item d-flex  align-items-center musicList" onclick="playMusic('<?php echo $music["music_id"];?>','<?php echo $rowNumbers;?>')">
                        <a style="display:flex" href="#">
                            <div  class="image-parent">
                                <img class="rounded-2" src="<?php echo $music["music_image"]?>" style="width: 55px">
                            </div>

                            <div class="text-light musicListName "  >
                                <h5 class="text-light" ><?php echo $music["artist_name"];?></h5>
                                <h6 class="text-light"><?php echo $music["music_name"];?></h6>
                            </div>
                        </a>
                    </li>
                </ul>

            <?php endforeach; ?>
        </div>

        <div class="col-12 col-sm-7 col-lg-8 d-block justify-content-center " style="text-align: center" >

            <img  id="music_image" src="view/image/singlePics/myMusic.jpg" class="rounded mx-auto d-block rounded-4" alt="..." style="width: 400px;height: 400px">
            <h3 class="text-light mt-3" id="albumName">My PlayList</h3>
            <audio  id="music_player" ></audio>




            <div class="row d-flex justify-content-center mt-3" id="myPlayerDiv" style="visibility: hidden">

                <div class="col-5 col-sm-5 col-lg-5 d-flex justify-content-center " >

                    <div class="song-slider" dir="ltr">
                        <input type="range" value="0" class="seek-bar " id="mySeek">
                    </div>

                </div>

            </div>



            <div class="row d-flex justify-content-center" id="myMusicTimeDiv" style="visibility: hidden">

                <div class="col-5 col-sm-5 col-lg-5 d-flex justify-content-center ">

                    <div  class="song-slider d-flex"  dir="ltr">
                        <span class="current-time text-light d-flex justify-content-start" id="myCurrentTime">00:00</span>
                        <span class="song-duration text-light d-flex justify-content-end" id="myDurationSong">00:00</span>
                    </div>

                </div>

            </div>





            <div class="row " id="myControlsDiv" style="visibility: hidden">
                <div class="controls  d-flex justify-content-center ">

                    <ul>

                        <?php if( $_SESSION["login_user_status"] == true):?>


                            <li style="color:#fff;margin-top:12px;" >
                                <form id="form_like">
                                    <a href="#" >

                                <span class="fa fa-bookmark-o mt-1" id="my_favourite_music" onclick="myFavourite()" aria-hidden="true">
                                    </a>
                                    </span>
                                </form>
                            </li>



                        <?php endif;?>


                        <input type="hidden" id="currentMusic" value="test">
                        <li style="color:#fff;padding-left:25px;margin-top:12px; " onclick="myBackward()"><a href="#" class="myBackWARD"><span class="fa fa-fast-backward" aria-hidden="true"></a></span></li>

                        <li style="margin-left:15px;font-size:32px;margin-top: -8px" id="play" >

                            <button class="play-btn " id="playBtn" onclick="myPlayBtn()" >
                                <span></span>
                                <span></span>
                            </button>
                        </li>

                        <li style="color:#fff;padding-left:15px;margin-top:12px;" onclick="myForward()"><a href="#" class="myForward"><span class="fa fa-fast-forward" aria-hidden="true"></a></span></li>
                        <li style="color:#fff;padding-left:25px;margin-top:12px;" onclick="myRandom()"> <a href="#" ><span class="fa fa-random myRandom" aria-hidden="true" style="color: #A0A6AB"></span></li></a>
                    </ul>
                </div>

            </div>








        </div>
    </div>





    </div>
<?php endif;?>


<?php include "footer_main.php"; ?>

