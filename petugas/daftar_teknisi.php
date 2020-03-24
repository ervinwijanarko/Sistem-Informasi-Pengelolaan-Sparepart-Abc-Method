 <link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"></script>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function sendValue (s,s2,s3){

window.opener.document.getElementById('kode_sparepat').value = s;
window.opener.document.getElementById('nama_sparepat').value = s2;
window.opener.document.getElementById('stok').value = s3;
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
    $sql = "SELECT*FROM teknisi  ORDER BY kd_teknisi";
    foreach ($dbh->query($sql) as $data) :
    ?> 
        <tr>
            <td height="36"><?php echo $no++ ?></td>
            <td height="36"><?php echo $data['kd_teknisi'] ?></td>
          <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['no_badge'] ?></td>
          
                <?php 
	$ids=sha1($data['kd_teknisi']);
	?>  
            
            <td><a href="#" onClick="sendValue('<?php echo $data['kd_teknisi']; ?>','<?php echo $data['nama']; ?>','<?php echo $data['stok']; ?>');"><span class="btn btn-success"><i class="icon-edit"></i>Pilih</span></a></td>   
      </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
    </div>
 

