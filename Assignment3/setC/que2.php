<html>
 
<body bgcolor="skyblue">
<form method="post">
<h2>Enter choice :</h2>


<input type="radio" name="ch" value=1> Sort array by values in ascending,descending order<br>
<input type="radio" name="ch" value=2> Also sort array by values without changing key values <br>
<input type="radio" name="ch" value=3> Filter odd elements from array <br>

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
        //$arr1=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>55,'q'=>66,'r'=>77,'s'=>88);
      //  $arr2=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,'e'=>50,'f'=>60,'g'=>70,'h'=>80);
        switch($choice)
        {
                case 1:
                    echo "<br>";
                        sort($arr);
                        echo "Array in ascending order:<br>";
                        print_r($arr);
                        rsort($arr);
                        echo "<br>Array in descending order:<br>";
                        print_r($arr);
                        break;
                case 2:    
                    echo "<br>";
                        asort($arr);
                        echo "Array in ascending order:<br>";
                        print_r($arr);
                        arsort($arr);
                        echo "<br>Array in descending order:<br>";
                        print_r($arr);
                        break;
               case 3:  
                echo "<br>";
                        print_r(array_filter($arr,'is_odd'));
                        break;
               }
                ?>