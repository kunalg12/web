#Design a html form to accept a string. Write a php script for the following 
#a. Write a function to count the total number of Vowels from the script
#b. Show the occurrences of each Vowel from the script
<html>
	<form method="post" action = "./que2.php">
	
	<input type="str" name="str" id="str"/>
	<input type="submit" name="submit" id="submit">
	</form>
</htm>
<?php
	$str = $_POST['str'];
	$counter = 0;
	$vovel = ['a','e','i','o','u'];
	for($i = 0;$i<strlen($str);$i++)
	{
		
	if($str[$i]== 'a'||$str[$i] == 'e'||$str[$i]== 'i'||$str[$i] == 'o'||$str[$i]== 'u'||$str[$i]== 'A'||$str[$i]== 'E'||$str[$i]== 'I'||$str[$i] == 'O'||$str[$i]== 'U')
	{
		$counter=$counter+1;
		echo "The occurrences of the Vowel is : ".$i."<br>";
		
	}
		
	}
	echo "The total count of vowel is : ".$counter;
	
	
?>
