<!DOCTYPE html>
<html lang="en">

<?php include('../database/condb.php');
 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KruKidDee</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php include('../shared/style.php'); ?>
</head>

<body>
<?php include('../shared/header-guest.php'); ?>
<hr>
<div class="container my-5">
    <?php
    $sql = "SELECT * FROM `project` WHERE user_id IS NOT NULL ORDER BY project_id DESC ";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql);

    ?>

    <!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    </div> -->
    <center>
        <h5 class="display-4">โครงการทั้งหมด</h5>
    </center>

    <div class="field field--name-field-hero-title field--type-string field--label-hidden field--item">
        <center>
            <h2>บริจาคตอนนี้เพื่อช่วยให้เด็กๆ อยู่รอดและมีชีวิตที่ดีขึ้น</h2>
        </center>

        <p class="lead">คุณสามารถสร้างการเปลี่ยนแปลงระบบสุขภาพของประเทศไทยด้วย“พลังแห่งการให้” ร่วมบริจาคสมทบทุน มูลนิธิรามาธิบดีฯ “เพื่อสุขภาพที่ดีของคนไทย” อย่างยั่งยืน.</p>
    </div>

    <!-- <div class="bg"><img src="/project/img/3.jpg" alt="bg" width="100%" height="600px">
        </div> -->

    <!-- Page Heading -->
    <div class="row">
        <?php
        $sql = "SELECT * FROM `project` ";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {

        ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="/project/img/<?php echo $data['project_pic']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['project_title']; ?></h5>
                        <p class="card-text"><?php echo $data['project_detail']; ?></p>
                        <a href="form.php?p=<?= base64_encode($data['project_id']) ?>" class="btn btn-primary">ร่วมบริจาค</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- ตาราง 4 ช่องที่ยังไม่ใส่ข้อความ-->
    <!-- <div class="row">
        <div class="col-lg-3 col-sm-6 mb-5">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                    </h4>
                    <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-5">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/hilltribe%20schooler%20with%20puppet.jpg?itok=av9p48Qi" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">พันธมิตรระยะยาวของยูนิเซฟจากภาคธุรกิจ</a>
                    </h4>
                    <p class="card-text">การช่วยเหลือเด็กๆจำเป็นต้องได้รับการวางแผนในระยะยาว และยูนิเซฟเองก็มีการทำงานและวางแผนเพื่อโครงการต่างๆทุกๆ 5 ปี พร้อมกับการควบคุมและติดตามผลเพื่อสร้างความมั่นใจในการสร้างการเปลี่ยนแปลงที่ส่งผลดีต่อเด็กๆอย่างมีประสิทธิภาพและประสิทธิผล ดังนั้น ยูนิเซฟเห็นความสำคัญอย่างยิ่งต่อการช่วยเหลือทางด้านการเงินในระยะยาวจากพันธมิตรภาคธุรกิจที่มีความตั้งใจแรงกล้าที่ร่วมก้าวไปกับยูนิเซฟ</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-5">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/ECD%20at%20Nakhon%20Si%20Thammarat%20_0.jpg?itok=Ys1G5Zxz" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">โครงการสตาร์ ฟอร์ ชิลเดร้น (Star for Children Programme)</a>
                    </h4>
                    <p class="card-text">ซิลเวอร์สตาร์ ฟอร์ ชิลเดร้น (Silver Star for Children)
                        สำหรับบริษัทที่บริจาคเงินจำนวนมากกว่า 1 ล้านบาท ภายในหนึ่งปีปฏิทิน

                        ด้วยโครงการ Silver Star for Children การบริจาคของบริษัทท่านนั้นสามารถช่วยให้ยูนิเซฟจัดหาชุด emergency health ที่รวบรวมเครื่องมือทางการแพทย์และอุปกรณ์ต่างๆ นำไปช่วยเหลือเด็กๆฉุกเฉินได้กว่า 15,000 คน ภายในระยะเวลา 3 เดือน นี่เป็นทางหนึ่งที่เงินบริจาคของท่านช่วยอนาคตของเด็กๆไว้ได้

                        ทางยูนิเซฟทีความยินดีมอบสิ่งดังต่อไปนี้ให้บริษัทในฐานะที่เป็น Silver Star for Children</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-5">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/large_tile/public/IMG_2565.JPG?itok=mIZNop7T" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">โครงการสตาร์ ฟอร์ ชิลเดร้น (Star for Children Programme)</a>
                    </h4>
                    <p class="card-text">ซิลเวอร์สตาร์ ฟอร์ ชิลเดร้น (Silver Star for Children)
                        สำหรับบริษัทที่บริจาคเงินจำนวนมากกว่า 1 ล้านบาท ภายในหนึ่งปีปฏิทิน

                        ด้วยโครงการ Silver Star for Children การบริจาคของบริษัทท่านนั้นสามารถช่วยให้ยูนิเซฟจัดหาชุด emergency health ที่รวบรวมเครื่องมือทางการแพทย์และอุปกรณ์ต่างๆ นำไปช่วยเหลือเด็กๆฉุกเฉินได้กว่า 15,000 คน ภายในระยะเวลา 3 เดือน นี่เป็นทางหนึ่งที่เงินบริจาคของท่านช่วยอนาคตของเด็กๆไว้ได้

                        ทางยูนิเซฟทีความยินดีมอบสิ่งดังต่อไปนี้ให้บริษัทในฐานะที่เป็น Silver Star for Children</p>
                </div>
            </div>
        </div> -->
        </div>
       <hr>
        <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>