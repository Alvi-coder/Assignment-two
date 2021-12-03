<?php
function name($type,$text){
if ($type == 'big') {
    echo "<p style=\" text-transform:uppercase;\">$text</p>";
}elseif($type == 'small'){
    echo "<p style=\" text-transform:lowercase; \">$text</p>";
}else {
    echo "type small or big";
}

}
name('big','hi how are you');
?>