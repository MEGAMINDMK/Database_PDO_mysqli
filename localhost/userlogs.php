<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
/*
 * Easy PHP Tail 
 * by: Thomas Depole
 * v1.0
 * 
 * just fill in the varibles bellow, open in a web browser and tail away 
 */
$logFile = "userlogs.txt"; // local path to log file
$interval = 1000; //how often it checks the log file for changes, min 100
$textColor = "#00FF00"; //use CSS color



// Don't have to change anything bellow
if(!$textColor) $textColor = "";
if($interval < 100)  $interval = 100; 
if(isset($_GET['getLog'])){
	echo file_get_contents($logFile);
}else{
?>
<html>
	<title>localhost</title>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Ubuntu);
		body{
			background-color: black;
			color: <?php echo $textColor; ?>;
			font-family: 'Ubuntu', sans-serif;
			font-size: 16px;
			line-height: 20px;	
		}
		h4{
			font-size: 18px;
			line-height: 22px;
			color: #353535;
		}
		#log {
			position: relative;
			top: -34px;
		}
		#scrollLock{
			width:2px;
			height: 2px;
			overflow:visible;
		}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
	<script>
		setInterval(readLogFile, <?php echo $interval; ?>);
		window.onload = readLogFile; 
		var pathname = window.location.pathname;
		var scrollLock = true;
		
		$(document).ready(function(){
			$('.disableScrollLock').click(function(){
				$("html,body").clearQueue()
				$(".disableScrollLock").hide();
				$(".enableScrollLock").show();
				scrollLock = false;
			});
			$('.enableScrollLock').click(function(){
				$("html,body").clearQueue()
				$(".enableScrollLock").hide();
				$(".disableScrollLock").show();
				scrollLock = true;
			});
		});
		function readLogFile(){
			$.get(pathname, { getLog : "true" }, function(data) {
				data = data.replace(new RegExp("\n", "g"), "<br />");
		        $("#log").html(data);
		        
		        if(scrollLock == false) { $('html,body').animate({scrollTop: $("#scrollLock").offset().top}, <?php echo $interval; ?>) };
		    });
		}
	</script>
	
	<body>
		<!--h4><-?php echo $logFile; ?></h4-->
		<h4><?php echo "<br>" ?></h4>
		<div id="log">
			
		</div>
		<div id="scrollLock"> <input class="disableScrollLock btn btn-danger btn-lg" type="button" value="Disable Scroll Lock" /> <input class="enableScrollLock btn btn-success btn-lg" style="display: none;" type="button" value="Enable Scroll Lock" /></div>
<center><a href="index.php" class="btn btn-primary btn-lg">Home</a></center>
	</body>
</html>
<?php  } ?>
<link rel="icon" href="png/webnet.png" type="image/x-icon" />
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

