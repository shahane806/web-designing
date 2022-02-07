<?php
$d=new DOMDocument();
$d->load("Set B file.xml");

$run=$d->getElementsByTagName('runs');
$wic=$d->getElementsByTagName('wickets');
$name=$d->getElementsByTagName('player');

foreach($name as $n)
{
            if($run=='1000' && $wic>='50')
            echo "<br>".$n->textContent;
            else "not";        
}
?>