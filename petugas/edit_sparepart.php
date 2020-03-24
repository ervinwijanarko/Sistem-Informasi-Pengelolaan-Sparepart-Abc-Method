
 <link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"></script>
<?php
include "../connect.php";



if (isset($_GET['kd_sparepat'])) {
    $query = $dbh->query("SELECT * FROM sparepat WHERE kd_sparepat= '$_GET[kd_sparepat]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "Kode tidak tersedia!
<a href='add_sparepart.php'>Kembali</a>";
    exit();
}
?>

<div id="content">
	<h2><center>Edit Sparepart</h2>
    
    	<form action="proses_edit.php" method="post" class="form-horizontal" >
    		<div class="container">
            
            <div class="form-group">
            	<label class="control-label- col-sm-2">Kode Sparepart</label> 	
            		<div class="col-sm-10">
            	<input type="text"   class="form-control" name="kd_sparepat" id="kd_sparepat" placeholder="Kode Sparepart" value="<?php echo $data['kd_sparepat']; ?>"   readonly="readonly"/>
                
                
   					</div>
            </div>
       
		           
            
            <div class="form-group">
            	<label class="control-label- col-sm-2">Nama Sparepart</label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="nama_sparepat" required value="<?php echo $data['nama']; ?>"/>
   					</div>
            </div>
       		
           
          	<div class="form-group">
            	<label class="control-label- col-sm-2">Satuan</label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="satuan"  value="<?php echo $data['satuan']; ?>"/>
   					</div>
            </div>
            <div class="form-group">
            	<label class="control-label- col-sm-2">Harga Per-Unit</label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="harga"  value="<?php echo $data['harga']; ?>"/>
   					</div>
            </div>
       	 <div class="form-group">
            	<label class="control-label- col-sm-2"></label>
            		<div class="col-sm-10">
            	  <input type="submit" value="Simpan" name="simpan"  class="btn btn-success"/>
                  <input type="reset" value="Reset"  class="btn btn-danger" onClick="return confirm('hapus data yang telah diinput?')">
                  </div>
             </div>
          
    </form>
    
    
    
    
    
    
    
    
  <?php 
  ?>
</div>