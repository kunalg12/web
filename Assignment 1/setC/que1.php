<html>
    <h1>
        <pre>
        1. Write a PHP script to print following floyd's triangle 
        1
        2 3
        4 5 6
        7 8 9 10

       
        </pre>
    </h1>
    
 
</html>
<?php

$num =4 ;
$i;
$temp = 1;
$j;

for($i = 1; $i<=$num; $i++)
{
    for($j = 1; $j<=$i ; ++$j)
    {
        echo $temp ." ";
        ++$temp;
    }
    echo "<br>";
}


?>