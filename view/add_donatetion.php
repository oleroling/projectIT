<!doctype html>
<?php include('checklogin.php');
include('../database/condb.php'); ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>donatetion</title>
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <form method="POST" action="../model/donatetions.php" style="border: 1px solid #ccc; width: 800px; margin: 0 auto; padding: 30px;">

        <h2 style="border-bottom: 1px solid #ccc; padding-bottom: 10px;">บริจาค</h2>

        <?php
        $project_id = $_GET['project_id'];
        $email = $_SESSION['email'];
        $account_number = $_GET['acc'];
        $sql2 = "SELECT * FROM `users` WHERE email='$email'";
        $result2 = mysqli_query($conn, $sql2);

        $data2 = mysqli_fetch_array($result2);

        ?>

        <div style="margin-bottom: 10px;">
            <label>เลขบัญชีโครงการ</label>
            <input type="hidden" id="fname" name="project_id" value="<?php echo $project_id; ?>">
            <input type="text" name="account_number" class="form-control" value="<?php echo $account_number; ?>">
        </div>

        <div style="margin-bottom: 10px;">
            <label>ชื่อเจ้าของโครงการ</label>
            <input type="hidden" id="fname" name="project_id" value="<?php echo $project_id; ?>">
            <input type="hidden" id="fname" name="user_id" value="<?php echo $data2['user_id']; ?>">
            <input type="text" class="form-control" id="fname" name="do_name" value="<?php echo $data2['first_name'] . " " . $data2['last_name']; ?>">
        </div>

        <div style="margin-bottom: 10px;">
            <label>ชื่อผู้บริจาค</label>
            <input type="text" name="d_name" class="form-control" required="" value="<?= @$_GET['name'] ?>">
            <label>
                <input type="checkbox" name="d_name2" id="dc" value="ไม่ประสงค์ออกนาม">
                ไม่ประสงค์ออกนาม
            </label>
        </div>

        <div style="margin-bottom: 10px;">
            <label>จำนวนเงิน</label>
            <input type="number" class="form-control" id="fname" name="do_namber" required="" value="<?= $_GET['amount'] ?>">
        </div>

        <div style="margin-bottom: 10px;">
            <label>ส่งสลิปที่นี้</label>
            <input class="form-control" type="file" name="do_pic" required="">
        </div>

        <div style="margin-bottom: 10px; text-align: center;">
            <input class="btn btn-success" type="submit" name="add" value="ยืนยัน">
            <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
        </div>


    </form>

    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>
    $('#dc').on('change', function() {

        if ($('input#dc').is(':checked')) {
            $('input[name="d_name"]').attr('disabled', 'disabled');
            $('input[name="d_name"]').removeAttr('required');
        } else {
            $('input[name="d_name"]').removeAttr('disabled');
            $('input[name="d_name"]').attr('required', 'required');
        }

    });
</script>

</html>