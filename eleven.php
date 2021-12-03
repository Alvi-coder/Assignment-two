<?php
function name($a,$width,$h){
    if ($a == 'valorant' && $width >= 100 && $width <= 200 && $h >= 100 && $h <= 200) {
       echo $a="<img src='83307766.jpg'>";
    }elseif ($a == 'netflix' && $width >= 100 && $width <= 200 && $h >= 100 && $h <= 200) {
        echo $a="<img src='n.png'>";
    }elseif ($a == 'call' && $width >= 100 && $width <= 200 && $h >= 100 && $h <= 200) {
        echo $a="<img src='callof.jpg'>";
    }
}
name('valorant',150,100);
?>