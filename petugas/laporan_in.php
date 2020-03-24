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
 
  Cari tanggal
<input type="text" name="tanggal1" id="tanggal1" placeholder="Pilih tanggal.." class="span2 input-small"  required/>
Hingga 
  <input type="text" name="tanggal2" id="tanggal2" placeholder="Pilih tanggal.." class="span2 input-small" required />
<input type="submit" name="click" value="Cari" class="btn btn-large btn-primary" ></form>
<button onClick="printInfo(this)" class="btn btn-success">Print Preview</button>
<button onClick="window.print();" class="btn btn-primary">Cetak</button>

<div id="content"> 

 

<table class="table table-bordered table-hover" border="1">
    	  <thead style="font-size:14px">
        <tr>
       
			  <th width="20">No</th>       
          <th width="250">Tanggal Transaksi</th>
          <th width="200">Kode Sparepart</th>
          <th width="200">Nama Sparepart</th>
          <th width="400">Qty</th>
      </tr>
    </thead>
 
   
    <tbody style="font-size:13px">
    <h2>Sparepart Masuk</h2>
    <?php
	
	if (isset($_POST['click'])) 
	{
	include './connect.php';
	
	$tanggal1=$_POST['tanggal1'];
	$tanggal2=$_POST['tanggal2'];
	$no=1;
    

	
	 ?> <h4>Periode : <?php echo $tanggal1;?> s/d <?php echo $tanggal2;?> </h4><?php 
	
	$sql= "SELECT * FROM transaksi_in WHERE tanggal BETWEEN '$tanggal1' AND '$tanggal2' ORDER BY tanggal";
	
    	
		 foreach ($dbh->query($sql) as $data) :
			
    ?> 
        <tr>
            <td height="36"><?php echo $no++ ?></td>
            <td height="36"><?php echo $data['tanggal'];?></td>
          <td><?php echo $data['kd_sparepat']; ?></td>
            <td><?php echo $data['nama_sparepat']; ?></td>
            <td><?php echo $data['qty'] ;?></td>
            
            
           </tr>
    <?php
    endforeach;
    }
	?>
    </tbody>
</table>
    </div>
 

