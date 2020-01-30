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
    <div class="container">
        <p align ="center">
           <h2>คณะผู้จัดทำ</h2> 
        </p>
        
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/r10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ชื่อผู้จัดทำ</h5>
                        <p class="card-text">รายละเอียดผู้จัดทำ</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/r10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ชื่อผู้จัดทำ</h5>
                        <p class="card-text">รายละเอียดผู้จัดทำ</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/r10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ชื่อผู้จัดทำ</h5>
                        <p class="card-text">รายละเอียดผู้จัดทำ</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
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