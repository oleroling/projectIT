<!DOCTYPE html>
<html lang="en">
<?php include('checklogin.php');
include('../database/condb.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div class="container">
        <div class="col-ml-5">
            <h1>จัดเก็บข้อมูลครู</h1>
            <form method="POST" action="../model/kruprofile.php" enctype="multipart/form-data">
                <div class="container ml-3">
                    <h4>ชื่อ</h4>
                    <input class="form-control" type="text" name="kru_name" placeholder="ชื่อ" required></<input>
                    <h4>นามสกุล</h4>
                    <input class="form-control" type="text" name="kru_lastname" placeholder="นามสกุล" required></<input>
                    <h4>ที่อยู่</h4>
                    <input class="form-control" type="text" name="kru_address" placeholder="ที่อยู่" required></<input>
                    <h4>อีเมล</h4>
                    <input class="form-control" type="text" name="kru_email" placeholder="อีเมล" required></<input>
                    <h4>เบอร์โทร</h4>
                    <input class="form-control" type="text" name="kru_phone" placeholder="เบอร์โทร" required></<input>
                    <h4>ชื่อโรงเรียน</h4>
                    <input class="form-control" type="text" name="kru_school" placeholder="ชื่อโรงเรียน" required></<input>
                    <!-- <label for="lname">
                        <h4>รูปภาพ</h4>
                    </label>
                    <input type="file" name="kru_img" placeholder="รูปภาพ"> -->
                </div>
                <br>
                <center>
                    <input class="btn btn-success" type="submit" value="บันทึก"></input>
                    <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
                </center>

            </form>
        </div>
    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>