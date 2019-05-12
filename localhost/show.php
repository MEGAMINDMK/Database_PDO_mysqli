
<title>localhost</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
html {
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;
}
.intro {
  max-width: 1280px;
  margin: 1em auto;
}
.table-scroll {
  position: relative;
  width:100%;
  z-index: 1;
  margin: auto;
  #overflow: scroll;
  height: 720px;
}
.table-scroll table {
  width: 100%;
  min-width: 1280px;
  margin: auto;
  border-collapse: separate;
  border-spacing: 0;
}
.table-wrap {
  position: relative;
}
.table-scroll th,
.table-scroll td {
  padding: 5px 10px;
  border: 1px solid #000;
  background: #fff;
  vertical-align: top;
}
.table-scroll thead th {
  background: #333;
  color: #fff;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
/* safari and ios need the tfoot itself to be position:sticky also */
.table-scroll tfoot,
.table-scroll tfoot th,
.table-scroll tfoot td {
  position: -webkit-sticky;
  position: sticky;
  bottom: 0;
  background: #666;
  color: #fff;
  z-index:4;
}

a:focus {
  background: red;
} /* testing links*/

th:first-child {
  position: -webkit-sticky;
  position: sticky;
  left: 0;
  z-index: 2;
  background: #ccc;
}
thead th:first-child,
tfoot th:first-child {
  z-index: 5;
}

</style>
<!--
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
-->
<?php
require 'db.php';

    //now output the data to a simple html table...
  $result = $db->query('SELECT * FROM users');
  
      echo "
	<nav class='navbar sticky-top navbar-dark bg-secondary'>
  <a class='navbar-brand' href='#'>localhost</a>
  <div class='dropdown'>
  <font color='white'>More Items<strong></strong></font>
  <button class='btn btn-secondary dropdown-toggle btn-lg' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
  <i class='fas fa-cog'></i>
  </button>
  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
    <a class='dropdown-item' href='index.php'>Home</a>
    <a class='dropdown-item' href='del.php'>Delete Data</a>
	<a class='dropdown-item' href='edit.php' >Edit Data</a>
	<a class='dropdown-item' href='index.php?logout='1'' >Logout</a>
	</div>
</div>
</nav>

<div id='table-scroll' class='table-scroll'>
  <table id='main-table' class='main-table'>
    <thead>
        <tr>
		<th>ID</th>
		
		<th>Payment Date<br><div style='width:25%; margin:auto; float:left;'> 
<div style='display:inline-block; width:30%;text-align:center;'>
<form class='form-inline' action='filterpaymentdate.php' method='post'>
<input class='form-control mr-sm-2' type='text' name='search' placeholder='Filter Payment Date'>
<button class='btn btn-outline-secondary my-2 my-sm-0' type='submit' name='submit' value='Search'>Search</button>
</form>
</div>
</div></th>

		<th>Candidate<br><div style='width:25%; margin:auto; float:left;'> 
<div style='display:inline-block; width:30%;text-align:center;'>
<form class='form-inline' action='filtercandidate.php' method='post'>
<input class='form-control mr-sm-2' type='text' name='search' placeholder='Filter Candidate name'>
<button class='btn btn-outline-secondary my-2 my-sm-0' type='submit' name='submit' value='Search'>Search</button>
</form>
</div>
</div></th>

          <th>Passport<br><div style='width:25%; margin:auto; float:left;'> 
<div style='display:inline-block; width:30%;text-align:center;'>
<form class='form-inline' action='filterpassport.php' method='post'>
<input class='form-control mr-sm-2' type='text' name='search' placeholder='Filter Passport'>
<button class='btn btn-outline-secondary my-2 my-sm-0' type='submit' name='submit' value='Search'>Search</button>
</form>
</div>
</div></th>

		  <th>Mobile</th>
		  
          <th>Visa Status<br><div style='width:25%; margin:auto; float:left;'> 
<div style='display:inline-block; width:30%;text-align:center;'>
<form class='form-inline' action='filtervisa.php' method='post'>
<input class='form-control mr-sm-2' type='text' name='search' placeholder='Filter Passport'>
<button class='btn btn-outline-secondary my-2 my-sm-0' type='submit' name='submit' value='Search'>Search</button>
</form>
</div>
</div></th>

		  <th>Days Left</th>
		  
		  <th>Nation<br><div style='width:25%; margin:auto; float:left;'> 
<div style='display:inline-block; width:30%;text-align:center;'>
<form class='form-inline' action='filternation.php' method='post'>
<input class='form-control mr-sm-2' type='text' name='search' placeholder='Filter Passport'>
<button class='btn btn-outline-secondary my-2 my-sm-0' type='submit' name='submit' value='Search'>Search</button>
</form>
</div>
</div></th>

		  
		  <th>Profession<br><div style='width:25%; margin:auto; float:left;'> 
<div style='display:inline-block; width:30%;text-align:center;'>
<form class='form-inline' action='filterprofession.php' method='post'>
<input class='form-control mr-sm-2' type='text' name='search' placeholder='Filter Profession'>
<button class='btn btn-outline-secondary my-2 my-sm-0' type='submit' name='submit' value='Search'>Search</button>
</form>
</div>
</div></th>

		  <th>DL</th>
		  <th>Deal</th>
		  <th>Received</th>
		  <th>CV Register</th>
          <th>Payment Received By</th>
		   <th>Total</th>
          <th>Company Name</th>
        </tr>
		</thead>
    <tbody>
	
      ";
    foreach($result as $row)
    {
   
        echo  "
          <tr>
		  <td>" . $row["id"]. "</td>
		  <td>" . $row["paymentdate"]. "</td>
		   <td><a href='fm' style='text-decoration:none'>" . $row["candidate"]. "</a></td>
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
 //echo "</table></div><center><br><a href='index.php' class='btn btn-secondary btn-lg'><font color='white'>Home</font></a>&nbsp;<a href='del.php' class='btn btn-secondary btn-lg'><font color='white'>Delete Data</font></a>&nbsp;<a href='edit.php' class='btn btn-secondary btn-lg'style='text-decoration:none'>Edit</a>&nbsp;<a href='index.php?logout='1'' class='btn btn-secondary btn-lg'style='text-decoration:none'>Logout</a></center>";
 echo "</table></div>";
?>
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