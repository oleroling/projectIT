<!DOCTYPE html>
<html lang="en">
<?php include('checklogin.php');
include('../database/condb.php');
?>

<head>
    <meta charset="utf-8">
    <title>มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div class="container">
        <h1>ข้อมูลส่วนตัว</h1>
        <div class="row justify-content-center my-5">
            <!-- card -->
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">จัดการข้อมูลโปรไฟล์</h5>
                        <h6 class="card-subtitle mb-2 text-muted">edit profile</h6>
                        <!-- form -->

                        <?php
                        //  $id = $_SESSION['id'];
                        $sql = "SELECT * FROM `users` WHERE user_id = '" . $_SESSION['id'] . "' ";

                        $result = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_array($result);

                        ?>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" name="txtTitle" value="<?php echo $data['first_name']; ?>" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">นามสกุล</label>
                                    <input type="text" class="form-control" name="txtName" value="<?php echo $data['last_name']; ?>" disabled>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                  <label for="inputAddress">ชื่อ - นามสกุล</label>
                  <input type="text" class="form-control">
                </div> -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" name="txtPhone" value="<?php echo $data['phone']; ?>" disabled>
                                </div>
                                <div class="form-group col-md-8">
                                    <label>อีเมล</label>
                                    <input type="text" class="form-control" name="txtEmail" value="<?php echo $data['email']; ?>" disabled>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">แก้ไขข้อมูล</button>
                            <!-- <a href="#" class="card-link">ยกเลิก</a> -->
                        </form>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../model/update-profile.php?id=<?php echo $data['user_id']; ?>" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>ชื่อ</label>
                                                    <input type="text" class="form-control" name="first_name" value="<?php echo $data['first_name']; ?>">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">นามสกุล</label>
                                                    <input type="text" class="form-control" name="last_name" value="<?php echo $data['last_name']; ?>">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                  <label for="inputAddress">ชื่อ - นามสกุล</label>
                  <input type="text" class="form-control">
                </div> -->
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>เบอร์โทรศัพท์</label>
                                                    <input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>อีเมล</label>
                                                    <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                                                </div>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end form -->
                    </div>
                </div>
                </nav>
            </div>
            <!-- end card -->
        </div>

    </div>


    <!-- <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">แก้ไข ข้อมูลส่วนตัว</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../model/update-profile.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="user_id" id="user_id">
                        <div class="topnav input">
                            <label>ชื่อ</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="ชื่อ">
                        </div>
                        <div class="topnav input">
                            <label>นามสกุล</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="นามสกุล">
                        </div>
                        <div class="topnav input">
                            <label>อีเมล</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="อีเมล">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn4">บันทึก</button>
                        <button type="button" class="btn3" data-dismiss="modal">ยกเลิก</button>
                    </div>
                </form>

            </div>
        </div>
    </div> -->
    <!-- script แก้ไขข้อมูล  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr'); //trหัวตาราง tdข้อมูลในตาราง

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#user_id').val(data[0]);
                $('#first_name').val(data[1]);
                $('#last_name').val(data[2]);
                $('#email').val(data[3]);
            });
        });
    </script>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>


</html>