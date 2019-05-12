	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<meta http-equiv="refresh" content="5;url=index.php" />
<?php
	require 'dbupdatepwd.php';
if(isset($_POST['submit']))
{
	
 // $id=$_POST['id'];
  $username=$_POST['username'];
 // $email=$_POST['email'];
  $password=$_POST['password'];
 

// Create connection

 // $sql = "UPDATE users SET `username`='".$username."',`email`='".$email."',`password`='".md5($password)."' WHERE `id` = '".$id."'";
 $sql = "UPDATE users SET `password`='".md5($password)."' WHERE `username` = '".$username."'";
  if ($conn->query($sql) === TRUE) {
    echo "".$username." your password has been changed<br>Redirecting to home in 5 sec...";
} else {
    echo "Error updating record: " . $conn->error;
}

}
?>