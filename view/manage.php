<!DOCTYPE html>
<?php include('checklogin.php');
include('../components/menu.php');
include('../database/condb.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>manage</title>
</head>
<link rel="stylesheet" href="../assets/style/global.css">

<body>
    <center>
        <h1>โครงการทั้งหมด</h1>
    </center>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>หัวข้อ</th>
                        <th>รายละเอียดโครงการ</th>
                        <th>ชื่อผู้ตั้งโครงการ</th>
                        <th>รูป</th>
                        <th>เวลา</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <?php
                $sql = "select * from project";
                $result = mysqli_query($conn, $sql);

                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['project_title'] ?></td>
                        <td><?php echo $data['project_detail'] ?></td>
                        <td><?php echo $data['project_manager'] ?></td>
                        <td><img src="../img/<?php echo $data['project_pic']; ?>" alt="img" width="100" height="100"></td>
                        <td><?php echo $data['project_date'] ?></td>
                        <td><a href="../model/delete.php?action=delete&project_id=<?php echo $data['project_id']; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')"> ลบ</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <img src="<?php echo "/" . $data['project_pic']; ?>\" alt="">
        </div>
    </div>
</body>
<footer>
    <?php include('../components/footer.php'); ?>
</footer>

</html>