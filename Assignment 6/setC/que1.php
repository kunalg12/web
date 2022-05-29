<?php
$d=new DOMDocument();
$d->load("Set_C_Q1.xml");

$run=$d->getElementsByTagName('runs');

$name=$d->getElementsByTagName('player');

foreach($name as $n)
{
            if($run>"100")
            echo "<br>".$n->textContent;
            else "not";        
}
?>