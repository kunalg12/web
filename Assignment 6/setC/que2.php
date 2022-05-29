<?php
$d=new DOMDocument();
$d->load("Set_C_Q2.xml");

$sujectcode=$d->getElementsByTagName('subjectcode');
$subjectname=$d->getElementsByTagName('subjectname');


foreach($subjectname as $n)
{
if(!$sujectcode=='245BCA')

echo "<br>".$n->textContent;
else 

    echo "not";

}

?>