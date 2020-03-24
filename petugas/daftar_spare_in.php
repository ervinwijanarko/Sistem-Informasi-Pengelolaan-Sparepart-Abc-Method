 <link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"></script>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function sendValue (s,s2){

window.opener.document.getElementById('kode_sparepat').value = s;
window.opener.document.getElementById('nama_sparepat').value = s2;
window.close();
}
//  End -->
</script>
    <div id="content"> 
    <center>
    <h2>Daftar Sparepart</h2></center>
<table class="table table-bordered table-hover">
    	  <thead style="font-size:14px">
        <tr>
       
			  <th width="20">No</th>       
          <th width="250">Kode Sparepart</th>
          <th width="200">Nama Sparepart</th>
          <th width="200">Satuan</th>
          <th width="400">Stok</th>
      </tr>
    </thead>
     
    <tbody style="font-size:13px">
    <?php
	include("../connect.php");
	$no=1;
    $sql = "SELECT*FROM sparepat ORDER BY kd_sparepat";
    foreach ($dbh->query($sql) as $data) :
    ?> 
        <tr>
            <td height="36"><?php echo $no++ ?></td>
            <td height="36"><?php echo $data['kd_sparepat'] ?></td>
          <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['satuan'] ?></td>
            <td><?php echo $data['stok'] ?></td>
                <?php 
	$ids=sha1($data['kd_sparepat']);
	?>  
            
            <td><a href="#" onClick="sendValue('<?php echo $data['kd_sparepat']; ?>','<?php echo $data['nama']; ?>');"><span class="btn btn-success"><i class="icon-edit"></i>Pilih</span></a></td>   
      </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
    </div>
 

