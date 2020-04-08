<html>
<head>
	<title>購物車頁</title>
</head>
<body>
	<center>

		<?php
		session_start();

		if(isset($_SESSION["id"]))  {
		$id=$_SESSION["id"];
		$name=$_SESSION["name"];
		$num=$_SESSION["num"];


		setcookie($id."[name]",$name,time()+3600);
		setcookie($id."[num]",$num,time()+3600);
		}
		header('location:cart.php');
		?>
	</center>
</body>
</html>