<!DOCTYPE html>
<?php
// error_reporting(0);
// include('../components/menu2.php');
include('../database/condb.php');
?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-guest.php'); ?>
    <hr>
    <div class="container my-5">
        <center>
            <h1>ความเคลื่อนไหว</h1>
        </center>
        <!-- Page Heading -->
        <!-- <div class="row">
            <div class="col-3">
                <div class="card shadow">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-shadow">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <?php
            $sql = "SELECT * FROM `news` ";
            $result = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($result)) {

            ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="/project/img/<?php echo $data['news_img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['news_topic']; ?></h5>
                            <p class="card-text"><?php echo $data['news_detail']; ?></p>
                            <a href="guest-watch-news.php?p=<?= base64_encode($data['news_id']) ?>" class="btn btn-primary">เพิ่มเติม..</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>