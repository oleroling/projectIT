<!doctype html>
<?php include('checklogin.php');
include('../database/condb.php');
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>donatetion</title>
    <?php include('../shared/style.php'); ?>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="../assets/style/global.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div style="padding: 20px;">
        <h3>
            <a href="donatetion.php" style="float: right;" class="btn btn-info">กลับ</a>
            ผู้ร่วมบริจาค
        </h3>
        <table class="container table table-bordered table-striped">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อโครงการ</th>
                <th>ชื่อผู้บริจาค</th>
                <th>จำนวนเงินบริจาค</th>
                <th>วันที่</th>
                <th>บันทึกข้อมูล</th>
            </tr>
            <?php
            $project_id = $_GET['project_id'];
            $sql = "SELECT * FROM donor d
            LEFT JOIN project
            ON d.project_id = project.project_id 
            WHERE d.project_id = $project_id ORDER BY d.id desc ";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            while ($data = mysqli_fetch_array($result)) {
                $sql2 = "SELECT * FROM donatetions WHERE do_namber = '" . $data['amount'] . "' AND d_name = '" . $data['name'] . "' ";
                $result2 = mysqli_query($conn, $sql2);
                $rows = mysqli_num_rows($result2);
            ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?php echo $data['project_title']; ?></td>
                    <th><?= $data['name'] ?></th>
                    <td><?php echo $data['amount']; ?></td>
                    <td><?php echo $data['date_create']; ?></td>
                    <td>

                        <?php if ($rows == 0) { ?>
                            <a href="add_donatetion.php?project_id=<?= $data['project_id'] ?>&acc=<?= $data['account_number'] ?>&name=<?= $data['name'] ?>&amount=<?= $data['amount'] ?>" class="btn btn-success">
                                บันทึกการบริจาค
                            </a>
                        <?php } else {
                            echo 'บันทึกแล้ว';
                        } ?>
                    </td>
                <?php
                $i++;
            }
                ?>
                </tr>

        </table>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>


</html>