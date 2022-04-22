<?php
highlight_file();
echo "Hello world<br>";
 $a = 3;
 $b = 2;
 $c = 1;
if(($a>$b)&&($a>$c))
{
	echo " A is greater<br>";
}
else if(($b > $c)&&($b>$a))
{
	echo " B is greater<br>";
}
else
{
	echo " C is greater<br>";
}


#Arithmatic Operators

echo "<h1> Arithmatic Operators</h1>";
echo "A = ".$a = 2;
echo "<br>";
echo "B = ".$b = 1;
echo "<br>";
echo "<br>";
echo " A + B = ".$a+$b ."<br>";
echo " A - B = ".$a-$b ."<br>";
echo " A * B = ".$a*$b ."<br>";
echo " A / B = ".$a/$b ."<br>";
echo " A % B = ".$a%$b ."<br>";
echo " A ** B = ".$a**$b ."<br>";

#Assignment Operators
echo "<h1>Assignment Operators</h1>";
echo "A = ".$a = 2;
echo "<br>";
echo "B = ".$b = 1;
echo "<br>";
echo "<br>";
echo " A += B = ".($a+=$b) ."<br>";
echo " A -= B = ".($a-=$b) ."<br>";
echo " A *= B = ".($a*=$b)."<br>";
echo " A /= B = ".($a/=$b) ."<br>";
echo " A %= B = ".($a%=$b) ."<br>";


#Increment Operators

echo "<br>";
echo "<h1>Increment Operators</h1><br>";
echo "A = ".$a = 2;
echo "<br>";
echo "B = ".$b = 1;
echo "<br>";
echo "<br>";
echo " Post Increment ";


echo " <br>A++   =". ($a++)."<br>";
echo " Pre Increment";
echo "<br>++A   =".(++$a)."<br>";

echo "<br>";
echo "<br>";
echo "<h1>Decriment Operators</h1><br>";
echo "A = ".$a = 2;
echo "<br>";
echo "B = ".$b = 1;
echo "<br>";
echo "<br>";
echo "Post Decriment<br>";
echo "A-- = ".($a--)."<br>";
echo "Pre Increment<br>";
echo "--A = ".(--$a)."<br>";


#Logical Operators
echo "<h1>Logical Operators</h1>";

echo "A = ".$a = 0;
echo "<br>";
echo "B = ".$b = 1;
echo "<br>";


echo "A && B = ".(($a&&$b)? 1:0)."<br>";
echo "A || B = ".(($a||$b)? 1:0)."<br>";
echo "!A = ".((!$a))."<br>";


#Comparision Operators
echo "<h1>Comparision Operators</h1>";
echo "A = ".$a = 2;
echo "<br>";
echo "B = ".$b = 1;
echo "<br>";

echo "A == B = ".(($a==$b)? 1:0)."<br>";
echo "A === B = ".(($a===$b)? 1:0)."<br>";
echo "A < B = ".(($a<$b)? 1:0)."<br>";
echo "A <= B = ".(($a<=$b)? 1:0)."<br>";
echo "A > B = ".(($a>$b)? 1:0)."<br>";
echo "A >= B = ".(($a>=$b)? 1:0)."<br>";
echo "A != B = ".(($a!=$b)? 1:0)."<br>";
echo "A !== B = ".(($a!==$b)? 1:0)."<br>";

 
?>
