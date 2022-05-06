<!DOCTYPE html>
<html>
<body>
<table border =\"5\" style='border-collapse: collapse'> 
<b>Users: </b><br>
<p></p>
<tr>
<th>UserID</th>
</tr>
<?php
$conn = new mysqli("129.237.87.5", "c743h357", "pieJeo7g", "c743h357");
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT UserID FROM Users";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
   while($row = $result->fetch_assoc()) 
   {
      echo "<tr><td>" . $row["UserID"]. "</td></tr>";
   }
   echo "</table>";
} 
$conn->close();
?>
</table>
</body>
</html>
