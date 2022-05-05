<?php
$conn = new mysqli("129.237.87.5", "c743h357", "pieJeo7g", "c743h357");
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['name'];
$sql = "INSERT INTO Users (UserID) VALUES ('$user')";
if ($conn->query($sql) == TRUE) 
{
  echo "New user is created successfully!";
}
else 
{
  echo "The user already exists!";
}
$conn->close();
?>
