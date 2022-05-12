<html><h1>2. Write a PHP scipt to display student information on web page</h1></html>
<?php

    $studentName = "Random";
    $studentAge  = 12;
    $studentMobile = "+914459848333";
    $studentName2 = "Random2";
    $studentAge2  = 10;
    $studentMobile2 = "+914459848333";
    $studentName3 = "Random3";
    $studentAge3  = 12;
    $studentMobile3 = "+914459848333";
    $studentName4 = "Random4";
    $studentAge4  = 13;
    $studentMobile4 = "+914459848333";

    
?>
<html>
    <table>
        <tr>

            <th>
                <h2> Name</h2>
            </th>
            <th>
                <h2>Age</h2>
            </th>
            <th>
               <h2> Mobile</h2>
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $studentName;?>
            </td>
            <td>
                <?php echo $studentAge;?>
            </td>
            <td>
                <?php echo $studentMobile;?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $studentName2;?>
            </td>
            <td>
                <?php echo $studentAge2;?>
            </td>
            <td>
                <?php echo $studentMobile2;?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $studentName3;?>
            </td>
            <td>
                <?php echo $studentAge3;?>
            </td>
            <td>
                <?php echo $studentMobile3;?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $studentName4;?>
            </td>
            <td>
                <?php echo $studentAge4;?>
            </td>
            <td>
                <?php echo $studentMobile4;?>
            </td>
        </tr>
    </table>
</html>