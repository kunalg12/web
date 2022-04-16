<html><h1>



1. Write a PHP script to declare three variables and print maximum among them

</h1>
<pre>
<p>

$num1 = 3;
$num2 = 5;
$num3 = 9;

if($num1>$num2 && $num1 > $num3)
{
    echo "Num1 is Max";
}
else if($num2>$num3 && $num2>$num1)
{
    echo "Num2 is Max";
}
else
{
    echo "Num3 is Max";
}

</p>
</pre></html>
<?php

$num1 = 3;
$num2 = 5;
$num3 = 9;

if($num1>$num2 && $num1 > $num3)
{
    echo "Num1 is Max";
}
else if($num2>$num3 && $num2>$num1)
{
    echo "Num2 is Max";
}
else
{
    echo "Num3 is Max";
}
?>
