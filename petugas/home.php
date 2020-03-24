<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Persediaan Sparepart</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../font-awesome/css/all.css" rel="stylesheet"> <!--load all styles -->

 <style>
a{color:white}
.footer{width:100%;padding:300px}

 </style>
</head>

<body class="blue lighten-5" style="font-size:15px">
 
<div id="main_container">
 
 
<div id="navigation">
	<nav class="navbar bg-primary text-white" role="navigation"> 

	<div class="navbar-header"> 
		<a class="navbar-brand text-white" href="#">PETUGAS</a> 
   	</div>  
    <div> 
    	<ul class="nav navbar-nav text-white"> 
    		<li><a href="home.php">Home</a></li> 
            <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sparepart </a> 
            	<ul class="dropdown-menu"> 
            		<li><a href="home.php?page=add_sparepart">Tambah Sparepart</a></li> 
            		<li><a href="home.php?page=sparepart">Pengelolaan Sparepart</a></li> 
            		
					 
            	</ul> 
             <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi </a> 
            	<ul class="dropdown-menu"> 
            		<li><a href="home.php?page=transaksi_in">Transaksi Masuk</a></li> 
            		<li><a href="home.php?page=transaksi_out">Transaksi Keluar</a></li> 
            		
					 
            	</ul> 
                    <li><a href="home.php?page=analisis">Analisis ABC</a></li>
            <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan </a> 
            	<ul class="dropdown-menu"> 
            		<li><a href="home.php?page=laporan_in">Sparepart Masuk </a></li>
            		<li><a href="home.php?page=laporan_out">Sparepart Keluar</a></li> 
            		<li><a href="home.php?page=laporan_sparepart">Data Sparepart</a></li> 
            		
            		
					 
            	</ul> 
            </li> 
        </ul> 
    </div>

    <div class="navbar-right">
        <p class="navbar-text">
        
<?php  
 //login_success.php  
 ?>
</p>
		<a href="../logout.php"><button type="button" class="btn btn-default navbar-btn" onClick="return confirm('Anda yakin Ingin Logout..?')">Logout</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
   </div>
</nav>

</div>

<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'sparepart': include "sparepart.php"; break;
	case 'add_sparepart': include "add_sparepart.php"; break;
	case 'edit_sparepart': include "edit_sparepart.php"; break;
	case 'transaksi_in'	: include "transaksi_in.php"; break;
	case 'transaksi_out'	: include "transaksi_out.php"; break;
	case 'delete' : include "delete_peg.php"; break;
	case 'daftar' : include "daftar_spare.php"; break;
	case 'analisis' : include "analisis.php"; break;
	case 'laporan_in' : include "laporan_in.php"; break;
	case 'laporan_out' : include "laporan_out.php"; break;
	case 'laporan_sparepart' : include "laporan_spare.php"; break;
	case 'main' :
	default : include 'utama.php';	
}
?>
 <div id="footer" class="footer">
	<nav class="navbar bg-primary text-white" role="navigation"> 

	<div class="navbar-header"> 
		<a class="navbar-brand text-white" href="#"> </a> 
   	</div>   
</div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
