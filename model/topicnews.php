<?php
include('../database/condb.php');



// $news_topic = $_POST['news_topic'];
// $news_detail = $_POST['news_detail'];
// $news_date = $_POST['news_date'];

// $sql = "INSERT INTO news ('news_topic', 'news_detail') 
//         VALUES ($news_topic,$news_detail)";

// $result = mysqli_query($conn,$sql);

// if ($result) {
//     header("location: ../view/message.php");
// } else {
//     echo("Error description: " . mysqli_error($result));
// }
if (move_uploaded_file($_FILES["news_img"]["tmp_name"], "../img/" . $_FILES["news_img"]["name"])) {
    $sql = "INSERT INTO news (news_topic, news_detail, news_date, news_img)

    VALUES ('" . $_POST["news_topic"] . "', '" . $_POST["news_detail"] . "', '" . $_POST["news_date"] . "', '" . $_FILES["news_img"]["name"] . "')";
    $query = mysqli_query($conn, $sql);
}







if ($query) {
    echo "<script>alert(' บันทึกการทำรายการเสร็จสมบูรณ์'); window.location ='../view/user-news.php';</script>";
    // header("location:../view/user-news.php");
}
mysqli_close($conn);
