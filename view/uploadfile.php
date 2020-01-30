<!DOCTYPE html>
<html lang="en">
<?php
include('checklogin.php');
include('../database/condb.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>

    <from name="from" method="post" action="upload.php" enctype="multip/from-data">
        <input type="file" name="fileupload">
        <input name="btnSubmit" type="submit" value="submit">

        <input class="btn btn-danger btn-lg" type=button onclick=window.history.back() value="ย้อนกลับ">
        </form>
        <?php

        ?>
        <hr>
        <?php include('../shared/footer.php'); ?>
        <?php include('../shared/script.php'); ?>
</body>

</html>