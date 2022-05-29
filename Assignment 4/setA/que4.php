<html>
    <!-- 
        Write php script to demonstrate the concept of introspection for examining object
     -->
</html>

<?php
class intro
{
var $i;
function f1() {}
function f2() {}
}
class intro_1 extends intro
{
var $j,$k;
function f3() {}
function f4() {}
}
$ob=new intro_1();
if(is_object($ob)) //returns boolean value true if an object ob is created
{
echo get_class($ob); //returns class name of given object
}
if(method_exists($ob,'f4')) //returns tru if the method f4 exists for the object ob
{
echo "method f4 exists";
}
var_dump(get_object_vars($ob)); //retuns an array of parameter / variables for given object
?>