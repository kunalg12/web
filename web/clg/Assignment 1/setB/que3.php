<html>
    <h1>
        3. Write a PHP script to check whether accepted number is prime or not
    </h1>
    <form action="./que3.php" method="post">
    <input type="number" name = "check" id="check">
    <input type="submit" name="submit" id="submit">

    </form>
    <pre>
        <h3>
        $num = $_POST['check'];
        $i;
        $sum = 0;
        for($i = 1;$i<=$num;$i++)
        {
            if($num%$i == 0)
            {
                $sum = $sum + 1;

            }
        }
        if($sum == 2)
        {
            echo $num." is Prime Number ";
        }
        else
        {
            echo $num. " is Not Prime Number";
        }
        </h3>
    </pre>
</html>
<?php
        $num = $_POST['check'];
        $i;
        $sum = 0;
        for($i = 1;$i<=$num;$i++)
        {
            if($num%$i == 0)
            {
                $sum = $sum + 1;

            }
        }
        if($sum == 2)
        {
            echo $num." is Prime Number ";
        }
        else
        {
            echo $num. " is Not Prime Number";
        }
?>