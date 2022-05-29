<html>
 
<body bgcolor="skyblue">
<form method="post">
<h2>Enter choice :</h2>


<input type="radio" name="ch" value=1> Merge given arrays <br>
<input type="radio" name="ch" value=2> Find intersection of two array <br>
<input type="radio" name="ch" value=3> Find union of two array <br>
<input type="radio" name="ch" value=4> Find set difference of two array <br>
<br>

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
     
        switch($choice)
        {
            case 1:
                print_r(array_merge($arr,$arr1));
                break;
        case 2:
               
          
           $inter= array_intersect($arr,$arr1);
            print_r($inter);

                break;
        case 3:
                $union=array_merge($arr,$arr1);
                print_r(array_unique($union));
                break;
        case 4:
                print_r(array_diff($arr,$arr1));
                break;
}

?> 