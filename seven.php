<?php
function name($amout,$curren){
   if ($curren == 'dollar') {
       $cash = 86.2 * $amout;
       echo "Bd Balance is $cash Taka";
   }elseif($curren == 'canadian dollar'){
    $cash = 67.2 * $amout;
    echo "Bd Balance is $cash Taka";
   }elseif($curren == 'pound'){
    $cash = 114.2 * $amout;
    echo "Bd Balance is $cash Taka";
   }
}
name(34,'pound');
?>