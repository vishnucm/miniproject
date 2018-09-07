<?php
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";
$con = mysqli_connect($server_name, $mysql_user, $mysql_pass);
$d = mysqli_select_db ($con,"testdb");
if(! $con ) {    
    die('Could not connect: ' . mysqli_error($con));
}

if (!isset($_POST['update'])) {
$update_id=$_GET['del']; 
$query = "SELECT * FROM events WHERE ID='$update_id'";//select query for viewing users.  
 $run=mysqli_query($con,$query);//here run the sql query.  
$row=mysqli_fetch_array($run);
}

if (isset($_POST['update'])) {
    $uid = mysqli_real_escape_string($con, $_POST['ID']);
    $event = mysqli_real_escape_string($con, $_POST['event']);
    $datee = mysqli_real_escape_string($con, $_POST['datee']);
    $query = "UPDATE events SET event='$event',datee='$datee' WHERE ID='$uid'";//select query for viewing users.  
    if(mysqli_query($con,$query))
    {
         echo "<script>window.open('event.php','_self')</script>";  
   }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Credentials</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body style="color=red">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="edit.php" method="post" name="signupform">
                <fieldset>
                    <legend>Edit Credentials</legend>

                    <div class="form-group">
                        <label for="name">ID</label>
                        <input type="text" name="ID" value=<?php echo "{$row[0]}"; ?> readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">EVENT</label>
                        <input type="text" name="event" placeholder=<?php echo "{$row[1]}"; ?>>
                    </div>

                    
                    <div class="form-group">
                        <label for="name">Date</label>
                        <input type="date" name="datee" placeholder=<<?php echo "{$row[2]}"; ?>>
                     </div>

                    <div class="form-group">
                        <input type="submit" name="update" value="Update" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            
        </div>
    </div>
  
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>