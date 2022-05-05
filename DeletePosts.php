<!DOCTYPE html>
<html>
<body>
<table border =\"5\" style='border-collapse: collapse'> 
<p></p>
<tr>
<th>PostID</th>
<th>Content</th>
<th>AuthorID</th>
</tr>

<?php
$conn = new mysqli("129.237.87.5", "c743h357", "pieJeo7g", "c743h357");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$post = $_POST['post'];
$sql2 = "DELETE FROM Posts WHERE Content= '$post'";

if (mysqli_query($conn, $sql2)) {
  echo "Post is deleted successfully.\r";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

$sql = "SELECT * FROM Posts";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
   while($row = $result->fetch_assoc()) 
   {
      echo "<tr>";
      echo "<td>" . $row["PostID"]. "</td>";
      echo "<td>" . $row["Content"]. "</td>";
      echo "<td>" . $row["AuthorID"]. "</td>";
      echo "</tr>";
   }
   echo "</table>";
} 

mysqli_close($conn);
?>
