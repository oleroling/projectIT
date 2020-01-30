<!DOCTYPE html>
<html lang="en">
<?php
include('checklogin.php');
include('../database/condb.php');
include('../components/menu.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        <a href="donatetion.php" style="float: right;" class="btn btn-info">กลับ</a>
        ประวัติการบริจาคทั้งหมด
    </h1>
    <center>
        <h5>ยอดที่คุณได้เคยทำการบริจาคไป</h5>
    </center>
    <div>
        <table class="container table table-bordered">
            <tr>
                <th>ชื่อโครงการ</th>
                <th>จำนวนเงินบริจาค</th>
                <th>ดูโครงการ</th>
            </tr>
            <?php
            $email = $_SESSION['email'];
            $sql = "SELECT user_id FROM users WHERE email='$email' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($result);
            $user_id = $row[0];
            if ($user_id) {

                $sql = "SELECT * FROM `donatetions` do
                            LEFT JOIN project
                            ON do.project_id = project.project_id 
                            WHERE user_id=$user_id";
                $result = mysqli_query($conn, $sql);
            }
            ?>

            <tr>
                <td>..</td>
                <td>...</td>
                <td>
                    <button>ดูข้อมูล</button>
                </td>

            </tr>

        </table>

    </div>
</body>
<footer>
    <?php include('../components/footer.php'); ?>
</footer>

</html>