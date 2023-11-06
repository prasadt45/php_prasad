
<?php 
  
  $servername = "localhost"; 
  $username = "root"; 
  $password = "prasad"; 
  $databasename = "test"; 
  
  // creating connection
  $conn = new mysqli($servername, 
    $username, $password, $databasename); 
  
  
  // SQL  
  $query = "SELECT * FROM `user`;"; 
$firstName="";
$lastName="";
 $gender="";
 $email="";
 $password="";
  $number="";
  // FETCHING DATA 
  $result = $conn->query($query); 
  
    if ($result->num_rows > 0)  
    { 
        // OUTPUT DATA OF EACH ROW 
        while($row = $result->fetch_assoc()) 
        { 
            echo "Roll No :- " . 
                $row["firstname"]. " - Name:- " . 
                $row["lastname"]. " - LastName:- " .              
                $row["email"]. " - EmailId:- : " . 
                $row["number"]. " PhoneNo.:- " . 
                $row["password"]. " | City: " ;
                
        } 
    }  
    else { 
        echo "No Record Found "; 
    } 
  
   $conn->close(); 
  
?>