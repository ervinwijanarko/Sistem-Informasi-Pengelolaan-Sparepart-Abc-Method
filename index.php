 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Masuk Sebagai Pengguna</title>  
           <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
         
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
				
				
				include 'connect.php';
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">Masuk Sebagai Pengguna : </h3><br />  
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="user" class="form-control" placeholder="Username" required/>  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="pass" class="form-control" placeholder="Password"required/> 
                    
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br />  
           
           
           
           
            <?php
if (isset($_POST['login'])){
      $user=$_POST['user'];
      $pass=$_POST['pass'];

      $query=$dbh->prepare("select * from users where username=:user and password=:pass");
      $query->BindParam(":user",$user);
      $query->BindParam(":pass",$pass);
      $query->execute();
      if ($query->rowCount()>0){
            session_start();
            $data=$query->fetch();
            if($data['level']=="admin"){
                  $_SESSION['username']=$data['username'];
                  $_SESSION['level']=$data['level'];
                  header('location:admin/home.php');
            }
			elseif($data['level']=="gudang")
			{
                  $_SESSION['username']=$data['username'];
                  $_SESSION['level']=$data['level'];
                  header('location:petugas/home.php');
            }
			else
			{
                  $_SESSION['username']=$data['username'];
                  $_SESSION['level']=$data['level'];
                  header('location:pimpinan/home.php');
            }
      }
      else{
            echo "username dan password tidak valid";
      }
}
?>
      </body>  
 </html>  