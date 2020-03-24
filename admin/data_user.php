 <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">

    <div id="content"> 
    <center><h2><u>Data User</u></h2></center>
<table class="table table-bordered table-hover">
    	  <thead style="font-size:14px">
        <tr>
       
			  <th width="20">No</th>       
          <th width="250">Kode User</th>
          <th width="200">Username</th>
          <th width="200">Password</th>
          <th width="400">Level</th>
          <td colspan="2"><center>Action</center></td>
      </tr>
    </thead>
     
    <tbody style="font-size:13px">
    <?php
	include '../connect.php';
	$no=1;
    $sql = "SELECT*FROM users ORDER BY kd_user  ";
    foreach ($dbh->query($sql) as $data) :
    ?> 
        <tr>
            <td height="36"><?php echo $no++ ?></td>
            <td height="36"><?php echo $data['kd_user'] ?></td>
          <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
            <td><?php echo $data['level'] ?></td>
            
            <td align="center" width="179">
               <a href="edit_user.php?kd_user=<?php echo $data['kd_user'] ?> ">
                Update 
                </a>
                    ||
                <a href="delete_user.php?kd_user=<?php echo $data['kd_user'] ?>" onClick="return confirm('Anda yakin akan menghapus data?')">
             Hapus</a>            </td>
      </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
    </div>
 

