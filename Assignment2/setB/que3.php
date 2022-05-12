#Write a php script for the following 
#a.Design a form to accept two numbers from the users.
#b. Give option to choose an arithmetic operation
#(use Radio Button) 
#c. Display the result on next form
#d. Use concept of default parameter

<html>
	<form method="post" action = "./que3.php">
	
	<input type="number" name="num1" id="num1"/>
	<input type="number" name="num2" id="num2"/>
	+<input type="radio" name = "ope"    value = "+" />
	-<input type="radio" name = "ope"	value = "-"/>
	*<input type="radio" name = "ope"	value = "*"/>
	/<input type="radio" name = "ope"	value = "/"/>
	
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
 
	$num1  = $_POST['num1'];
	 $num2  = $_POST['num2'];
	 
	 $ope   = $_POST['ope'];
	
	function d($num1 = 0,$num2 = 0,$ope = "+")
	{
		if($ope == "+")
	 {
		 echo $num1 + $num2;
	 }
	 else if ($ope == "-")
	 {
		echo $num1 - $num2;
	 }
	 else if($ope == "/")
		 
		 {
			 echo $num1 / $num2;
		 }
		 
		 else if ($ope == "*")
		 {
			 echo $num1 * $num2;
		 }
	}
	 d($num1,$num2,$ope);
	 
	 
		 
	 
	
	
	
	
?>
