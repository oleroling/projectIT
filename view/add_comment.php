<!DOCTYPE html>
<?php include('checklogin.php');
include('../database/condb.php');
include('../components/menu.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>content</title>
</head>

<body>
    <form method="post" action="../model/comment.php">
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM comment co
                        LEFT JOIN users
                        ON co.user_id = users.user_id 
                        WHERE co.id=$id";
    $result = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($result)) {
        ?>
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <input type="hidden" name="user_id" value="<?php echo $data['user_id'];?>">
        <input type="text" value="<?php echo $data['com_text'];?>">
        <input type="text" value="<?php echo $data['com_date'];?>">
        <input type="text" name="anw_com">
        <?php
    }
    ?>
    <input type="submit" name="update">
    </form>
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <br><br><br>
    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>
</body>

</html>