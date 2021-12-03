<?php
function name($year){
     if ($year <= 7) {
         return "You are a child";
     }elseif ($year <= 17){
        return "You are a growing kid";
     }elseif ($year <= 23){
        return "You are a Teenager";
     }elseif ($year <= 50){
        return "You are a Grown man";
     }elseif ($year <= 100){
        return "You are a Old man";
     }else{
        return "Type your Real Age Please";
     }
}
echo name(44);
?>