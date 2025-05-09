<?php
 $servername = "localhost"; 
 $username = "root"; 
 $password = ""; 
 $dbname = "Form"; 
 //Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) 
{     
    die("Connection failed: " . $conn->connect_error);
 }  
 $sql = "SELECT * FROM submit";
 $result = $conn->query($sql); 
 if ($result->num_rows > 0) 
{    
     echo "<table 
     border='2'><tr><th>Course_ID</th><th>Course_code</th><th>Course_title</th>
     <th>Matric_no </th><th>Date_of_Birth</th><th>Department</th><th>Faculty</th></tr>";   
       // output data of each row     
       while($row = $result->fetch_assoc()) 
       {        
         echo "<tr><td>".$row["Course_ID"]."</td><td>".$row["Course_code"]."</td><td>".$row["Course_title"].
         "</td><td>".$row["Matric_no"]."</td><td>".$row["Date_of_Birth"]."</td><td>".$row["Department"]." 
         </td><td>".$row["Faculty"]."</td></tr>";   
           }    
            echo "</table>";  echo "<form action='form.html' method='POST'>"."<input type='Submit'  value = 'Back'>"."</input>"."</form>"; 
            }
             else 
             {
               echo "0 results"; 
             } $conn->close(); ?> 
 
 
 

 
 