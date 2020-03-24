 <link href="../jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="../jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="../jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="../jquery-ui-1.11.4/jquery-ui.theme.css">
  <script>
   $(document).ready(function(){
    $("#tanggal").datepicker({
	dateFormat:'yy-mm-dd',
    })
   })
  </script>

<div id="content"> 

<div class="container">
    	<center><h2>Transaksi Masuk Sparepart</h2></center>
       
    	<form action="" method="post" class="form-horizontal">
            <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control"  name="tanggal"   id="tanggal" placeholder="Tanggal" required />
                
   					</div>
            </div>
              <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
                <input type="text"  class="form-control" name="kd_sparepat" placeholder="Kode Sparepat" required  id="kode_sparepat" onClick="window.open('daftar_spare_in.php','popuppage','width=500,toolbar=0,resizable=0,scrollbars=yes,height=400,top=100,left=100');">
     
   					</div>
            </div>
            
            <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="nama_sparepat" placeholder="Nama Sparepart" id="nama_sparepat"  readonly="readonly"required />
   					</div>
            </div>
            <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="number" class="form-control" name="qty" placeholder="Jumlah"  required  />
   					</div>
            </div>
            
            
       	 <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	  <input type="submit" value="Simpan"   name="click" class="btn btn-success"/>
                  <input type="reset" value="Reset"  class="btn btn-danger" onClick="return confirm('hapus data yang telah diinput?')">
                  </div>
             </div>
          
    </form>

</div>
</div>

</body>

<?php



if (isset($_POST['click'])) {
include './connect.php';
$tanggal=$_POST['tanggal'];
$kd_sparepat=$_POST['kd_sparepat'];
$nama_sparepat=$_POST['nama_sparepat'];
$qty=$_POST['qty'];

    
   $sql = "INSERT INTO transaksi_in VALUE(NULL,'$tanggal','$kd_sparepat','$nama_sparepat','$qty')";
    $dbh->exec($sql);


    
	$stok="Update sparepat SET stok=stok+$qty  Where kd_sparepat=$kd_sparepat";
	$dbh->exec($stok);
	
	if($sql)
		{
			echo "<center><h3><font color='green'>Data Berhasil disimpan</blink></center>";
		}
}

?>


</html>

