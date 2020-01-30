<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "myfile/" . $_FILES["fileUpload"]["name"])) {
        echo "อัปโหลดเรียบร้อย";
    } else {
        echo "ไม่สามารถอัปโหลดได้";
    }

    ?>
</body>

</html>