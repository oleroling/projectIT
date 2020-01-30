<!DOCTYPE html>
<?php include('checklogin.php'); ?>
<html lang="en">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>addproject</title>
    <?php include('../shared/style.php'); ?>
</head>
<link rel="stylesheet" href="../assets/style/global.css">
<style>
    .notice {
        padding: 10px;
        background-color: #fafafa;
        border-left: 6px solid #7f7f84;
        margin-bottom: 10px;
        -webkit-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
    }

    .notice-sm {
        padding: 10px;
        font-size: 80%;
    }

    .notice-lg {
        padding: 35px;
        font-size: large;
    }

    .notice-success {
        border-color: #80D651;
    }

    .notice-success>strong {
        color: #80D651;
    }

    .notice-info {
        border-color: #45ABCD;
    }

    .notice-info>strong {
        color: #45ABCD;
    }

    .notice-warning {
        border-color: #FEAF20;
    }

    .notice-warning>strong {
        color: #FEAF20;
    }

    .notice-danger {
        border-color: #d73814;
    }

    .notice-danger>strong {
        color: #d73814;
    }

    form label h4 {
        text-align: left;
        width: 100%;
        display: inline-block;
        float: left;
    }
</style>


<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
                <form method="POST" action="../model/process_project.php">
                    <div class="form-group">
                        <label>
                            <h4>หัวข้อโครงการ</h4>
                        </label>
                        <input class="form-control" type="text" name="project_title" placeholder="หัวข้อโครงการ" required></<input>
                        <br>
                        <label>
                            <h4>กรอกรายละเอียดโครงการ</h4>
                        </label>
                        <input class="form-control" type="text" name="project_detail" placeholder="รายละเอียดโครงการ" required>
                        <br>
                        <label>
                            <h4>ชื่อผู้จัดตั้งโครงการ</h4>
                        </label>
                        <input class="form-control" type="text" name="project_manager" placeholder="ชื่อผู้จัดตั้งโครงการ" required>
                        <br>
                        <label>
                            <h4>เลขที่บัญชีโครงการ (บัญชีธนาคาร)</h4>
                        </label>
                        <input class="form-control" type="text" name="account_number" placeholder="เลขบัญชีโครงการ" required>
                        <br>
                        <label>
                            <h4>ชื่อบัญชีโครงการ (บัญชีธนาคาร)</h4>
                        </label>
                        <input class="form-control" type="text" name="account_name" placeholder="ชื่อบัญชีโครงการ" required>
                        <br>
                        <label>
                            <h4>ธนาคาร (บัญชีธนาคาร)</h4>
                        </label>
                        <input class="form-control" type="text" name="account_bank" placeholder="ธนาคาร" required>
                        <br>
                        <label>
                            <h4>จำนวนที่ขอรับบริจาค</h4>
                        </label>
                        <input required="" class="form-control" type="text" name="project_money" placeholder="จำนวนที่ขอรับบริจาค">
                        <label>
                            <input type="checkbox" name="project_money2" value="0">
                            ไม่มีจำนวนที่แน่นอน
                        </label>
                        <br>

                        <label>
                            <h4>วันที่สิ้นสุดโครงการ</h4>
                        </label>
                        <input class="form-control" type="date" name="project_date" placeholder="วันที่สิ้นสุดโครงการ" required>
                        <br>
                        <label for="lname">
                            <h4>รูปภาพโครงการ</h4>
                        </label>
                        <input type="file" name="project_pic" placeholder="รูปภาพโครงการ">

                        <br><br>
                        <input class="btn btn-success" type="submit" value="บันทึกโครงการ"></input>
                        <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
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
    $('input[name="project_money2"]').on('change', function() {

        if ($('input[name="project_money2"]').is(':checked')) {
            $('input[name="project_money"]').attr('disabled', 'disabled');
            $('input[name="project_money"]').removeAttr('required');
        } else {
            $('input[name="project_money"]').removeAttr('disabled');
            $('input[name="project_money"]').attr('required', 'required');
        }

    });
</script>

</html>