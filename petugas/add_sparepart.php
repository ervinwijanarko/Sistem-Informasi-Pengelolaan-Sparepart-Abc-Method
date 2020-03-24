 <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">

<div id="content"> 
<?php
include './connect.php';
?>
<div class="container">
    	<center><h2>Tambah Sparepart</h2></center>
       
    	<form action="" method="post" class="form-horizontal">
            <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="nama_sparepat" placeholder="Nama Sparepart" required />
   					</div>
            </div>
              <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="satuan" placeholder="Satuan" required />
   					</div>
            </div>
                       <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="harga" placeholder="Harga Per-Unit (Rp.)" required />
   					</div>
            </div>
            
            
       	 <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	  <input type="submit" value="Simpan" name="click"  class="btn btn-success"/>
                  <input type="reset" value="Reset"  class="btn btn-danger" onClick="return confirm('hapus data yang telah diinput?')">
                  </div>
             </div>
          
    </form>
</div>
</div>

</body>


<?php



if (isset($_POST['click'])) {
	
$nama=$_POST['nama_sparepat'];
$satuan=$_POST['satuan'];
$harga=$_POST['harga'];
    
    $sql = "INSERT INTO sparepat VALUE(NULL,'$nama','$satuan','$harga','0')";
    $dbh->exec($sql);
	
	if($sql)
		{
			echo "<center><h3><font color='green'>Sparepart Berhasil Ditambahkan</blink></center>";
		}
}

?>
</html>
