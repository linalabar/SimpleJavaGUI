<?php
// MySQL database credentials
$host = "localhost";
$username = "root";
$password = " ";
$dbname = "your_database_name";

// Create MySQL database connection
$conn = new mysqli('localhost','root','','nursery_DB');

// Check for errors in connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the parents table
$sql = "SELECT * FROM parents";
$result = $conn->query($sql);

// Create HTML table to display data
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Email</th><th>Password</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close MySQL database connection
$conn->close();
?>