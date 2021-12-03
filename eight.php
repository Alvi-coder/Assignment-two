<?php
function name($color){
   if ($color == 'red') {
       echo "<h1 style=\"color:red;\">Heading</h1>";
   }elseif($color == 'green') {
    echo "<h1 style=\"color:green;\">Heading</h1>";
   }elseif($color == 'yellow') {
    echo "<h1 style=\"color:yellow;\">Heading</h1>";
   }elseif($color == 'purple') {
    echo "<h1 style=\"color:purple;\">Heading</h1>";
   }elseif($color == 'blue') {
    echo "<h1 style=\"color:blue;\">Heading</h1>";
   }else{
    echo "<h1>Type your color</h1>";
   }
}
name('red');

?>