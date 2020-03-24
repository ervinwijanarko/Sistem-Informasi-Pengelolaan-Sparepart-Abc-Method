 <link href="../jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="../jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="../jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="../jquery-ui-1.11.4/jquery-ui.theme.css">
 
   
  <script>
  $(document).ready(function(){
    $("#tanggal1").datepicker({
	dateFormat:'yy-mm-dd',
    })
   })
  </script>
    <script>
   $(document).ready(function(){
    $("#tanggal2").datepicker({
	dateFormat:'yy-mm-dd',
    })
   })
   
   
 </script>
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
<form name="form1" method="post" action="" >

  Range tanggal
<input type="text" name="tanggal1" id="tanggal1" placeholder="Pilih tanggal.." class="span2 input-small"  required/>
Hingga 
  <input type="text" name="tanggal2" id="tanggal2" placeholder="Pilih tanggal.." class="span2 input-small" required />
<input type="submit" name="click" value="Cari" class="btn btn-large btn-primary" ></form>
   
<button onClick="printInfo(this)" class="btn btn-success">Print Preview</button>
<button onClick="window.print();" class="btn btn-primary">Cetak</button>   
    
 <div id="content"> 

   
    <h2>Analisis ABC</h2> 
<table class="table table-bordered table-hover" border="1">
    	  <thead style="font-size:14px">
        <tr>
       
			  <th width="20">No</th>       
          <th width="200">Kode Sparepart</th>
          <th width="200">Nama Sparepart</th>
          <th width="400">Harga Per-Unit</th>
          <th width="400">Jumlah Keluar</th>
          <th width="400">Akumulatif</th>
          <th width="400">Persentase</th>
          <th width="400">Klasisfikasi</th>
          
      </tr>
    </thead>
    
    
     
    <tbody style="font-size:13px">
    <?php
	
	if (isset($_POST['click'])) 
	{
	include './connect.php';
	$total=0;
	$tanggal1=$_POST['tanggal1'];
	$tanggal2=$_POST['tanggal2'];
	$no=1;

	 echo '<h4>Periode : '.$tanggal1.' s/d '.$tanggal2.' </h4>';
	   $buatview = "
create or replace VIEW grandtotaltoy as SELECT transaksi_out.kd_sparepat, transaksi_out.nama_sparepat, sparepat.harga, sum( qty ) AS jumlah_keluar, sum(harga*qty) as peritem 
FROM `transaksi_out` 
INNER JOIN `sparepat` ON transaksi_out.kd_sparepat = sparepat.kd_sparepat
WHERE tanggal BETWEEN '$tanggal1' AND '$tanggal2'
GROUP BY nama_sparepat 
WITH ROLLUP
";
    $dbh->exec($buatview);
	

$qgrandtotal= "SELECT MAX(peritem) AS nilaigrand FROM `grandtotaltoy`" ;
	foreach ($dbh->query($qgrandtotal) as $grand) :
    $grandt=$grand['nilaigrand'];
	endforeach;
	$sql= "SELECT transaksi_out.kd_sparepat, transaksi_out.nama_sparepat, sparepat.harga, sum( qty ) AS jumlah_keluar, sum(harga*qty) as peritem 
FROM `transaksi_out` 
INNER JOIN `sparepat` ON transaksi_out.kd_sparepat = sparepat.kd_sparepat
WHERE tanggal BETWEEN '$tanggal1' AND '$tanggal2'
GROUP BY nama_sparepat
ORDER BY peritem DESC " ;
	
		 foreach ($dbh->query($sql) as $data) :
			
    ?> 
   
    <?php @$total_keluar += $data['jumlah_keluar'];?>
    <?php @$grandtotal += $data['harga']*$data['jumlah_keluar'];?>
  

    
        <tr>
            <td height="36"><?php echo $no++ ?></td>
            <td height="36"><?php echo $data['kd_sparepat'];?></td>
          <td><?php echo $data['nama_sparepat']; ?></td>
              <td>Rp. <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $data['jumlah_keluar']; ?></td>
             <td>Rp. <?php echo number_format($data['peritem'], 0, ',', '.'); ?></td>
             
             
             <td><?php echo $hehe=round($data['peritem']/$grandt*100,0); ?> %</td>
             <td><?php 
			 
			 		if($hehe >= 50) 
					{
						echo "A";
					}
					elseif($hehe <= 20 )
					{
						echo "C";
					}
					else
					{ 
					  	echo "B"; 
					}
			 
			 
			 
			 
			 ;?></td>
             
             
            
           
          
           </tr>
    <?php
    endforeach;
    
	?>
	    <tr>
		<td colspan="4">TOTAL</td>
		<td><?php echo $total_keluar ?> Unit</td>
		<td>Rp. <?php echo number_format($grandtotal, 0, ',', '.');?></td>
		
	 </tr><?php ;
	 }
	  ?>
    </tbody>
</table>
    </div>
 

