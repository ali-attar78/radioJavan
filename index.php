<?php

session_start();
// test

$request = $_SERVER["REQUEST_URI"];
$request = str_replace("/radiojavan", "", $request);

if(isset($_SESSION["login_user_status"])){

}else{
    $_SESSION["login_user_status"]=false;
}


if (isset($_GET["artist"])) {
    $artist_id = $_GET["artist"];
} else {
    $artist_id = "";
}

if (isset($_GET["album"])) {
    $album_id = $_GET["album"];
} else {
    $album_id = "";
}

if (isset($_GET["genre_id"])) {
    $genre_id = $_GET["genre_id"];
} else {
    $genre_id = "";
}

if (isset($_GET["music"])) {
    $music_id = $_GET["music"];
} else {
    $music_id = "";
}
if (isset($_GET["mId"])) {
    $m_id = $_GET["mId"];
} else {
    $m_id = "";
}


switch ($request) {

    case("/"):
    case("/index"):
    case("/index.php"):
        require "controller/index.php";
        break;


    case("/artists"):
    case("/artists.php"):
        require "controller/artists.php";
        break;


    case("/albums.php?artist=" . "$artist_id"):
    case("/albums.php?artist="):
        require "controller/albums.php";
        break;


    case("/musics.php?album=" . "$album_id"):

        require "controller/musics.php";
        break;


    case("/genre_musics.php?genre_id=" . "$genre_id"):

        require "controller/genre_musics.php";
        break;


    case("/delete_artist_admin.php?artist=" . "$artist_id"):

        require "controller/delete_artist_admin.php";
        break;

    case("/delete_music_admin.php?music=" . "$music_id"):

        require "controller/delete_music_admin.php";
        break;

    case("/delete_album_admin.php?album=" . "$album_id"):

        require "controller/delete_album_admin.php";
        break;

    case("/delete_genre_admin.php?genre_id=" . "$genre_id"):

        require "controller/delete_genre_admin.php";
        break;

    case("/edit_album.php?album=" . "$album_id"):
        require "controller/edit_album.php";
        break;

    case("/edit_artist.php?artist=" . "$artist_id"):
        require "controller/edit_artist.php";
        break;

    case("/edit_music.php?music=" . "$music_id"):
        require "controller/edit_music.php";
        break;

    case("/edit_genre.php?genre_id=" . "$genre_id"):
        require "controller/edit_genre.php";
        break;

    case("/edit_album_process.php"):
        require "controller/edit_album_process.php";
        break;

    case("/signup.php"):
        require "controller/signup.php";
        break;

    case("/edit_music_process.php"):
        require "controller/edit_music_process.php";
        break;

    case("/playList.php"):
        require "controller/playList.php";
        break;

    case("/all_musics.php"):
        require "controller/all_musics.php";
        break;

    case("/myMusics"):
        require "controller/myMusics.php";
        break;

    case("/search_musics"):
        require "controller/search_musics.php";
        break;

    case("/admin_login"):
    case("/admin_login.php"):
        require "controller/admin_login.php";
        break;


    case("/login_with_admin"):
        require "controller/admin_login_process.php";
        break;

    case("/dashboard_admin.php"):
    case("/dashboard_admin"):
        require "controller/dashboard_admin.php";
        break;

    case("/home.php"):
        require "controller/admin_logout.php";
        break;

    case("/artist_admin.php"):
        require "controller/artist_admin.php";
        break;

    case("/music_admin.php"):
        require "controller/music_admin.php";
        break;


    case("/edit_artist_process.php"):
        require "controller/edit_artist_process.php";
        break;

    case("/edit_genre_process.php"):
        require "controller/edit_genre_process.php";
        break;

    case("/add_artist.php"):
        require "controller/add_artist.php";
        break;

    case("/add_artist_process"):
        require "controller/add_artist_process.php";
        break;

    case("/album_admin.php"):
        require "controller/album_admin.php";
        break;

    case("/genres_admin.php"):
        require "controller/genres_admin.php";
        break;

    case("/add_album.php"):
        require "controller/add_album.php";
        break;

    case("/add_music.php"):
        require "controller/add_music.php";
        break;

    case("/add_genres.php"):
        require "controller/add_genres.php";
        break;

    case("/add_album_process.php"):
        require "controller/add_album_process.php";
        break;

    case("/add_music_process.php"):
        require "controller/add_music_process.php";
        break;

    case("/add_genre_process.php"):
        require "controller/add_genre_process.php";
        break;

    case("/signup_process"):
        require "controller/signup_process.php";
        break;

    case("/user_login.php"):
    case("/user_login"):
        require "controller/user_login.php";
        break;

    case("/user_login_process"):
        require "controller/user_login_process.php";
        break;

//    case("/header_main.php"):
//    case("/header_main"):
//        require "controller/header_main.php";
//        break;

    case("/home"):
    case("/user_log_out.php"):
    case("/user_log_out"):
        require "controller/user_log_out.php";
        break;


    case("/send_like.php?mId=" . "$m_id"):
        require "controller/send_like.php";
        break;

    default:
        require "controller/page404.php";
        break;
}


?>
