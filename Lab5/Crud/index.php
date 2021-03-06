<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>CRUD PHP</title>
</head>
<body>
<?php require_once 'process.php'; ?>

<?php
if (isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>

</div>

<?php endif ?>
<div class="container">

<?php
$mysqli = new mysqli('localhost','root','99090111','crud') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
//pre_r($result);
?>
<div class="row justify-content-center">
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th> Location</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>

        <?php
        while($row=$result->fetch_assoc()):
        ?>
        <tr>
           <td> <?php echo $row['name'];?></td>
            <td> <?php echo $row['location'];?></td>
            <td>
                <a href="index.php?edit=<?php echo $row['id'];?>"
                   class="btn btn-info"> Edit</a>
                <a href="process.php?delete=<?php echo $row['id'];?>"
                   class="btn btn-danger"> Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php
pre_r($result->fetch_assoc());
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<div class="row justify-content-center">
<form action="process.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<div class="form-group">
<label> Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your name" >
</div>
    <div class="form-group">
        <label> Location</label>
        <input type="text" name="location" class="form-control" value="<?php echo $location ; ?>" placeholder="Enter your location" >
    </div>
    <div class="form-group">
        <?php
        if($update == true):
        ?>
        <button type="submit" name="update" class="btn btn-info btn-block"> Update</button>
        <?php else:?>
        <button type="submit" name="save" class="btn btn-primary btn-block"> Save</button>
        <?php endif;?>
    </div>
</form>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>