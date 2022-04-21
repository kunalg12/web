#Design a html form to accept a string. Write a php function that checks whether a passed stiring is palindrome or not?
<html>
	<form method="post" action = "./fact.php">
	
	<input type="test" name="str" id="str"/>
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
	$str = $_POST['str'];
	$pali = strrev($str);
	if($str == $pali)
	{
		echo "The string is palindrome";
	}
	else
	{
		echo "The string is not palindrome";
	}
?>
