
<!DOCTYPE html>
<html>
<head>
	<title>localhost</title>
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<section class="container">
			<section class="login-form">
				<form method="post" action="updatepwd.php" name="Login_Form" role="login">
				<?php echo '<center>Update your password Below</br>OR</br><a href="show.php"><i class="fas fa-igloo"></i></a></center>';?>
					<img src="assets/images/logo.png" class="img-responsive" alt="" />
					<input type="text" name="username" placeholder="Username" required class="form-control input-lg" />
					<input type="password" name="password" placeholder="New Password" required class="form-control input-lg" />
					<button type="submit" name="submit" class="btn btn-lg btn-secondary btn-block">Update</button>
					
				</form>
				<div class="form-links">
					<a href="#">www.localhost.com</a>
				</div>
			</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
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
</body>
</html>