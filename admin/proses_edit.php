
<?php
include "../connect.php";
if (isset($_POST['simpan'])) {

    $sql = "UPDATE `users` SET  username = '$_POST[username]',
									password = '$_POST[password]',
									level = '$_POST[level]' 
									WHERE kd_user = '$_POST[kd_user]'";
								 
							
    $dbh->exec($sql);
}
header("location:home.php?page=data_user");
?>



