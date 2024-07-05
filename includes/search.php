<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "cultivateDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve search query
$searchQuery = $_POST['search'];

// SQL query to retrieve data based on search query
$sql = "SELECT * FROM loanpackages WHERE PackageName LIKE '%$searchQuery%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        // You can retrieve other columns as needed
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>