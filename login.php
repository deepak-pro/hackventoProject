<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
 <?php
   $username=$_POST['username'];
   $password=$_POST['password'];
 ?>
 <center>
 <br>
 <?php
   $server="localhost";
   $user="root";
   $pass="";
   $dbname="appointment";

   $conct= new mysqli($server,$user,$pass,$dbname);
    if($conct->connect_error){
     	die("failed to connect server".$conct->connect_error);
    }    
     $cmd="select password from doctor ; ";
     

     $result = $conct->query($cmd) ;

if ($result->num_rows > 0){ $check=false;
    while($row = $result->fetch_assoc()) {
      $pass=$row["password"] ;
      if($pass==$password){
        $check=true;
      
}
}
if($check==true)

echo "Successfully logged in";
else
echo "Invalid username and password";
}


$conct->close();

 ?>
</center>
</body>
</html>