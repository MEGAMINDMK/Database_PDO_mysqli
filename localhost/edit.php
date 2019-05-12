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
<html lang="en"><head>
<meta charset="UTF-8">
<title>localhost</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<nav class="navbar sticky-top navbar-dark bg-secondary">
  <a class="navbar-brand" href="#">localhost</a>
</nav>
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

<body>
<form action="update.php" method="post">
<h4>Give id to Update the user data</h4>
    <table>
        <tbody>
		<tr>
            <th><label for="id">ID:</label></th>
            <td><input type="text" name="id" id="id" required></td>
        </tr>
		<tr>
            <th><label for="deal">Deal:</label></th>
            <td><input type="text" name="deal" id="deal" required></td>
        </tr>
		<tr>
            <th><label for="received">Received:</label></th>
            <td><input type="text" name="received" id="received" required></td>
        </tr>
		<tr>
            <th><label for="receiveable">Receiveable:</label></th>
            <td><input type="text" name="receiveable" id="receiveable" required></td>
        </tr>
		<tr>
            <th><label for="paymentreceivedby">Payment Received by:</label></th>
            <td><input type="text" name="paymentreceivedby" id="paymentreceivedby" required></td>
        </tr>
    </tbody></table><br>
    <input type="submit" class="btn btn-secondary" name="update" value="Update Data">
    </form>
	
	<center><a href="show.php" class="btn btn-secondary btn-lg">Show Data</a>
	<a href="logout.php" class="btn btn-secondary btn-lg" style="text-decoration:none">Logout</a></center>
	</body></html>

<script>
    $(document).ready(function(){ 
	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
    }); 
</script>
<script>
window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
</script>