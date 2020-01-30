<?php
// error_reporting(0);
include "../database/condb.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style/global.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .dropbtn {
      background-color: #ffbf00;
      color: #666666;
      padding: 5px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 175px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      font-size: 16px;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #ffbf00;
    }


    /* blok 2 */
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .dropbtn {
      background-color: #ffbf00;
      color: #666666;
      padding: 5px;
      font-size: 16px;
      border: none;
    }

    .dropdown1 {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 175px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      font-size: 14px;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #ffbf00;
    }
  </style>
  <link href="pricing.css" rel="stylesheet">
</head>

<body>
  <!-- <div class="p-3 mb-2 bg-warning text-dark"> -->
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-warning text-dark">
    <h5 class="my-0 mr-md-auto font-weight-normal">มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <div class="col-md-12">
      <a class="p-2 text-secondary" href="../view/indexdata.php">โครงการทั้งหมด</a>
        <a class="p-2 text-secondary" href="../view/donatetion.php">บริจาคที่นี้</a>
        <a class="p-2 text-secondary" href="../view/message.php">ข่าวสาร</a>
        <a class="p-2 text-secondary" href="../view/addproject.php">ส่งโครงการขอทุน</a>
        <?php
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM `users` WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {
          if ($data['status'] == 0) {
            ?>
            <a class="p-2 text-secondary" href="../view/contact.php">ติดต่อเรา</a>
            <div class="dropdown">
              <button class="dropbtn"><?php echo $data['first_name'] . " " . $data['last_name']; ?></button>
              <div class="dropdown-content">
                <a href="../view/profile.php">ข้อมูลส่วนตัว</a>
                <a href="../view/show_users.php">จัดการผู้ใช้งาน</a>
                <a href="../view/manage.php">จัดการข้อมูลการอนุญาติ</a>
                <a href="../view/show_data.php">จัดการประวัติการบริจาค</a>
                <a href="../view/show_history.php">ประวัติการบริจาค</a>
                <a href="../view/logout.php">ออกจากระบบ</a>
              </div>
            </div>
          <?php
            } elseif ($data['status'] == 1) {
              ?>
            <a class="p-2 text-secondary" href="../view/comment.php">ติดต่อเรา</a>
            <div class="dropdown">
              <button class="dropbtn"><?php echo $data['first_name'] . " " . $data['last_name']; ?></button>
              <div class="dropdown-content" style="z-index: 999;">
                <a href="../view/profile.php">ข้อมูลส่วนตัว</a>
                <a href="../view/show_history.php">ประวัติการบริจาค</a>
                <a href="../view/logout.php">ออกจากระบบ</a>
              </div>
            </div>
          <?php
            }
            ?>
          <?php
            if ($data['email']) {
              ?>

          <?php
            } else {
              ?>
            <a href="../view/register.php">สมัครสมาชิก</a>
        <?php
          }
        }
        ?>


        <?php
        if (isset($_SESSION['email'])) {
          ?>
        <?php
        } else {
          ?>

          <a class="btn btn-outline-primary" href="../view/login.php">เข้าสู่ระบบ</a>
        <?php
        }
        ?>
      </div>
    </nav>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- ตรงกลาง -->
<!-- <div class="container"> -->

</html>