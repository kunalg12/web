<html>
    <!-- 
        Write a php script to create a class shape and its subclass triangle, square and display area of 
        selected shape(Use the concept of inheritance)
        Display menu (Use radio button)
        a. Triangle
        b. Square
        c. Rectangle
        d. Circle
     -->
     <form action="que2.php" method="post">
         <label for="triangle">Triangle</label>
         <input type="radio" name="shape" id="triangle " value = "t">
         <input type="text" name = "b" >
         <input type="text" name = "h" >
<br>
         <label for="square">Square</label>
         <input type="radio" name="shape" id="square " value  ="sq">
         <input type="text" name = "side" >
       
       
        <br>
         <label for="rectangle">Rectangle</label>
         <input type="radio" name="shape" id="rectangle " value = "rec">
         <input type="text" name = "len" >
         <input type="text" name = "bre" >
         <br>
         <label for="circle">Circle</label>
         <input type="radio" name="shape" id="circle" value = "cir">
         <input type="text" name = "rad" > 
         <br>
         <input type="submit">
     </form>
</html>

<?php
$shape = 0;
$side = 0;
$len = 0;
$bre = 0;
$rad = 0;
$b = 0;
$h = 0;
if(isset($_POST['shape']))
{
    $shape = $_POST['shape'];
}
if(isset($_POST['side']))
{
    $side = $_POST['side'];
}
if(isset($_POST['len']))
{
    $len = $_POST['len'];
}
if(isset($_POST['bre']))
{
    $bre = $_POST['bre'];
}
if(isset($_POST['rad']))
{
    $rad = $_POST['rad'];
}
if(isset($_POST['b']))
{
    $b = $_POST['b'];
}
if(isset($_POST['h']))
{
    $h = $_POST['h'];
}

echo $shape."<br>";
echo $side."<br>";
echo $len."<br>";
echo $bre."<br>";
echo $rad."<br>";
echo $b."<br>";
echo $h."<br>";
define("pie",3.14);

class shape
{
    

    function areaofTri($b,$h)
    {
        $area = (0.5)*$b*$h;
        echo "Area of triangle is ";
        echo $area;
        echo "<br>";
    }
    
    function areaofRec($len,$bre)
    {
        $area = $len*$bre;
        echo "Area of rectangle is ";
        echo $area;
        echo "<br>";
    }
    function areaofCir($rad)
    {
        $area = pie*$rad*$rad;
        echo "Area of Circle is : ";
        echo $area;
        echo "<br>";
    }

    function areaofsq($side)
    {
        $area = $side*$side;
        echo "Area of Square is : ";
        echo $area;
        echo "<br>";
    }
}

   
switch($shape)
{
    case 't':
        {
            $tri = new shape();
            $tri -> areaofTri($b,$h);
        }
        break;
    case 'rec':
        {
            $rec = new shape();
            $rec ->areaofRec($len,$bre);
        }
        break;
    case 'cir':
        {
            $cir = new shape();
            $cir ->areaofCir($rad);
        }
        break;
    case 'sq':
        {
            $sq = new shape();
            $sq ->areaofsq($side);
        }
        break;
    default:
        {
            echo "invalid input";
        }
        break;
}

?>