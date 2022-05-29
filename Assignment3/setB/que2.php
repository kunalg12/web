<html>  
    <h1>
    Write a menu driven program to perform the following stack related operations.
    a) Insert an element in stack.
    b) Delete an element from stack [ Himt : array_push() , array_pop()]
    </h1>
    <form method = "post" action = "./que2.php">
        <label for="ins">Insert an element in stack</label>

        <input type="radio" name="ins" id="ins" value = "ins">
        <label for="elem">Enter Element <br> </label>
        <input type="text" name="ele" id="ele">
        <br>
        <label for="del">Delete an element from stack</label>
        <input type="radio" name="ins" id="del" value = "del">
        <br>
        <input type="submit" value="submit">

</form>
</html>9
<?php
   $stack = array();
   $ins = $_POST['ins'];

   $num = $_POST['ele'];
   if($ins == "ins")
   {
    $ex = explode(",",$num);
    array_push($stack,$ex);
    print_r($stack);
   }
   else if($ins == "del")
   {
    array_pop($stack);
   }


?>