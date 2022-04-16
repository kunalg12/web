<html>

<h1>2. Write a PHP script to check number 153 is Armstrong or not</h1>
<pre>
    <h3>
    $num = 153;
    $i;
    $rem = 0;
    $sum = 0;

    for($i = 0;$i<=$num;$i++)
    {
        $rem = $num % 10;
        $sum = $sum + $rem*$rem*$rem;
        $num = $num/10;

    }
    if($num = $sum)
    {
        echo "153 is Armstrong Number";
    }
    else
    {
        echo "153 is not Armstrong Number";
    }
    </h3>
</pre>
</html>
<?php
    $num = 153;
    $i;
    $rem = 0;
    $sum = 0;

    for($i = 0;$i<=$num;$i++)
    {
        $rem = $num % 10;
        $sum = $sum + $rem*$rem*$rem;
        $num = $num/10;

    }
    if($num = $sum)
    {
        echo "153 is Armstrong Number";
    }
    else
    {
        echo "153 is not Armstrong Number";
    }
?>