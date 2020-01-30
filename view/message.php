<!doctype html>
<html lang="en">
<?php include('checklogin.php');
include('../components/menu.php'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>message</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        /* วิดีโอ */
        header {
            position: relative;
            background-color: black;
            height: 75vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        header .container {
            position: relative;
            z-index: 2;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

        @media (pointer: coarse) and (hover: none) {
            header {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }

            header video {
                display: none;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>


<body>
    <div align="center">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h5 class="display-4">ความเคลื่อนไหว</h5>



        </div>
        <div class="field field--name-field-hero-title field--type-string field--label-hidden field--item">
            <center>
                <h2>บริจาคตอนนี้เพื่อช่วยให้เด็ก ๆ อยู่รอดและมีชีวิตที่ดีขึ้น</h2>
            </center>

            <p class="lead">คุณสามารถสร้างการเปลี่ยนแปลงระบบสุขภาพของประเทศไทยด้วย“พลังแห่งการให้” ร่วมบริจาคสมทบทุน มูลนิธิรามาธิบดีฯ “เพื่อสุขภาพที่ดีของคนไทย” อย่างยั่งยืน.</p>
        </div>
        
        <!-- <div class="bg"><img src="/project/img/3.jpg" alt="bg" width="100%" height="600px">
        </div> -->
        <br><br>
        <center>
            <h2>เรื่องราว</h2>
        </center>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
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
            <div class="col-lg-4 col-sm-6 mb-4">
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
            <div class="col-lg-4 col-sm-6 mb-4">
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

</body>
</div>
<br><br><br>
<footer>
    <?php include('../components/footer.php'); ?>
</footer>

</html>