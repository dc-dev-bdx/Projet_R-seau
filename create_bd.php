<?php
$servername = "localhost";
$username = "dc_dev";
$password = "dc_dev";

/*$conn = new mysqli($servername,'root','');
$sql = "CREATE USER $username@$servername IDENTIFIED BY $password;";
if ($conn->query($sql) === TRUE) {
    echo "User created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$sql = mysql_query("GRANT ALL ON *.* TO $username@$servername");
if ($conn->query($sql) === TRUE) {
    echo "User privilege created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS expertise";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
