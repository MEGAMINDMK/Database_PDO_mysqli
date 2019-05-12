 <?php
 
 $servername = "localhost";
$name = "root";
$password = "root";
$db = "localhost";

$conn = new mysqli($servername, $name, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>