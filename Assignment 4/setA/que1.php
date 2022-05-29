<html>
    <!-- Write a php program to define interface shape which has two method area() and volume()
        Define a constant pi . Create a class Cylinder implement this interface and calculate area and volume
    -->
    <form method = "post" action = "que1.php">
        <label for="radi">Radius : </label>
        <input type="text" name="radi" id="radi ">
        <label for="hei">Height : </label>
        <input type="text" name="hei" id="hei">
        <input type="submit">

</form>
</html>

<?php
$radius = 0;
$height = 0;
if(isset($_POST['radi']))
{
    $radius = $_POST['radi'];
}
if(isset($_POST['hei']))
{$height = $_POST['hei'];
}


    define("pie",3.14);
    class Cylinder
    {
        private $radius;
        private $height;

        public function area($radius,$height)
        {
            $are = 2*pie*$radius*$height+2*pie*$radius*$radius;
            echo "The area of cylinder is ".$are;
        }
        public function volume($radius,$height)
        {
            $vol = 2*pie*$radius*$radius*$height;
            echo "The volume of cylinder is ".$vol;
        }

    }
    interface shape
    {
        //function declaration  
         public function area($radius,$height);
         public function volume($radius,$height);
    }

    $cy = new Cylinder();
    $cy->area($radius,$height);
    echo "<br>";
    $cy->volume($radius,$height);

?>