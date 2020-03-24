
 <link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"></script>
<?php
include "../connect.php";



if (isset($_GET['kd_user'])) {
    $query = $dbh->query("SELECT * FROM users WHERE kd_user= '$_GET[kd_user]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "Kode tidak tersedia!
<a href='add_user.php'>Kembali</a>";
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
            	<input type="text"   class="form-control" name="kd_user" id="kd_user" placeholder="Kode User" value="<?php echo $data['kd_user']; ?>"   readonly="readonly"/>
                
                
   					</div>
            </div>
       
		           
            
            <div class="form-group">
            	<label class="control-label- col-sm-2">Username</label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="username" required value="<?php echo $data['username']; ?>"/>
   					</div>
            </div>
            
              <div class="form-group">
            	<label class="control-label- col-sm-2">Password</label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="password" required value="<?php echo $data['password']; ?>"/>
   					</div>
            </div>
            
            
             <div class="form-group">
            	<label class="control-label- col-sm-2">Level</label>
            		<div class="col-sm-10">
            	<select name="level" id="level" class="form-control" >
      <option value="admin">Admin</option>
      <option value="gudang">Petugas Gudang</option>
       <option value="pimpinan">Pimpinan</option>
    </select>
   					</div>
            </div>
       		<br />
           
          
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
