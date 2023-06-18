<?php


include "model/dataBase.php";
$musics=$db->query("SELECT * FROM musics");

?>
<?php if ($_SESSION["login_admin_status"] !=null && $_SESSION["login_admin_status"]==true ):
include "header_admin.php";
?>



<!-- offcanvas -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-light">Dashboard</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body py-5">
                        <h4>Original Site</h4>
                    </div>
                    <a href="https://www.radiojavan.com/" style="color: white" target="_blank">
                    <div class="card-footer d-flex">
                        View Details
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-3">

                <div class="card bg-warning text-light h-100">
                    <div class="card-body py-5">
                        <h4>Music News</h4>
                    </div>
                    <a href="https://www.music-news.com/" style="color: white" target="_blank">
                    <div class="card-footer d-flex">
                        View Details
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>

                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-success text-white h-100">
                    <div class="card-body py-5">
                        <h4>Download Music</h4>
                    </div>
                    <a href="https://next1.ir/" style="color: white" target="_blank">
                    <div class="card-footer d-flex">
                        View Details
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-danger text-white h-100">
                    <div class="card-body py-5">
                        <h4>Artists News</h4>
                    </div>
                    <a href="https://khabarban.com/w/%D8%AE%D9%88%D8%A7%D9%86%D9%86%D8%AF%D9%87-%D9%87%D8%A7" style="color: white" target="_blank">
                    <div class="card-footer d-flex">
                        View Details
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card h-100 bg-dark border border-1 border-danger ">
                    <div class="card-header text-light">
                        <span class="me-2 "><i class="bi bi-bar-chart-fill"></i></span>
                        Area Chart Example
                    </div>
                    <div class="card-body">
                        <canvas class="chart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card h-100 bg-dark border border-1 border-danger">
                    <div class="card-header text-light">
                        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                        Area Chart Example
                    </div>
                    <div class="card-body ">
                        <canvas class="chart " width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card bg-dark text-light border border-1 border-danger">
                    <div class="card-header bg-danger">
                        <span><i class="bi bi-table me-2"></i></span> Data Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                id="example"
                                class="table table-striped data-table table-dark"
                                style="width: 100%"
                            >
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">artist_id</th>
                                    <th scope="col">image</th>
                                    <th scope="col">album_id</th>
                                    <th scope="col">mp3</th>
                                    <th scope="col">genre_id</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($musics as $music): ?>
                                <tr>
                                    <td>  <?php echo$music["id"]; ?></td>
                                    <td>  <?php echo $music["name"];?></td>
                                    <td> <?php echo $music["artist_id"];?></td>
                                    <td>  <img src="<?php echo $music["image"];?>" class="img-fluid" width="100px"></td>
                                    <td>  <?php echo $music["album_id"];?></td>
                                    <td>  <?php echo $music["mp3"];?></td>
                                    <td>      <?php echo $music["genre_id"];?></td>
                                </
                                </tr>
                                <?php endforeach;?>

                                </tbody>
                                <tfoot class="bg-danger">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">artist_id</th>
                                    <th scope="col">image</th>
                                    <th scope="col">album_id</th>
                                    <th scope="col">mp3</th>
                                    <th scope="col">genre_id</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php else:
    header("Location: index.php");

    endif;
    ?>


<?php include "footer_admin.php";?>