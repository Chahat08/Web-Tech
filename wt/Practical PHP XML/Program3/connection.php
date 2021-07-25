<?php      
    $host = "localhost:81";  
    $db_name = "logininfo";  
      
    $con = mysqli_connect($host, $db_name);  

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
?>