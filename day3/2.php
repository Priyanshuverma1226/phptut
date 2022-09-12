<?php
$marks=96;
if ($marks>90 and $marks<100) {
   
    if ($marks>95) {
        echo "A+";
    }
    else{
        echo "A";
    }
}
elseif ($marks>80 and $marks<90) { 
    echo "B";
}
elseif ($marks>70 and $marks<80) {
    echo "C";
}
else{
    echo "Fail";
}
?>