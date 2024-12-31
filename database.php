<?php
$servername = "sql212.infinityfree.com";
$username = "if0_38016044";
$password = "Mifzal3291";
$database = "if0_38016044_gamedemoapp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
