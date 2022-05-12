<html>  
    <h1>
        Write a PHP script for the following : Design a form to accept two strings. <br>
        Compare the two strings using both method ( == operator  & strcmp function).<br>
        Append second string to the first string. Accept the position from the users; from where the characters from the first string are reversed. (use radio buttons).
        
    </h1>
</html>
<html>  
    <h1>
        Write a PHP script for the following : Design a form to accept two strings. <br>
        Compare the two strings using both method ( == operator  & strcmp function).<br>
        Append second string to the first string. Accept the position from the users; from where the characters from the first string are reversed. (use radio buttons).
        
    </h1>
    <form method = "post" action = "./que3.php">
        <h1>String 1 : </h1>
        <input type="text" name="str1" id="str1">
        <h1>String 2 : </h1>
        <input type="text" name="str2" id="str2">

        <h1>Compare strings</h1>
        <input type="radio" name="str" id="str" value = "com">
        <br>
        <h1>Append string</h1>
        <input type="radio" name="str" id="str2" value = "app">
        <br>
        <h1>Reverse string</h1>
        <input type="radio" name="str" id="str3" value = "rev">
        <input type="number" name="pos" id="pos">
        <br>

        <input type="submit" value="submit">
</form>
</html>


<?php
    $string1 = $_POST['str1'];
    $string2 = $_POST['str2'];

    $val = $_POST['str'];
    $pos = $_POST['pos'];
    if($val == "com")
    {
        echo "By using == symbol";
        if($string1 == $string2)
        {
            echo "strings are equal<br>";
        }
        else
        {
            echo "Strings are not equal<br>";
        }
        echo "By using strcmp function";
        if(strcmp($string1,$string2)==0)
        {
            echo "Strings are equal<br>";

        }
        else
        {
            echo " Strings are not equal<br>";
        }
    }

    if($val == "app")
    {
        $string3 = $string1.$string2;
        echo "The result is : $string3<br>";
    }

    if($val == "rev")
    {
         $len=strlen($string1)-$pos;
        $s=substr($string1,$pos,$len);
        $str4=strrev($s);
        echo "After reverse::$str4.<br>";

    }
?>
