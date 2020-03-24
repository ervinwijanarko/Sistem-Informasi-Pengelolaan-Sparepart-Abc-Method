 <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">

    <div id="content"> 
    <center><h2>Pengelolaan Sparepart</h2></center>
<table class="table table-bordered table-hover">
    	  <thead style="font-size:14px">
        <tr>
       
			  <th width="20">No</th>       
          <th width="250">Kode Sparepart</th>
          <th width="200">Nama Sparepart</th>
          <th width="200">Satuan</th>
           <th width="200">Harga Per-Unit </th>
          <th width="400">Stok</th>
          <td colspan="2"><center>Action</center></td>
      </tr>
    </thead>
     
    <tbody style="font-size:13px">
    <?php
	include './connect.php';
	$no=1;
    $sql = "SELECT*FROM sparepat ORDER BY kd_sparepat  ";
    foreach ($dbh->query($sql) as $data) : 
	$warning="warning"; ?>
	
   
        <tr class="<?php if($data['stok']<10) { echo $warning; }?>">
            <td height="36"><?php echo $no++ ?></td>
            <td height="36"><?php echo $data['kd_sparepat'] ?></td>
          <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['satuan'] ?></td>
            <td>Rp. <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $data['stok'] ?></td>
            
            <td align="center" width="179">
               <a href="edit_sparepart.php?kd_sparepat=<?php echo $data['kd_sparepat'] ?> ">
                <button class="btn btn-primary">Update</button> 
                </a>
                   
                <a href="delete_sparepart.php?kd_sparepat=<?php echo $data['kd_sparepat'] ?>" onClick="return confirm('Anda yakin akan menghapus data?')">
            <button class="btn btn-danger"> Hapus</button></a>            </td>
      </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
    </div>
 

