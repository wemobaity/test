<?php

$name = $_POST['name'];
$email = $_POST['email'];

$servername = "rm-l4v670ce623mi4fxv.mysql.me-central-1.rds.aliyuncs.com";
$username = "amb";
$password = "No123456";
$dbname = "testing";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO people (name,email) VALUES ('$name', '$email')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>