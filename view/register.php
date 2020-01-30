<!DOCTYPE html>
<html>
<?php
include('../database/condb.php');
?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
</head>
<body>
  <br><br><br>
  <h2 align="center">ลงทะเบียนเข้าสู่ระบบ</h2>
  <br>
  <form action="../model/registeration.php" method="POST">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">สมัครสมาชิก</div>
            <div class="card-body">

              <form class="form-horizontal" method="post" action="#">

                <div class="form-group">
                  <label for="first_name" class="cols-sm-2 control-label">ชื่อ</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="ชื่อ" required/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="last_name" class="cols-sm-2 control-label">นามสกุล</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="นามสกุล" required/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="cols-sm-2 control-label">อีเมล</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="email" id="email" placeholder=" อีเมล" required/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="cols-sm-2 control-label">รหัสผ่าน</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="password" id="password" placeholder="ใส่รหัสผ่าน" required/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="confirm" class="cols-sm-2 control-label">รหัสผ่านอีกครั้ง</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="confirm" id="confirm" placeholder="ใส่รหัสผ่านอีกครั้ง" required/>
                    </div>
                  </div>
                </div>
                <center>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">ยืนยัน</button>
                  </div>
                  <div class="login-register">
                    <a href="login.php">เข้าสู่ระบบ</a>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    </center>
</body>

</html>