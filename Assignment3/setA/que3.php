<html>  
    <h1>
      Declare array. Reverse the order of elements, making the first element last and last element first and similarly rearranging other array elements 
      [Hint  : array_reverse()]

    </h1>
</html>
<?php

    $arr = array(1,2,3,4,5);

    echo "The given array is : <br> ";
    foreach($arr as $a)
    {
        echo $a;
    }
    
    echo "<br>By reverse order we get : <br> ";
   $arr= array_reverse($arr);
    foreach($arr as $a)
    {
        echo $a;
    }

?>