<?php
function name($weight,$h){
  if ($weight >= 80 || $weight <= 90 && $h >= 1.60 || $h <= 1.70) {
      echo "Your Body Index is 24.2";
  }elseif ($weight >= 70 || $weight <= 80 && $h >= 1.70 || $h <= 1.80) {
    echo "Your Body Index is 24.5";
  }elseif ($weight >= 60 || $weight <= 70 && $h >= 1.70 || $h <= 1.80) {
    echo "Your Body Index is 21.4";
  } 
}
name(87,1.62);
?>