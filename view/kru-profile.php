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
        <a style="float: right;" class="btn btn-info btn-lm" onclick=window.history.back()>ย้อนกลับ</a>
        <h1>รายชื่อครู</h1>

    </div>
    <div class="container">
        <div class="row">

            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ชื่อ-นามสกุล</th>
                            <th>ที่อยู่</th>
                            <th>อีเมลที่ติดต่อได้</th>
                            <th>เบอร์โทรศัพท์</th>
                            <!-- <th>รูป</th> -->
                            <th>โรงเรียน</th>
                        </tr>
                    </thead>

                    <?php
                    $sql = "select * from kru";
                    $result = mysqli_query($conn, $sql);

                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $data['kru_name'] ?> <?php echo $data['kru_lastname'] ?></td>
                            <td><?php echo $data['kru_address'] ?></td>
                            <td><?php echo $data['kru_email'] ?></td>
                            <td><?php echo $data['kru_phone'] ?></td>
                            <!-- <td><img src="../img/<?php echo $data['news_img']; ?>" alt="img" width="170" height="170"></td> -->
                            <td><?php echo $data['kru_school'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <!-- <img src="<?php echo "/" . $data['news_img']; ?>\" alt=""> -->
            </div>
        </div>
    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>

</body>

</html>