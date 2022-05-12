<html>
<h1>
    3. Write a PHP script to test whether a number is greater than 30,20,10 using ternary operator

</h1>
<form action="./que3.php" method="post">
    <input type="number" name = "check" id="check">
    <input type="submit" name="submit" id="submit">

    </form>
</html>

<?php
  $num = $_POST['check'];
  
  // if($num >= 30)
  // {
  //  echo "$num is greater than or equal to  30<br>";
  // }
  // else if($num >= 20 && $num < 30)
  // {
  //   echo "$num is greater than or equal to  20 and less than 30<br>";
  // }
  // else if($num >= 10 && $num < 20 && $num < 30)
  // {
  //   echo "$num is greater than or equal to  10 and less than 20 and also less than 30<br>";
  // }
  // else
  // {
  //   echo "$num is less than 10<br>";
  // }
  $res = 0;
  (($num >= 30)||($num >= 20)||($num >= 10))?   $res = 1 :  $res =  0 ;
  echo $res;
  if($res == 1)
  {
    echo "Number is greater than 30,20,10<br>";
  }
  else 
  {
    echo "Number is not greater than 30,20,10<br>";
  }
?>