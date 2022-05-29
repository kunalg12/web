<html>
 
<body bgcolor="tomato">
<form method="post">
<h2>Enter choice :</h2>

<input type="radio" name="ch" value=4> Sort different array at glance using single function<br>
<input type="submit" value="SUBMIT">  <input type="reset" value="CLEAR">
 
</body>
 
</html>

<?php
function is_odd($var)
{
if($var%2==1)
return $var;
}
                                                                                                                              
$choice=$_POST['ch'];
 
        $arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8);
        $arr1=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>55,'q'=>66,'r'=>77,'s'=>88);
        $arr2=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,'e'=>50,'f'=>60,'g'=>70,'h'=>80);

        array_multisort($arr,0,$arr1,1,$arr2,0);
        echo "<br>";
                        print_r($arr);
                        echo "<br>";
                        print_r($arr1);
                        echo "<br>";
                        print_r($arr2);
                        echo "<br>";
                ?>