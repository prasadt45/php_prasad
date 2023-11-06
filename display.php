
<?php 
  
  $servername = "localhost"; 
  $username = "root"; 
  $password = "prasad"; 
  $databasename = "test"; 
  
  // CREATE CONNECTION 
  $conn = new mysqli($servername, 
    $username, $password, $databasename); 
  
  // GET CONNECTION ERRORS 
  if ($conn->connect_error) { 
      die("Connection failed: " . $conn->connect_error); 
  } 
  
  // SQL QUERY 
  $query = "SELECT * FROM `user`;"; 
$firstName="";
$lastName="";
 $gender="";
 $email="";
 $password="";
  $number="";
  // FETCHING DATA FROM DATABASE 
  $result = $conn->query($query); 
  
    if ($result->num_rows > 0)  
    { 
        // OUTPUT DATA OF EACH ROW 
        while($row = $result->fetch_assoc()) 
        { 
            echo "Roll No: " . 
                $row["firstname"]. " - Name: " . 
                $row["lastname"]. " - lastName: " .              
                $row["email"]. " - mail: " . 
                $row["number"]. " number: " . 
                $row["password"]. " | City: " ;
                
        } 
    }  
    else { 
        echo "0 results"; 
    } 
  
   $conn->close(); 
  
?>