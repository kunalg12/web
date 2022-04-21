 # Writa a PHP script to accept the number from user and Write a php function to calculate the factorial of a number ( a non-negative integer). The function accept the number as an argument.
<html>
	<form method="post" action = "./fact.php">
	<input type="number" name="inp" id="inp"/>
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
	$num = $_POST['inp'];
	$fact = 1;
	$i = 1;
	for($i = 1;$i<=$num;$i++)
	{
		$fact =$fact * $i;
	}	
	echo "The factorial of ".$num." is ".$fact;
?>
