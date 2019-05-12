<?php
//==php new pdo sqlite google it===
try
{
    //open the database
    $db = new PDO('sqlite:localhost.db');


 $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}
//echo "Connected to the database";
    //create the database
	
	/*
    $db->exec("CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY,
  `paymentdate` varchar(50) NOT NULL,
  `candidate` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `visastatus` varchar(50) NOT NULL,
  `daysleft` varchar(50) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `dl` varchar(50) NOT NULL,
  `deal` varchar(50) NOT NULL,
  `received` varchar(50) NOT NULL,
  `cvreg` varchar(50) NOT NULL,
  `paymentreceivedby` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL
)");   

*/    
