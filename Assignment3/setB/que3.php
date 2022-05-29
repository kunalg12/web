<html>
<body bgcolor=gold>
<form  method="post">
Enter choice :
<br>
<input type="radio" name="ch" value=1> Insert element in queue<br>
<input type="radio" name="ch" value=2> Delete element from queue <br>
<input type="radio" name="ch" value=3> Display content of queue <br>
<br>

<input type="submit" value="submit">
<input type="reset" value="reset">
</form>
</body>

</html>

<?php
$choice=$_POST['ch'];
{
        $arr=array(1,2,3,4,5,6,7,8,9,10);
        switch($choice)
        {

            case 1:
                array_unshift($arr,"999");
                print_r($arr);
                break;
        case 2:
                $ele=array_shift($arr);
                echo "Deleted element : $ele";
                break;
        case 3:
                print_r($arr);
                break;
}
}

?>