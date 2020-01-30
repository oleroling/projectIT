<!DOCTYPE html>
<?php
// error_reporting(0);
include('../database/condb.php');
?>
<html lang="en" dir="ltr">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/style/global.css">

<head>
    <meta charset="utf-8">
    <title>index</title>
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div class="container-fluid">
        <?php include('../components/carousel.php'); ?>
    </div>
    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h1 class="font-weight-light">ข่าวสารและเรื่องราว</h1>
            <p class="lead">
                <dd>หากคุณเป็นคนหนึ่งที่เคยผ่านการศึกษาแบบไทยต้องเคยเจอกิจกรรมหน้าเสาธงตอนเช้าก่อนเข้าเรียนอย่างแน่นอน สิ่งนี้เกิดขึ้นยาวนานตั้งแต่ยุคคุณพ่อคุณแม่เราจวบจนปัจจุบัน เด็กหลายๆ คนเลือกที่จะอดทนต่อสิ่งที่ทำต่อกันมาโดยไม่ปริปากแม้บางครั้งไม่เห็นด้วย แต่หากเริ่มส่งผลกระทบต่อชีวิตทางการศึกษาแล้วล่ะก็ คงถึงเวลาปกป้องสิทธิของตัวเอง “หนูมองว่าทำไมหลักสูตรการเรียนการสอนถึงมากขนาดนี้ แล้วยังมีกิจกรรมหน้าเสาธงในตอนเช้าที่กินเวลาเรียนเราเข้ามาเพิ่มอีก ทำให้ต้องมีการเพิ่มคาบเรียน เพราะเรียนไม่ทัน ไม่มีเวลาอ่านหนังสือสอบ ไม่มีความรู้ไปทำข้อสอบ” นี่คือสิ่งที่น้องมิ้นท์และเพื่อนๆ ลุกขึ้นมาเรียกร้องต่อสู้กับกิจกรรมหน้าเสาธงของโรงเรียนผ่านวิชาของ “ครูกั๊ก” (วิชาความคิดรวบยอดทางคณิตศาสตร์) ที่ให้นักเรียนได้ใช้ความรู้ที่มีมาประยุกต์กับสถานการณ์ต่างๆ ตามโจทย์ รวมถึงสอนให้เด็กรู้จักแก้ปัญหาที่เกิดขึ้นในสังคม โดยเริ่มจากสิ่งที่ใกล้ตัวที่สุดอย่าง “โรงเรียน”</dd>
                <a href="../view/user-news.php">ข่าวสารเพิ่มเติม</a>!
            </p>
        </div>
    </section>
    <?php include('../components/slide.php'); ?>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>