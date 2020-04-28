<?php
// Make a MySQL Connection
$connect = mysqli_connect("localhost", "root", "99090111") or die(mysql_error());
$db = mysqli_select_db($connect,"lab5") or die(mysql_error());

// Get all the data from the "example" table
$result = mysqli_query($connect,"SELECT * FROM users ORDER BY age ASC") 
or die(mysqli_error());  

echo "<table border='1'>";
echo "<tr> <th>Name</th> <th>Age</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['u_name'];
	echo "</td><td>"; 
	echo $row['age'];
	echo "</td></tr>"; 
} 

echo "</table>";
?>