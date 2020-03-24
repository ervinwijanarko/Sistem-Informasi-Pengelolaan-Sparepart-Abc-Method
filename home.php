<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Persediaan Sparepart Metode ABC</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
 <link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body class="blue lighten-5" style="font-size:15px">
<div id="main_container">
<div id="header">
<img src="../images/header.jpg">
</div>
<div id="navigation">
	<nav class="navbar navbar-default" role="navigation"> 

	<div class="navbar-header"> 
		<a class="navbar-brand" href="#">ADMIN</a> 
   	</div>  
    <div> 
    	<ul class="nav navbar-nav"> 
    		<li><a href="home.php">Home</a></li> 
          
					  <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">User Management</a> 
            	<ul class="dropdown-menu"> 
            		<li><a href="home.php?page=add_user">Tambah User</a></li> 
            		<li><a href="home.php?page=data_user">Data User</a></li> 
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
	case 'user_management': include "user_management.php"; break;
	case 'add_user': include "add_user.php"; break;
	case 'data_user': include "data_user.php"; break;
	case 'main' :
	default : include 'utama.php';	
}
?>

<div id="footer">&copy; Agustus 2018  / <a href="mailto:emailanda">Ervin Wijanarko</a>  </div>
</div>
</body>
</html>
