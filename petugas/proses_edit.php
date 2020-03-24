
<?php
include "../connect.php";
if (isset($_POST['simpan'])) {

    $sql = "UPDATE `sparepat` SET  nama = '$_POST[nama_sparepat]',
									satuan = '$_POST[satuan]',
									harga = '$_POST[harga]' 
									WHERE kd_sparepat = '$_POST[kd_sparepat]'";
								 
							
    $dbh->exec($sql);
}
header("location:home.php?page=sparepart");
?>



