<html>
	<form method="post" action = "./fact.php">
	<label>
	array : 	$arr = ("a"=>"3","b"=>"2","c"=>"1");

		Display the elements of an array along with the keys
	<label>
	<input type = "radio" name = "alg" id = "alg" value = "1"/>
	<br>
	<label>
		Display the size of an array
	<label>
	<input type = "radio" name = "alg" id = "alg2" value = "2"/>
	
	<br>
	
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
 
	$arr = array('a'=>'3','b'=>'2','c'=>'1');
	$b = $_POST['alg'];
	
	if($b == "1")
	{
		foreach($arr as $keys => $val)
		{
			echo $keys."=>".$val;
		}
	}
	else if($b == "2")
	{
		echo "The total cont is ".count($arr);
	}
	
		 
	 
	
	
	
?>
