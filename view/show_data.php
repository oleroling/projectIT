<!DOCTYPE html>
<html lang="en">
<?php
include('checklogin.php');
include('../components/menu.php');
include('../database/condb.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- ประวัติการบริจาค -->
    <center>
        <h1>ประวัติการบริจาค</h1>
    </center>
    <br>
    <table class=" container ">
        <table class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ชื่อโครงการ</th>
                        <th>จำนวนเงิน</th>
                        <th>วันที่</th>
                        <th>รูปสลิป</th>
                        <th>ตรวจสอบ/อนุมัติ</th>
                    </tr>
                </thead>
                <?php
                $sum = 0;
                $email = $_SESSION['email'];
                $sql3 = "SELECT user_id FROM users WHERE email='$email'";
                $result3 = mysqli_query($conn, $sql3);
                if ($row3 = mysqli_fetch_row($result3)) {
                    $user_id = $row3[0];
                    $sql4 = "SELECT * FROM donatetions do
                                        LEFT JOIN users
                                        ON do.user_id = users.user_id
                                        LEFT JOIN project
                                        ON do.project_id = project.project_id
                                        WHERE do.user_id='$user_id'";
                    $result4 = mysqli_query($conn, $sql4);
                    while ($data4 = mysqli_fetch_array($result4)) {
                        ?>
                        <tr>
                            <td><?php echo $data4['project_title']; ?></td>
                            <td><?php
                                        echo $data4['do_namber'];
                                        $sum += $data4['do_namber'] ?></td>
                            <td><?php echo $data4['do_date']; ?></td>
                            <td><img src="../img/<?php echo $data4['do_pic']; ?>" alt="img" width="100" height="100"></td>
                            <td><a href="../model/delete.php?action=delete&project_id=<?php echo $data['project_id']; ?>" onclick="return confirm('ยืนยันการจ่าย!!!')"> อนุมัติ</a></td> 
                        </tr>
                    <?php
                        }
                        ?>
                    <td>รวม</td>
                    <td><?php echo $sum; ?></td>
                    <?php if ($sum >= $data4['project_money']) { ?>
                        <td></td>
                        <td></td>
                        <td></td>
                <?php }
                } ?>

            </table>
        </table>
    </table>
    <br><br><br>
    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>
</body>

</html>