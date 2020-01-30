<!DOCTYPE html>
<?php include('checklogin.php');
include('../database/condb.php');
include('../components/menu.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/global.css">
    <title>content</title>
</head>

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
    <center>
        <h4>ความคิดเห็นที่ส่งเข้ามา</h4>
    </center>
    <br><br>
    <table class="container">
        <tr>
            <th>ความคิดเห็น</th>
            <th>วันที่ถาม</th>
            <th>สถานะ</th>
        </tr>
        <?php
        $sql = "SELECT * FROM comment";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $data['com_text']; ?></td>
                <td><?php echo DateThai($data['com_date']); ?></td>
                <?php
                    if ($data['com_status'] == 0) {
                        ?>
                    <td>ยังไม่ตอบ</td>
                <?php
                    } elseif ($data['com_status'] == 1) {
                        ?>
                    <td>ตอบแล้ว</td>
                <?php } ?>
                <?php
                    if ($data['com_status'] == 0) {
                        ?>
                    <td><a href="add_comment.php?id=<?php echo $data['id']; ?>">ตอบคำถาม</a></td>
                <?php
                    } elseif ($data['com_status'] == 1) {
                        ?>
                    <td></td>
                <?php } ?>

            </tr>
        <?php
        } ?>
    </table>
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <br><br><br>
    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>
</body>

</html>