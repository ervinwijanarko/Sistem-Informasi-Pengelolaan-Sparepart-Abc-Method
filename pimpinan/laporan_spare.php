 <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">
  <script>
function printInfo(ele){
   var singmehdiprint=document.getElementById("content");
   var WinPrint=window.open('','','left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
   WinPrint.document.write(singmehdiprint.innerHTML);
   WinPrint.document.close();
   winPrint.focus();
   winPrint.print();
   winPrint.close();
   }
</script>
<button onClick="printInfo(this)" class="btn btn-success">Print Preview</button>
<button onClick="window.print();" class="btn btn-primary">Cetak</button>  
   <div id="content"> 
    
    <center><h2>Data Sparepart</h2>
    Per-Tanggal :
    <?php 
	$date=date('d-M-Y');
	echo $date;?></center>
<table class="table table-bordered table-hover" border="1">
    	  <thead style="font-size:14px">
        <tr>
       
			  <th width="20">No</th>       
          <th width="250">Kode Sparepart</th>
          <th width="200">Nama Sparepart</th>
          <th width="200">Satuan</th>
           <th width="200">Harga Per-Unit (Rp.)</th>
          <th width="400">Stok</th>
         
      </tr>
    </thead>
     
    <tbody style="font-size:13px">
    <?php
	include '../connect.php';
	$no=1;
    $sql = "SELECT*FROM sparepat ORDER BY kd_sparepat  ";
    foreach ($dbh->query($sql) as $data) :
    ?> 
        <tr>
            <td height="36"><?php echo $no++ ?></td>
            <td height="36"><?php echo $data['kd_sparepat'] ?></td>
          <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['satuan'] ?></td>
             <td>Rp. <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $data['stok'] ?></td>
            
          
      </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
    </div>
 

