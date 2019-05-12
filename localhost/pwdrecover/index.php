<!DOCTYPE html>
<html>
<title>localhost</title>	
<link rel="shortcut icon" href="img/icons/favicon.png" type="image/png" sizes="16x16">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: gray;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: gray;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=file]{
background-color: white;
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
</style>
</head>
<body>

<h3>localhost</h3>

<div class="container">
 <form action="mail.php" method="post">
    <label for="toemail">Enter your Email<font color="red"><b>*</b></font></label>
    <input type="text" id="toemail" name="toemail" placeholder="Enter your Email.." required>
	<br><br>
    <input type="submit" value="Send">
  </form>
</div>
</body>
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
</html>