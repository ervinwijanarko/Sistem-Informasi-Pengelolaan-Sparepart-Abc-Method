<?php
include '../connect.php';
if (isset($_GET['kd_user'])) {
    $dbh->exec("DELETE FROM users WHERE kd_user = '$_GET[kd_user]'");
}
header("location:home.php?page=data_user")
?>
