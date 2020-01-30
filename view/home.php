<!DOCTYPE html>
<?php
// error_reporting(0);
include('checklogin.php');
include('../components/menu.php');
include('../database/condb.php');
?>
<html lang="en" dir="ltr">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body,
    html {
        height: 100%;
    }

    .bg {

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .row.heading h2 {
        color: #fff;
        font-size: 52.52px;
        line-height: 95px;
        font-weight: 400;
        text-align: center;
        margin: 0 0 40px;
        padding-bottom: 20px;
        text-transform: uppercase;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .heading.heading-icon {
        display: block;
    }

    .padding-lg {
        display: block;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .practice-area.padding-lg {
        padding-bottom: 55px;
        padding-top: 55px;
    }

    .practice-area .inner {
        border: 1px solid #999999;
        text-align: center;
        margin-bottom: 28px;
        padding: 40px 25px;
    }

    .our-webcoderskull .cnt-block:hover {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        border: 0;
    }

    .practice-area .inner h3 {
        color: #3c3c3c;
        font-size: 24px;
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
        padding: 10px 0;
    }

    .practice-area .inner p {
        font-size: 14px;
        line-height: 22px;
        font-weight: 400;
    }

    .practice-area .inner img {
        display: inline-block;
    }

    .our-webcoderskull {
        /* background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover; */

    }

    .our-webcoderskull .cnt-block {
        float: left;
        width: 100%;
        background: #fff;
        padding: 30px 20px;
        text-align: center;
        border: 2px solid #d5d5d5;
        margin: 0 0 28px;
    }

    .our-webcoderskull .cnt-block figure {
        width: 148px;
        height: 148px;
        border-radius: 100%;
        display: inline-block;
        margin-bottom: 15px;
    }

    .our-webcoderskull .cnt-block img {
        width: 148px;
        height: 148px;
        border-radius: 100%;
    }

    .our-webcoderskull .cnt-block h3 {
        color: #2a2a2a;
        font-size: 20px;
        font-weight: 500;
        padding: 6px 0;
        text-transform: uppercase;
    }

    .our-webcoderskull .cnt-block h3 a {
        text-decoration: none;
        color: #2a2a2a;
    }

    .our-webcoderskull .cnt-block h3 a:hover {
        color: #337ab7;
    }

    .our-webcoderskull .cnt-block p {
        color: #2a2a2a;
        font-size: 13px;
        line-height: 20px;
        font-weight: 400;
    }

    .our-webcoderskull .cnt-block .follow-us {
        margin: 20px 0 0;
    }

    .our-webcoderskull .cnt-block .follow-us li {
        display: inline-block;
        width: auto;
        margin: 0 5px;
    }

    .our-webcoderskull .cnt-block .follow-us li .fa {
        font-size: 24px;
        color: #767676;
    }

    .our-webcoderskull .cnt-block .follow-us li .fa:hover {
        color: #025a8e;
    }

    .pagination>li>a {
        border-radius: 50% !important;
        margin: 0 5px;
    }

    /* Footer */
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #footer {
        background: #007b5e !important;
    }

    #footer h5 {
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color: #ffffff;
    }

    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    #footer ul.social li {
        padding: 3px 0;
    }

    #footer ul.social li a i {
        margin-right: 5px;
        font-size: 25px;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.social li:hover a i {
        font-size: 30px;
        margin-top: -10px;
    }

    #footer ul.social li a,
    #footer ul.quick-links li a {
        color: #ffffff;
    }

    #footer ul.social li a:hover {
        color: #eeeeee;
    }

    #footer ul.quick-links li {
        padding: 3px 0;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.quick-links li:hover {
        padding: 3px 0;
        margin-left: 5px;
        font-weight: 700;
    }

    #footer ul.quick-links li a i {
        margin-right: 5px;
    }

    #footer ul.quick-links li:hover a i {
        font-weight: 700;
    }

    @media (max-width:767px) {
        #footer h5 {
            padding-left: 0;
            border-left: transparent;
            padding-bottom: 0px;
            margin-bottom: 10px;
        }
    }

    .a {
        width: 100%;
        padding: 15px 30px;
        float: left;
        word-spacing: 10px;
    }

    .edit {
        font-size: 14px;
        color: black;
        border: 2px solid #ff9933;
        text-decoration: none;
        background-color: #ff9933;
        border-radius: 5px;
    }

    .edit:hover {
        text-decoration: none;
        background-color: #ffe6cc;
        border: 2px solid #ffe6cc;
        color: black;
    }

    /* background */
    .carousel-item {
        height: 65vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    
</style>

<style>
    .carousel-caption{
        background-color: rgba(0,0,0,0.5);
        border: 1px solid #333;
        bottom: 50px !important;
    }
    .carousel-item{
        min-height: 500px !important;
    }
</style>
<head>
    <meta charset="utf-8">
    <title>index</title>
</head>

<body>

        <?php
        $sql = "SELECT * FROM `project` WHERE user_id IS NOT NULL ORDER BY project_id DESC ";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql);
        
        ?>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $i = 0; while ($data = mysqli_fetch_array($result)) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>" <?php if($i == 0){echo 'class="active"';} ?>></li>
                <?php $i++; } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                
                <?php $i = 0; while ($data = mysqli_fetch_array($result2)) { ?>
                <div class="carousel-item <?php if($i == 0){echo 'active';  } ?>" style="background-image: url('../img/<?=$data['project_pic']?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4"><?=$data['project_title']?></h3>
                        <p class="lead"><?=$data['project_detail']?></p>
                        <a href="form.php?p=<?=base64_encode($data['project_id'])?>" class="btn btn-warning btn-lg">ร่วมบริจาคโครงการ</a>
                    </div>
                </div>
                <?php $i++; } ?>

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
    </header>
    
    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h1 class="font-weight-light">ข่าวสารและเรื่องราว</h1>
            <p class="lead">
                <dd>หากคุณเป็นคนหนึ่งที่เคยผ่านการศึกษาแบบไทยต้องเคยเจอกิจกรรมหน้าเสาธงตอนเช้าก่อนเข้าเรียนอย่างแน่นอน สิ่งนี้เกิดขึ้นยาวนานตั้งแต่ยุคคุณพ่อคุณแม่เราจวบจนปัจจุบัน เด็กหลายๆ คนเลือกที่จะอดทนต่อสิ่งที่ทำต่อกันมาโดยไม่ปริปากแม้บางครั้งไม่เห็นด้วย แต่หากเริ่มส่งผลกระทบต่อชีวิตทางการศึกษาแล้วล่ะก็ คงถึงเวลาปกป้องสิทธิของตัวเอง “หนูมองว่าทำไมหลักสูตรการเรียนการสอนถึงมากขนาดนี้ แล้วยังมีกิจกรรมหน้าเสาธงในตอนเช้าที่กินเวลาเรียนเราเข้ามาเพิ่มอีก ทำให้ต้องมีการเพิ่มคาบเรียน เพราะเรียนไม่ทัน ไม่มีเวลาอ่านหนังสือสอบ ไม่มีความรู้ไปทำข้อสอบ” นี่คือสิ่งที่น้องมิ้นท์และเพื่อนๆ ลุกขึ้นมาเรียกร้องต่อสู้กับกิจกรรมหน้าเสาธงของโรงเรียนผ่านวิชาของ “ครูกั๊ก” (วิชาความคิดรวบยอดทางคณิตศาสตร์) ที่ให้นักเรียนได้ใช้ความรู้ที่มีมาประยุกต์กับสถานการณ์ต่างๆ ตามโจทย์ รวมถึงสอนให้เด็กรู้จักแก้ปัญหาที่เกิดขึ้นในสังคม โดยเริ่มจากสิ่งที่ใกล้ตัวที่สุดอย่าง “โรงเรียน”</dd>
                <a href="../view/message.php">ข่าวสารเพิ่มเติม</a>!
            </p>
        </div>
    </section>
    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>
</body>

</html>