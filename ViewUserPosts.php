<!DOCTYPE html>
<html>
<body>
<table border =\"5\" style='border-collapse: collapse'> 
<b>Posts: </b><br>
<p></p>
<tr>
<th>ID</th>
<th>Content</th>
</tr>
<?php
$conn = new mysqli("129.237.87.5", "c743h357", "pieJeo7g", "c743h357");
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Posts.PostID, Posts.Content FROM Posts INNER JOIN Users ON Posts.AuthorID = Users.UserID";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
   while($row = $result->fetch_assoc()) 
   {
      echo "<tr>";
      echo "<td>" . $row["PostID"]. "</td>";
      echo "<td>" . $row["Content"]. "</td>";
      echo "</tr>";
   }
   echo "</table>";
} 

$conn->close();
?>
</table>
</body>
</html>
