<!DOCTYPE html>
<html>
<head>
	<title>registerDetails</title>
</head>
<body>
  <?php 
    $name=    $_POST['name'];
    $age=     $_POST['age'];
    $gender=  $_POST['gender'];
    $contact= $_POST['contact'];
    $doctor=  $_POST['doctor'];
    $date= date("d/m/y");
    $servername="localhost";
    $user="root";
    $pass="";
    $dbname="appointment";

    $conct = new mysqli($servername,$user,$pass,$dbname);
      if($conct->connect_error){
      	die("error in connect".$conct->$connect_error);
      }else" succesfully connect<br/>";
       $cmd= "insert into patient (name,age,gender,contact,doctor) values('".$name."','".$age."','".$gender."',".$contact.",'".$doctor."');";
     if($conct->query($cmd)=== TRUE){
     	
       echo "<br/>data is successfully inserted!!!";
     }else echo "error<br/>".$cmd . "<br/>" .$conct->error;

  ?>
</body>
</html>