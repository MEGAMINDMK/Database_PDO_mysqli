<?php

// php update data in mysql database using PDO

if(isset($_POST['update']))
{
   require 'db.php';
    
    // get values form input text and number
    
    $id = $_POST['id'];
    $deal = $_POST['deal'];
    $received = $_POST['received'];
	$receiveable = $_POST['receiveable'];
	$acholder = $_POST['acholder'];
	$paymentreceivedby = $_POST['paymentreceivedby'];
    
    // mysql query to Update data
    
$db->exec("UPDATE `users` SET `deal`='".$deal."',`received`='".$received."', `receiveable`='".$receiveable."', `acholder`='".$acholder."', `paymentreceivedby`='".$paymentreceivedby."' WHERE `id` = $id");
    

}
header("Location: show.php");
?>