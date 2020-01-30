<!doctype html>
<?php include('checklogin.php');
include('../database/condb.php');
error_reporting(0);
$do_id = $_GET['do_id'];
$sql = "SELECT * FROM donatetions INNER JOIN project ON donatetions.project_id = project.project_id ";
$sql .= "WHERE donatetions.do_id = '$do_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

///

$sql2 = "SELECT * FROM donor WHERE name = '" . $data['d_name'] . "' AND amount = '" . $data['do_namber'] . "' AND project_id = '" . $data['project_id'] . "' AND donor = '" . $data['address_in'] . "' ";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_array($result2);

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

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
	<style>
		body {
			margin: 20px;
			border: 10px solid #ccc;
			padding: 20px;
			font-family: 'Sarabun', sans-serif;
		}

		.text {
			margin-bottom: 10px;
		}

		.pm {
			display: inline-block;
		}

		.line {
			display: inline-block;
			text-decoration: underline;
			text-align: center;
		}

		input[type=text] {
			width: 440px;
			padding-left: 10px;
			border: none;
			border-bottom: 1px solid #ccc;
			padding-bottom: 5px;
			font-family: 'Sarabun', sans-serif;
			font-size: 17px;
		}
	</style>
</head>

<body>

	<h1 style="text-align: center; border-bottom: 1px solid #ccc; padding-bottom: 15px;">ใบอนุโมทนาบัตร</h1>

	<div class="text">
		<div class="pm" style="width: 150px;">
			ชื่อโครงการ
		</div>
		<input type="text" value="<?= $data['project_title'] ?>">
	</div>

	<div class="text">
		<div class="pm" style="width: 150px;">
			ชื่อผู้บริจาค
		</div>
		<input type="text" value="<?= $data2['name'] ?>">
	</div>

	<div class="text">
		<div class="pm" style="width: 150px;">
			เบอร์โทรผู้บริจาค
		</div>
		<input type="text" value="<?= $data2['phone'] ?>">
	</div>

	<div class="text">
		<div class="pm" style="width: 150px;">
			ที่อยู่ผู้บริจาค
		</div>
		<input type="text" value="<?= $data2['address'] ?>">
	</div>
	<div class="text">
		<div class="pm" style="width: 150px;">
			บริษัทที่อยู่ผู้บริจาค
		</div>
		<input type="text" value="<?= $data2['address_in'] ?>">
	</div>
	<br>
	<div class="text" style="text-align: center; font-size: 20px; font-weight: bold;">
		**** ขอขอบคุณที่เข้ารวมบริจาคให้กับมูลนิธิมหาวิทยาลัยมหาสารคาม ขออนุโมทนาบุญกุศลในครั้งนี้จงดลบันดาลคุณและครอบครวและผู้ดูแลใกล้ชิด
		และบุคคลอันเป็นที่รักทั้งหลาย ตลอดจนผู้ที่ร่วมมีส่วนในการสร้างบุญครั้งนี้ทุกคนจงมีแต่ความสุขสวัสดิ์ เจริญรุ่งเรือง ก้าวหน้าในชีวิต มีทรัพย์ศฤงคาร บริวาร มิตรสหายที่ดีนำพาความสุขความเจริญมาให้ มีโชคลาภ มีสุขภาพดี แข็งแรง อายุยืนนาน ปราศจากศัตรูผู้คิดร้าย
		และภัยตรายทั้งปวงขอให้บุญกุศลจากการทำบุญในวันนี้จงประสบผลแกผู้ที่ร่วมทำบุญทุกท่านและครอบครัว
		จงพบแต่ความสุขความเจริญคิดจะทำการสิ่งใดขอให้สมหวังตั้งใจทุกประการด้วยเทอญ....สาธุ... ****
	</div>
	<br>
	<div class="text" style="text-align: center;">
		วันที่ <?= DateThai($data['do_date']) ?>
	</div>
	<br>

	<script>
		window.print();
	</script>

</body>

</html>