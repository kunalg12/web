<html>
    <h1>
        Design a HTML form to accept email address from the user. Write a PHP function using regular expression check for the validity of entered 
        email - id . The @ symbol should not appear more than once. <br> The dot(.) can appear at the most once before @ and the most twice or at least once after @ symbol. <br> The substring before @ should not being with a digit or underscore or dot or @ or any other special character. <br>
        (Use explode and ereg function.)
    </h1>
    <form action="./que1.php" method="post">
    <input type="email" name = "check" id="check">
    <input type="submit" name="submit" id="submit">

    </form>
    
</html>
<?php

$email = $_POST["check"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$emailErr = "Invalid format and please re-enter valid email";
}
else
{
    echo "Email successful";

}
?>