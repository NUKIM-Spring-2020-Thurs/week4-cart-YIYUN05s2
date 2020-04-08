<html>
<head>
	<title>商品清單頁面</title>
	<meta charset="utf-8">
	<?php
	session_start();
	if(isset($_SESSION["login"])){
	$date=strtotime("+7 days",time());
	setcookie("ID",$_SESSION["ID"],$date);}
	else{
		header('location:login.php');
	}

	if(isset($_POST[good])){
		$_SESSION["num"]=$_POST["num"];
		$id=$_POST["good"];
		$_SESSION["id"]=$id;

		switch ($id) {
			case 'computer':
			$_SESSION["name"]="電腦";
				break;
			case 'mouse':
				$_SESSION["name"]="滑鼠";
				break;
			case 'usb':
				$_SESSION["name"]="隨身碟";
				break;
			case 'keyboard':
				$_SESSION["name"]="鍵盤";
				break;
		}
		header('location:addcart.php');
	}
	?>
</head>
<body>
	<h1><center>清單頁面~</center></h1>


	<center>

		<form action="catalog.php" method="POST">
請選擇商品:<select name="good" required>
			<option value="computer">電腦</option>
			<option value="mouse">滑鼠</option>
			<option value="usb">隨身碟</option>
			<option value="keyboard">鍵盤</option>
		</select></br>
請輸入數量:<input type="text" name="num" value="num" required>

	<input type="submit" name="button" value="add into cart">&emsp;&emsp;<input type="reset" name="reset" value="清除">
<
</center>
</body>
</html>