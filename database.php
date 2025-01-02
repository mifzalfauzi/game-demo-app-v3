<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12755121";
$password = "6xiGrttqRR";
$database = "sql12755121";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
