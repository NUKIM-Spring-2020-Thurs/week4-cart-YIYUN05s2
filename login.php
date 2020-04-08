<html>
<h2>log me in</h2>

<?php
if (isset($_COOKIE["ID"])) {
	$user=$_COOKIE["ID"];	
	echo "歡迎再度光臨".$_COOKIE["ID"];
	// setcookie("ID","",time()-3600);
}
else{
	echo "歡迎新朋友";
}
?>
<form action="check.php" method="post">

	Please input your usename:<input type="text" name="id" value="<?php echo $user ?>" required><br/>
	Please input your password:<input type="password" name="pwd" required><br/>
	<input type="submit">
	
</form>
</html>