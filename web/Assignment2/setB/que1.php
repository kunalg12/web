#Design a html page to accept a number and write a php script to display that number in words i.e. 123 -> one two three
<html>
	<form method="post" action = "./fact.php">
	
	<input type="str" name="str" id="str"/>
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
	$str = $_POST['str'];
	
	$rem=array();
	$s = ["zero","one","two","three","four","five","six","Seven","eight","nine"];
	for($i = 0;$str>1;$i++)
	{
		$rem[$i] = $str%10;
		#echo $rem[$i];
		$str = $str/10;
	}
	
	
	for($j = $i-1;$j>=0;$j--)
	{
		 echo $s[$rem[$j]]." ";
	}
	
?>
