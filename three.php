<?php
function name($num){
      if ($num < 33) {
        $grade = 'F';
          echo "You have Failed in your exam and your Grade is $grade";
      }elseif ($num <= 40){
        $grade = 'E';
        echo "Congratulation you have passed your exam and your Grade is $grade";
      }elseif ($num <= 50){
        $grade = 'D';
        echo "Congratulation you have passed your exam and your Grade is $grade";
      }elseif ($num <= 60){
        $grade = 'C';
        echo "Congratulation you have passed your exam and your Grade is $grade";
      }elseif ($num <= 70){
        $grade = 'A-';
        echo "Congratulation you have passed your exam and your Grade is $grade";
      }elseif ($num <= 80){
        $grade = 'A';
        echo "Congratulation you have passed your exam and your Grade is $grade";
      }elseif ($num <= 100){
        $grade = 'A+';
        echo "Congratulation you have passed your exam and your Grade is $grade";
      }else{
          echo "please put your number";
      }
}
name(78);
?>