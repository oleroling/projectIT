<!DOCTYPE html>
<?php
include('../database/condb.php'); ?>
<html lang="en" dir="ltr">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        border: 1px solid #333;
        bottom: 50px !important;
    }

    .carousel-item {
        min-height: 500px !important;
    }

    form div {
        margin-bottom: 10px;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>index</title>
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <?php
    $project_id = base64_decode($_GET['p']);
    $sql = "SELECT * FROM `project` WHERE project_id = '" . $project_id . "' ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    ?>

    <!-- Page Content -->
    <section class="py-5">

        <div style="width: 800px; margin: 0 auto; padding: 20px;">
            <?php
            if (isset($_POST['save'])) {
                date_default_timezone_set('Asia/Bangkok');
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $address_in = $_POST['address_in'];
                $amount = $_POST['amount'];
                $project_id = $_POST['project_id'];
                $date_create = date("Y-m-d H:i:s");
                $checkbox = $_POST['textbox'];

                $sql = "INSERT INTO donor(name, phone, address, amount, project_id, date_create, address_in, checkbox) VALUES('$name', '$phone', '$address', '$amount', '$project_id', '$date_create', '$address_in', '$checkbox')";
                if (mysqli_query($conn, $sql)) {
                    echo '<div class="alert alert-danger text-center">ขอขอบคุณ ' . $name . ' ที่ได้ร่วมบริจาคเงินจำนวน ' . $amount . ' บาท กับโครงการของเรา</div>';
                }
            }
            ?>

        </div>

        <div style="width: 800px; margin: 0 auto;  padding: 20px;">
            <div>

                <h1 class="text-center"><?= $data['project_title'] ?></h1>
            </div>
            <div>
                <center>
                    <img src="/project/img/<?php echo $data['project_pic']; ?>" class="card-img-top" alt="..." style="width: 500px;">
                </center>
            </div>
            <div><br>
                <b></b> <?= $data['project_process'] ?>
            </div>
        </div><br>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ภาพรวม
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <b></b> <?= $data['project_detail'] ?>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ความคืบหน้า
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <h3 class="text-center">เข้าร่วมบริจาค</h3>
        <div style="width: 800px; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">


            <div class="alert alert-danger">
                <div>
                    <b>ชื่อเจ้าของโครงการ : </b> <?= $data['project_manager'] ?>
                </div>
                <div>
                    <b>ชื่อโครงการ : </b> <?= $data['project_title'] ?>
                </div>
                <div>
                    <b>รายละเอียดโครงการ : </b> <?= $data['project_detail'] ?>
                </div>
                <hr>
                <h5 class="text-center">บัญชีธนาคารในการโอนเงินบริจาค</h5>
                <div>
                    <b>ชื่อบัญชี : </b> <?= $data['account_name'] ?>
                </div>
                <div>
                    <b>เลขที่บัญชี : </b> <?= $data['account_number'] ?>
                </div>
                <div>
                    <b>ธนาคาร : </b> <?= $data['account_bank'] ?>
                </div>
            </div>

            <form method="post" action="?p=<?= base64_encode($data['project_id']) ?>" onsubmit="return confirm('ยืนยันการบันทึกข้อมูล?')">
                <input type="hidden" name="project_id" value="<?= $data['project_id'] ?>">
                <div>
                    <label>ชื่อผู้บริจาค*</label>
                    <input type="text" name="name" class="form-control" required="">
                </div>
                <div>
                    <label>ที่อยู่*</label>
                    <textarea name="address" class="form-control" required=""></textarea>
                </div>
                <div>
                    <div>
                        <label>
                            <input type="checkbox" name="textbox" value="" onclick="if(this.checked){this.form.textbox.value = 1;}" />

                            ต้องการใบอนุโมทนา
                        </label>
                    </div>
                </div>
                <div>
                    <label>ชื่อบริษัท/ที่อยู่ส่งใบอนุโมทนา*</label>
                    <textarea name="address_in" class="form-control" required=""></textarea>
                </div>

                <div>
                    <label>เบอร์โทรศัพท์*</label>
                    <input type="number" name="phone" class="form-control" required="">
                </div>

                <div>
                    <label>จำนวนเงินที่บริจาค*</label>
                    <input type="number" name="amount" class="form-control" required="">
                </div>

                <br>
                <div class="text-center">
                    <!-- <button name="save" type="submit" class="btn btn-success btn-lg">บันทักเข้าร่วมบริจาค</button> -->
                    <button name="save" type="submit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">บันทึก</button>
                    <input class="btn btn-danger btn-lg" type=button onclick=window.history.back() value="ย้อนกลับ">
                </div>
            </form>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">ยืนยันการบันทึก</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>ยืนยันข้อมูลเพื่อบันทึกข้อมูลดังกล่าว</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>