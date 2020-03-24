<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Persediaan Sparepart</title>



 <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">


<div id="content"> 
<?php
include '../connect.php';
?>
<div class="container">
    	<center><h2>Tambah Sparepart</h2></center>
       
    	<form action="" method="post" class="form-horizontal">
            <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="text"  class="form-control" name="username" placeholder="Username" required />
   					</div>
            </div>
              <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
            	<input type="password"  class="form-control" name="password" placeholder="Password" required />
   					</div>
            </div>
            <div class="form-group">
            	<label class="control-label- col-sm-1"></label>
            		<div class="col-sm-10">
                    <label class="control-label- col-sm-1">Level</label>
             <select name="level" id="level" class="form-control" >
      <option value="admin">Admin</option>
      <option value="gudang">Petugas Gudang</option>
       <option value="pimpinan">Pimpinan</option>
    </select>
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
	
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
   
    $sql = "INSERT INTO users VALUE(NULL,'$username','$password','$level')";
    $dbh->exec($sql);
	
	if($sql)
		{
			echo "<center><h3><font color='green'>User Berhasil di Tambahkan</blink></center>";
		}
}

?>
</html>
