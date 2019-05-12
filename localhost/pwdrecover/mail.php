<?php
$to = $_POST['toemail'];
$from = "postmaster@localhost.com";
$subject = "localhost - Recover Account";
$message = "Kindly click on the following link http://localhost/chngpwd.php to Recover your account";
if (mail($to, $subject, $message, "From:" . $from)) {
  header('Location: redirect/index.html');
} else {
   echo "ERROR";
}
?>
