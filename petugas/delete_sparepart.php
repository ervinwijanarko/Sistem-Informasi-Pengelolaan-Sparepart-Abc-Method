<?php
include '../connect.php';
if (isset($_GET['kd_sparepat'])) {
    $dbh->exec("DELETE FROM sparepat WHERE kd_sparepat = '$_GET[kd_sparepat]'");
}
header("location:home.php?page=sparepart")
?>
