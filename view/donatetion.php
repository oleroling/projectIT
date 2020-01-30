<!doctype html>
<?php
include('checklogin.php');
include('../database/condb.php');

date_default_timezone_set('Asia/Bangkok');
?>
<html lang="en">

<head>
    <title>donatetion</title>
    <?php include('../shared/style.php'); ?>
</head>

<style type="text/css">
    p {
        word-spacing: 20px
    }
</style>

<?php
function DateThai($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    // $strMinute = date("i", strtotime($strDate));
    // $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}
?>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <form action="add_donatetion.php" method="get">
        <div class="col-lg-12">

            <h3>โครงการบริจาคทั้งหมด</h3>
            <table class="container table table-bordered">
                <tr>
                    <th>
                        รูปโครงการ
                    </th>
                    <th width="15%">
                        ชื่อโครงการ
                    </th>
                    <th>
                        ชื่อผู้จัดตั้งโครงการ
                    </th>
                    <th>
                        ยอดบริจาค / คงเหลือ
                    </th>
                    <th>วันสิ้นสุดโครงการ</th>
                    <th>
                        บริจาค
                    </th>
                    <th>ผู้ร่วมบริจาค</th>
                    <th>
                        ประวัติการบริจาค
                    </th>
                </tr>
        </div>
        <?php
        $sql = "SELECT * FROM `project` WHERE user_id IS NOT NULL ";
        if ($_SESSION['status'] == 1) {
            $sql .= " AND user_id = '" . $_SESSION['id'] . "' ";
        }
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td>
                    <a href="/project/img/<?php echo $data['project_pic']; ?>" target="_blank">
                        <img src="/project/img/<?php echo $data['project_pic']; ?>" alt="project_pic" width="60">
                    </a>
                </td>
                <td><a href="viewdonatetion.php?id=<?php echo $data['project_id']; ?>"><?php echo $data['project_title']; ?></a></td>
                <td><?php echo $data['project_manager']; ?></td>
                <?php
                $num = 0;
                $project_id = $data['project_id'];
                $sql5 = "SELECT do_namber,project_money FROM donatetions do
                                            LEFT JOIN project
                                            ON do.project_id = project.project_id 
                                            WHERE do.project_id=$project_id";
                $result5 = mysqli_query($conn, $sql5);
                while ($data5 = mysqli_fetch_array($result5)) {
                    $num += $data5['do_namber'];
                    $num2 = $data5['do_namber'];
                    $cha = $data['project_money'];
                    $cha -= $num2;
                }
                $row6 = $data['project_money'];
                ?>
                <td>


                    <?php echo $num, "/";
                    if ($data['project_money'] > 0) {
                        echo $row6;
                        $sumcha = $row6 - $num;
                        if ($sumcha < 0) {
                            $sumcha = 0;
                        }
                        echo " คงเหลือ ", $sumcha;
                    } else {
                        echo 'ไม่ระบุ';
                    }

                    //echo $data['project_money']; 
                    ?></td>

                <td><?php echo DateThai($data['project_date']); ?></td>
                <td align="center">

                    <?php if ($data['project_money'] > 0) { ?>

                        <?php if ($num >= $row6) { ?>

                            ครบยอดเเล้ว

                        <?php } else { ?>

                            <a class="btn btn-success" href="add_donatetion.php?project_id=<?php echo $data['project_id']; ?> &acc=<?php echo $data['account_number']; ?>">บริจาค</a>

                        <?php } ?>

                        <div>
                            <?php
                            if (strtotime(date("Y-m-d")) > strtotime($data['project_date'])) {
                                echo '<span style="color: red;">สิ้นสุดรับบริจาค</span>';
                            }
                            ?>
                        </div>

                    <?php } else { ?>

                        <?php if (strtotime(date("Y-m-d")) > strtotime($data['project_date'])) { ?>

                            <span style="color: red;">สิ้นสุดรับบริจาค</span>

                        <?php } else { ?>
                            <a class="btn btn-success" href="add_donatetion.php?project_id=<?php echo $data['project_id']; ?> &acc=<?php echo $data['account_number']; ?>">บริจาค</a>

                        <?php } ?>

                    <?php } ?>

                </td>
                <td>
                    <a href="donor.php?project_id=<?= $data['project_id'] ?>" class="btn btn-success">
                        ดูข้อมูล
                    </a>
                </td>
                <td><a class="btn btn-info" href="historyDonatetion.php?project_id=<?php echo $data['project_id']; ?>">ประวัติการบริจาค</a></td>
            <?php
        }
            ?>

            </tr>
            </table>

    </form>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <div>
                <?php
                if (isset($_POST['submit'])) {
                ?>
                    <form method="POST" action="../model/donatetions.php">
                        <?php
                        $project_id = $_GET['project_id'];
                        echo $project_id;
                        $email = $_SESSION['email'];
                        $sql2 = "SELECT * FROM `users` WHERE email='$email'";
                        $result2 = mysqli_query($conn, $sql2);
                        while ($data2 = mysqli_fetch_array($result2)) {
                        ?>
                            <label for="fname">ชื่อ:</label>
                            <input type="hidden" id="fname" name="user_id" value="<?php echo $data2['user_id']; ?>">
                            <input type="text" id="fname" name="do_name" value="<?php echo $data2['first_name'] . " " . $data2['last_name']; ?>">
                        <?php } ?>
                        <label>จำนวนเงิน:</label>
                        <input type="text" name="do_namber" placeholder="">
                        <br><br><input type="submit" value="ยืนยัน">
                    </form>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>