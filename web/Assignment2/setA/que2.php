#Design a HTML: form to accept a string. Write a php function to reverse a string.

<html>
	<form method="post" action = "./fact.php">
	
	<input type="test" name="str" id="str"/>
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
	$str = $_POST['str'];
	$str = strrev($str); #by using builtin function
	
	echo $str;
?>
