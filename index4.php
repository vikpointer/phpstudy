<?php
    // lesson4_Link variables
    $a = 3.1415926;
    $b =& $a;
    $b = 2.18;
    
    echo 'a = -'.$a.'-<br>';
    echo 'b = -'.$b.'-<br>';
    
    $s = "a";
    echo "a = -".$$s."-<br>";

?>
