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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
function DateThai($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear $strHour:$strMinute";
}
?>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div style="padding: 20px;">
        <h3>
            <a href="donatetion.php" style="float: right;" class="btn btn-info">กลับ</a>
            ประวัติการบริจาค
        </h3>
        <table class="container table table-bordered table-striped">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อโครงการ</th>
                <th>ชื่อผู้บริจาค</th>
                <th>จำนวนเงินบริจาค</th>
                <th>วันที่</th>
                <th>ใบอนุโม</th>
            </tr>
            <?php
            $project_id = $_GET['project_id'];
            $sql = "SELECT * FROM donatetions d
            LEFT JOIN project
            ON d.project_id = project.project_id 
            WHERE d.project_id=$project_id ORDER BY d.do_id desc ";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?php echo $data['project_title']; ?></td>
                    <th><?= $data['d_name'] ?></th>
                    <td><?php echo $data['do_namber']; ?></td>
                    <td><?php echo DateThai($data['do_date']); ?></td>
                    <td>
                        <a target="blank" href="print.php?do_id=<?= $data['do_id'] ?>" class="btn btn-info">
                            พิมพ์ใบอนุโม
                        </a>
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