<!DOCTYPE html>
<?php //include('checklogin.php');
include('../database/condb.php');
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php include('../shared/style.php'); ?>
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
    return "$strDay $strMonthThai $strYear";
}
?>

<body>
    <?php include('../shared/header-user.php'); ?>
    <div class="container">
        <div class="col-ml-5">
            <div>
                <form method="POST" action="../model/topicnews.php" enctype="multipart/form-data">
                    <div class="container">

                        <h4>หัวข้อข่าว</h4>
                        <input class="form-control" type="text" name="news_topic" placeholder="หัวข้อโครงการ" required></<input>

                        <h4>รายละเอียด</h4>
                        <textarea class="form-control" rows="5" cols="25" type="text" name="news_detail" placeholder="รายละเอียด"></textarea>
                        <div class="col-md-4">
                            <h4>วันที่</h4>
                            <input class="form-control" type="date" name="news_date" placeholder="วันที่" required>
                        </div>

                        <label for="lname">
                            <h4>รูปภาพ</h4>
                        </label>
                        <input type="file" name="news_img" placeholder="รูปภาพโครงการ" required>
                        <br>
                        <center>
                            <button name="save" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">บันทึก</button>
                            <!-- <input class="btn btn-success" type="submit" value="บันทึก"></input> -->
                            <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
                        </center>
                    </div>
                </form>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ยืนยันการบันทึก</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>ยืนยันข้อมูลเพื่อบันทึกข้อมูลดังกล่าว</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>