#Design a HTML: form to accept a string. Write a php function to reverse a string.
<html>
	<form method="post" action = "./que2.php">
	
	<input type="test" name="str" id="str"/>
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
	$str = $_POST['str'];
	#$str = strrev($str); #by using builtin function
	function revstr($str)
	{
		$i = 0;
		for($i = strlen($str)-1;$i>=0;$i--)
		{
			 echo $str[$i];
		}
	}
	revstr($str);
	
?>
