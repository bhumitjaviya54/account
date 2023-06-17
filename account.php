<?php
// Database connection parameters

// use LDAP\Result;

$servername = "localhost";
$A_no = "root";
$A_holder = "";
$dbname = "account";

// Create connection
$conn = new mysqli($servername, $A_no, $A_holder, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select records from LIBRARY_MASTER table
$sql = "SELECT `A_no`, `A_holder`, `A_balance` FROM `account`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th>A_no</th><th>A_holder</th><th>A_balance</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["A_no"] . "</td><td>" . $row['A_holder'] . "</td><td>" . $row["A_balance"] . "</td></tr>";
    }
    echo "<table>";
} 
else {
    echo "0 Result";
}
// Close connection
$conn->close(); 
?>