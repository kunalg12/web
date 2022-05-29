<html>  
    <h1>
     Declare a multidimensional Array. Display specific element from a multidimensional array. Also delete given element from the 
     multidimensional array ( After each operation display array content)
    </h1>
</html>
<?php

$multi = array(array(1,2,3),array(4,5,6),array(7,8,9));
$i = 0;
$j = 0;

for($i = 0;$i<3;$i++)
{
  for($j = 0;$j<3;$j++)
  {
    echo $multi[$i][$j]." ";
  }
  echo "<br>";
}
unset($multi[0][0]);
for($i = 0;$i<3;$i++)
{
  for($j = 0;$j<3;$j++)
  {
    echo $multi[$i][$j]." ";
  }
  echo "<br>";
}
?>