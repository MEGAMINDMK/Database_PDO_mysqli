<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<title>localhost</title>

<?php
require 'db.php';
$search_value=$_POST["search"];
     $result = $db->query("SELECT * FROM users where candidate like '%$search_value%'");

  
      echo "
	<nav class='navbar sticky-top navbar-dark bg-secondary'>
  <a class='navbar-brand' href='#'>localhost</a>
</nav>
      <table>
        <tr>
		<th>ID</th>
		<th>Payment Date</th>
		<th>Candidate</th>
          <th>Passport</th>
		  <th>Mobile</th>
          <th>Visa Status</th>
		  <th>Days Left</th>
		  <th>Nation</th>
		 
		  <th>Profession</th>
		  <th>DL</th>
         
		  <th>Deal</th>
		  <th>Received</th>
         <th>CV Register</th>
          <th>Payment Received By</th>
		   <th>Total</th>
          <th>Company Name</th>
		  
        </tr>
      ";
    foreach($result as $row)
    {
   
        echo  "
          <tr>
		  <td>" . $row["id"]. "</td>
		  <td>" . $row["paymentdate"]. "</td>
		   <td>" . $row["candidate"]. "</td>
            <td>" . $row["passport"]. "</td>
			<td>" . $row["mobile"]. "</td>
            <td>" . $row["visastatus"]. "</td>
			<td>" . $row["daysleft"]. "</td>
			<td>" . $row["nation"]. "</td>
			
			 <td>" . $row["profession"]. "</td>
			<td>" . $row["dl"]. "</td>
           
			<td>" . $row["deal"]. "</td>
			<td>" . $row["received"]. "</td>
          <td>" . $row["cvreg"]. "</td>
            <td>" . $row["paymentreceivedby"]. "</td>
			<td>" . $row["total"]. "</td>
            <td>" . $row["companyname"]. "</td>
			
          </tr>
          ";
    }
 echo "</table><center><br><a href='index.php' class='btn btn-secondary btn-lg'><font color='white'>Home</font></a>&nbsp;<font color='white'>Delete Data</font></a>&nbsp;<a href='index.php?logout='1'' class='btn btn-secondary btn-lg' style='text-decoration:none'>Logout</a></center>";
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>