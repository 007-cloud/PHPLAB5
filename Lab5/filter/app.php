<?php
// DB connection
$db = "lab5";
$username = "root";
$password = "99090111";

// check to see if the connection is ok via mysqli
$connection = new mysqli('localhost', $username, $password, $db);
if($connection->connect_error){
  die ('Connect Error   ' . $connection->connect_error);

}
//echo 'Success....' . $connection->host_info . "\n";

//echo '<div id="info1"> Hello </div>';

if(isset($_POST["action"]) ){
	$sex = $_POST["filter"];
  if($_POST['filter'] == 'All'){
    $sql = "SELECT * FROM students";
    }else{
    $sql = "SELECT * FROM students WHERE gender = '$sex'";
    }



  $result = $connection->query($sql);

  if($result->num_rows > 0 ) {

    echo "<div id='info1'>";
    echo "<h1>Result:</h1>";
    echo " <table><tr><th> Name</th><th >Gender</th></tr>";

    while($row = $result->fetch_assoc()) {
              //var_dump($row);
             echo "<tr ><td >".$row["name"]."</td><td>".$row["gender"]."</td></tr>";

    }

    echo "</table>";
    echo "</div>";
}
}
else{
  $sql = "SELECT * FROM students";

  //Performs a query on the database
  $result = $connection->query($sql);

  if($result->num_rows > 0 ) {

    echo "<div id='info1'>";
    echo "<h1>Result:</h1>";
    echo " <table style='border:1px #aaa solid;'><tr><th>Name</th><th>Gender</th></tr>";
    // fetch a result as an associative array
    while($row = $result->fetch_assoc()) {
              //var_dump($row);
             echo "<tr ><td >".$row["name"]."</td><td>".$row["gender"]."</td></tr>";

    }

    echo "</table>";
    echo "</div>";

}
  }


$connection->close();



 ?>
