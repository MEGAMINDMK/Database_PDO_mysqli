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

<body>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			
			<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<title>localhost</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<!--<nav class="navbar sticky-top navbar-dark bg-secondary">
  <a class="navbar-brand" href="#">Khosa Consultants CV Database</a>
  <p><font color="white">Welcome <strong><?php echo $_SESSION['username']; ?></strong></font><br><a href="../fm" class="btn btn-danger btn-sm">Resume - CV</a>
  &nbsp;<a href="https://pdf2doc.com/" class="btn btn-secondary btn-sm"><font color="white">PDF to DOC</font></a>
  &nbsp;<a href="userlogs.php" class="btn btn-success btn-sm"><font color="white">Check Logs</font></a></p>
</nav>-->

<nav class="navbar sticky-top navbar-dark bg-secondary">
  <a class="navbar-brand" href="#">localhost</a>
  <div class="dropdown">
  <font color="white">Welcome <strong><?php echo $_SESSION['username']; ?></strong></font>
  <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-cog"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
    <a class="dropdown-item" href="chngpwd.php">Change Password</a>
	<a class="dropdown-item" href="userlogs.php" >Check Logs</a>
	<a class="dropdown-item" href="https://pdf2doc.com/" >PDF to DOC</a>
	<a class="dropdown-item" href="fm" class="btn btn-danger btn-sm">Resume - CV</a>
	<a class="dropdown-item" href="delacc.php" class="btn btn-danger btn-sm">Delete Account</a>
	<a class="dropdown-item" href="show.php" class="btn btn-secondary btn-lg">Show Data</a>
  </div>
</div>
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
<form action="insert.php" method="post">
    <table>
        <tbody><tr>
            <th><label for="paymentdate">Payment Date:</label></th>
            <td><input type="text" name="paymentdate" id="paymentdate" required></td>
        </tr>
		<tr>
            <th><label for="candidate">Candidate:</label></th>
            <td><input type="text" name="candidate" id="candidate" required></td>
        </tr>
		
        <tr>
            <th><label for="passport">Passport:</label></th>
               <td><input type="text" name="passport" id="passport" required></td>
        </tr>
        <tr>
            <th><label for="mobile">Mobile:</label></th>
            <td><input type="text" name="mobile" id="mobile" required></td>
        </tr>
        <tr>
            <th><label for="visastatus">Visa Status:</label></th>
            <td><input type="text" name="visastatus" id="visastatus" required></td>
        </tr>
        <tr>
            <th><label for="daysleft">Days Left:</label></th>
            <td><input type="text" name="daysleft" id="daysleft" required></td>
        </tr>
        <tr>
            <th><label for="nation">Nation:</label></th>
            <td><input type="text" name="nation" id="nation" required></td>
        </tr>
		
		<tr>
            <th><label for="profession">Profession:</label></th>
            <td><input type="text" name="profession" id="profession" required></td>
        </tr>
		<tr>
            <th><label for="dl">DL:</label></th>
            <td><input type="text" name="dl" id="dl" required></td>
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
            <th><label for="cvreg">CV Register:</label></th>
            <td><input type="text" name="cvreg" id="cvreg" required></td>
        </tr>
		<tr>
            <th><label for="paymentreceivedby">Payment Received By:</label></th>
            <td><input type="text" name="paymentreceivedby" id="paymentreceivedby" required></td>
        </tr>
		<tr>
            <th><label for="total">Total:</label></th>
            <td><input type="text" name="total" id="total" required></td>
        </tr>
		<tr>
            <th><label for="companyname">Company Name:</label></th>
            <td><input type="text" name="companyname" id="companyname" required></td>
        </tr>
    </tbody></table><br>
    <input type="submit" class="btn btn-secondary" value="Add Data">
    </form>

	
<!-- Filteration 
<div style="width:25%; margin:auto; float:left;"> 
<div style="display:inline-block; width:30%;text-align:center;">
<form class="form-inline" action="filterpaymentdate.php" method="post">
<input class="form-control mr-sm-2" type="text" name="search" placeholder="Filter Payment Date">
<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
</form>
</div>
</div>

<div style="width:25%; margin:auto; float:left;"> 
<div style="display:inline-block; width:30%;text-align:center;">
<form class="form-inline" action="filterprofession.php" method="post">
<input class="form-control mr-sm-2" type="text" name="search" placeholder="Filter Profession">
<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
</form>
</div>
</div>

<div style="width:25%; margin:auto; float:left;"> 
<div style="display:inline-block; width:30%;text-align:center;">
<form class="form-inline" action="filtercandidate.php" method="post">
<input class="form-control mr-sm-2" type="text" name="search" placeholder="Filter Candidate">
<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
</form>
</div>
</div>

<div style="width:25%; margin:auto; float:left;"> 
<div style="display:inline-block; width:30%;text-align:center;">
<form class="form-inline" action="filterpassport.php" method="post">
<input class="form-control mr-sm-2" type="text" name="search" placeholder="Filter Passport">
<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
</form>
</div>
</div>-->


    <!--<center>
	<a href="show.php" class="btn btn-secondary btn-lg">Show Data</a>
	<a href="index.php?logout='1'" class="btn btn-secondary btn-lg" style="text-decoration:none">Logout</a>
	<a href="chngpwd.php" class="btn btn-secondary btn-lg" style="text-decoration:none">Change Password</a>
	</center>-->
	
	
	</body></html>

		<!--------- Custom checker to check how much times a day user logs into panel ------>
	<!--------- But this is not it i want to make the check of that user and remove account after 2 days if he doesnt get back ------>
<div id="wrapper">
<div id="detail_div">
<?php
function ip_details($IPaddress) 
{
    $json       = file_get_contents("http://ipinfo.io/{$IPaddress}");
    $details    = json_decode($json);
    return $details;
}

$IPaddress  =  $_SERVER['REMOTE_ADDR'];

$details    =   ip_details("$IPaddress");

//echo $details->city;   
// echo $details->country;  
//echo $details->org;      
//echo $details->hostname; 

 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 $datetime = date("l jS \of F Y h:i:s A");
 $useragent = $_SERVER['HTTP_USER_AGENT'];
 /*
 echo "<p>Username : "$_SESSION['username']."</p>";
 echo "<p>Country : ".$details->country."</p>";
 echo "<p>City : ".$details->city."</p>";
 echo "<p>Refferer : ".$_SERVER['HTTP_REFERER']."</p>";
 echo "<p>IP Address : ".$IPaddress."</p>";
 echo "<p>Current Page : ".$page."</p>";
 echo "<p>Current Time : ".$datetime."</p>";
 echo "<p>Browser : ".$useragent."</p>";
 */
 error_reporting(0);
$text = "
Username : ".$_SESSION['username']."
Country : ".$details->country."
City : ".$details->city."
Refferer : ".$_SERVER['HTTP_REFERER']."
IP Address : ".$IPaddress."
Current Page : ".$page."
Current Time : ".$datetime."
Browser : ".$useragent."\n";

$filename = "userlogs.txt";
$fh = fopen($filename, "a");
fwrite($fh, $text);
fclose($fh);
?>
</div>
</div>
<!--------- END ----------->
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
		<?php endif ?>
	</div>
		
</body>
</html>