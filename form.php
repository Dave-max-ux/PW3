<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Form"; 
 $cID = $_POST['stdName']; 
$Code = $_POST['stdCode'];
 $Title = $_POST['stdTitle'];
 $matric = $_POST['stdMatric']; 
$Dob = $_POST['Dob'];
 $dept = $_POST['Dept'];
 $Faculty = $_POST['Faculty']; 
 $conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error)
 { 
    die("Connection failed:".$conn->connect_error); 
} 
 $sql = "INSERT INTO Form
 (Course_ID,Course_Code,Course_title,Matric_no,Date_of_Birth,Department,Faculty)
 VALUES('$cID','$Code','$Title','$matric','$Dob','$dept','$Faculty')";
 if($conn->query($sql)=== TRUE) 
{ 
    echo "<h2>"."<marquee>"."<font color='purple'>"." Result Registeration Succesfull"."</font>"."</marquee>"."</h2>";
 } 
else
{
    echo 'Error:'.$sql.'<br>'.$conn->error;
  }
 $conn->close();
  ?> 
 
 