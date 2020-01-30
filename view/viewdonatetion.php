<!DOCTYPE html>
<?php
include('checklogin.php');
include('../components/menu.php');
include('../database/condb.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/style/global.css">

<body>
    <div>
        <h1>
            <a class="btn btn-success" style="float: right;" href="add_donatetion.php?project_id=<?php echo $data['project_id']; ?> &acc=<?php echo $data['account_number']; ?>">บริจาค</a>
            ข้อมูลการบริจาค
        </h1>

        <div>
            <table class="container table table-bordered">
                <tr>

                    <th>
                        ยอดทั้งหมด ณ เวลานี้
                    </th>

                </tr>
        </div>
        <?php
        $sql = "SELECT * FROM `project` WHERE user_id IS NOT NULL ";
        if ($_SESSION['status'] == 1) {
            $sql .= " AND user_id = '" . $_SESSION['id'] . "' ";
        }
        $result = mysqli_query($conn, $sql);
        ?>
        <?php
        $idn = $_GET['id'];
        $sql5 = "SELECT SUM(do_namber) FROM donatetions WHERE project_id='$idn'";

        $result5 = mysqli_query($conn, $sql5);
        $data5 = mysqli_fetch_array($result5);

        ?>

        <tr>

            <td>
                <?php echo $data5['SUM(do_namber)']; ?>
            </td>
        </tr>
    </div>

</body>


</html>