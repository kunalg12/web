<html>  
    <h1>
       Write a menu driven program the following operation on an associative array
       a) Reverse the order of each element's key-value pair [Hint : array_flip()]
       b) Traverse the element in an array in random order [hint : shuffle()]

    </h1>
    <form method = "post" action = "./que2.php">
    <label for="arrflip">a) Reverse the order of each element's key-value pair</label> 
    <input type="radio" name="arr" id="arrflip" value = "arr">
    <label for="shuffel"><br>b) Treverse the element in an array in random order</label>
    <input type="radio" name="arr" id="shuf" value = "shuf">

    <br>
    <input type="submit" value="submit">

</form>
</html>
<?php
    $arr = $_POST['arr'];
    $array1 = array('color1' => 'red', 'color2'=>'blue','color3'=> 'green');
    switch ($arr) {
        case 'arr':
            array_flip($array1);
            foreach($array1 as $key => $value)
            {
                echo "keys : ".$key."   "."Values : ".$value."<br>";
            }
            break;
        
        case 'shuf':
            shuffle($array1);
            foreach($array1 as $key => $value)
            {
                echo "keys : ".$key."   "."Values : ".$value."<br>";
            }
            break;
    }
?>

