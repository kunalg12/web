<html>
    <h1>
        Design a HTML form to accept email address from the user. Write a PHP function using regular expression check for the validity of entered 
        email - id . The @ symbol should not appear more than once. <br> The dot(.) can appear at the most once before @ and the most twice or at least once after @ symbol. <br> The substring before @ should not being with a digit or underscore or dot or @ or any other special character. <br>
        (Use explode and ereg function.)
    </h1>
    <form action="./que1.php" method="post">
    <input type="text" name = "check" id="check">
    <input type="submit" name="submit" id="submit">

    </form>
    
</html>
<?php

$email = $_POST["check"];
$a = 0;
$b1 = 0;
$b2 = 0;
for ( $i = 0; $i<strlen($email); $i++)
{
	if($email[$i] == ' ')
	{
		echo ("<b style = 'color  red; font-size : 20px; '> NOTICE : </b> Email address should not contain space(' '). <b>");
		
	}
	if($email[$i] == '@')
	{
		$a += 1;
		$b j -= $i;
	}
	if($email [$i] == '.')
	{
			if(i<j)
			{
					$b1 +=1;
			}
			else 
			{
				$b2 +=1;
				
			}
	}
}
if($a > 2)
{
	echo("<b style = 'color : red; font-size : 20; '> NOTICE : </b> EMAIL ADDRESS SHOULD NOT ONTAIN '@ ' MORE THAN 2 TIMES. <br>");

}
if($a<1)
{
	echo("<b style = 'color : red ; font-size 20; '> NOTICE : </b>
	Email address should contain '  ' at least 1 time. <br> " );
	
}
if($b1>1)
{
	echo("<b style = 'color : red ; font-size 20; '> NOTICE : </b>
	Email address should not contain ' . ' before @ symbol more than one time<br> " );
	
}
if($b2<1 and $b2 > 2)
{
	echo("<b style = 'color : red ; font-size 20; '> NOTICE : </b>
	Email address should contain ' . ' after @ symbol at least 1 time and at most 2 time <br> " );
	
}

?>
