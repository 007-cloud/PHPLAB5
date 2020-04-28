
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
  <h2>  Task 4 </h2><br>
  <table class="table"> 
       <thead>
      <tr> 
          <th scope="col"> <font face="Arial">Name</font> </th> 
          <th scope="col"> <font face="Arial">Surname</font> </th> 
          <th scope="col"> <font face="Arial">Message</font> </th> 
          <th scope="col"> <font face="Arial">Date</font> </th> 
      </tr>
	  </thead>
<?php
	include 'db.php';
	$query = $connection->prepare(" SELECT u.u_id, u.u_name, u.u_surname, m.m_userid, m.m_message, m.m_date
                     FROM users u 
                     LEFT OUTER JOIN messages m ON m.m_userid = u.u_id
                     ORDER BY m.m_date DESC") or die($mysqli->error);
    $query->execute();
    $messages = $query->fetchAll();
?>
<?php 
		 foreach ($messages as $message) {
			 ?>
			 
			<tbody>
				<tr> 
                  <td><?php echo $message['u_name']; ?></td> 
                  <td><?php echo $message['u_surname']; ?></td> 
                  <td><?php echo $message['m_message']; ?></td> 
                  <td><?php echo $message['m_date']; ?></td> 
                  
              </tr>
			  </tbody>
		<?php }  ?>
	</table>
	
</center>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>