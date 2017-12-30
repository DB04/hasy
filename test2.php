<?php
$servername = "localhost";
$username = "hasystem";
$password = "tyjFRor05mk1fGvZ";
$dbname = "hasystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM donhang WHERE status = 1 ORDER BY id DESC LIMIT 10,5";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $data[] = $row;
        echo $row['id'];
    }
} else {
    echo "0 results";
}

var_dump($data);