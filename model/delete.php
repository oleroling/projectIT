<?php
include('../database/condb.php');

if (isset($_GET['action']) && $_GET['action'] == "delete") {
    $project_id = $_GET['project_id'];
    $sql = "DELETE FROM project WHERE project_id=$project_id";
    $result = mysqli_query($conn, $sql);
    header("location: ../view/manage.php");
  }