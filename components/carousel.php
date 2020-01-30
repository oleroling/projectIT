<?php
include('../database/condb.php');
$sql = "SELECT * FROM `project` WHERE user_id IS NOT NULL ORDER BY project_id DESC ";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql);
?>
<style>
  .carousel-caption {
    background-color: rgba(0, 0, 0, 0.5);
    border: 1px solid #333;
    bottom: 50px !important;
  }

  .carousel-item {
    min-height: 500px !important;
  }
</style>

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php $i = 0;
    while ($data = mysqli_fetch_array($result)) { ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" <?php if ($i == 0) {
                                                                                echo 'class="active"';
                                                                              } ?>></li>
    <?php $i++;
    } ?>
  </ol>
  <div class="carousel-inner" role="listbox">

    <?php $i = 0;
    while ($data = mysqli_fetch_array($result2)) { ?>
      <div class="carousel-item <?php if ($i == 0) {
                                  echo 'active';
                                } ?>" style="background-image: url('../img/<?= $data['project_pic'] ?>')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4"><?= $data['project_title'] ?></h3>
          <p class="lead"><?= $data['project_detail'] ?></p>
          <a href="form.php?p=<?= base64_encode($data['project_id']) ?>" class="btn btn-warning btn-lg">ร่วมบริจาคโครงการ</a>
        </div>
      </div>
    <?php $i++;
    } ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
  <?php
  while ($data = mysqli_fetch_array($result)) { ?>
    <div class="carousel-item active">
      <img src="/project/img/<?php echo $data['project_pic']; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $data['project_title'] ?></h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
    <?php } ?>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->