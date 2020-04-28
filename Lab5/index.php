<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Lab 5</title>
  </head>
  <body>
  <center>
  <h2>  Task 1 </h2>
    <?php 
$username = "root"; 
$password = "99090111"; 
$database = "lab5"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM users";
 
 ?>
<table class="table"> 
       <thead>
      <tr> 
          <th scope="col"> <font face="Arial">#</font> </th> 
          <th scope="col"> <font face="Arial">Name</font> </th> 
          <th scope="col"> <font face="Arial">Surname</font> </th> 
          <th scope="col"> <font face="Arial">E-mail</font> </th> 
          <th scope="col"> <font face="Arial">username</font> </th> 
		  <th scope="col"> <font face="Arial">password</font> </th>
      </tr>
	  </thead>
 <?php
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["u_id"];
        $field2name = $row["u_name"];
        $field3name = $row["u_surname"];
        $field4name = $row["u_email"];
        $field5name = $row["u_username"];
        $field6name = $row["u_password"]; 		
 ?>
				<tbody>
				<tr> 
                  <td><?php echo $field1name; ?></td> 
                  <td><?php echo $field2name; ?></td> 
                  <td><?php echo $field3name; ?></td> 
                  <td><?php echo $field4name; ?></td> 
                  <td><?php echo $field5name; ?></td> 
				  <td><?php echo $field6name; ?></td> 
              </tr>
			  </tbody>
			  <?php
    }
    $result->free();
} 
?>
</center>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>