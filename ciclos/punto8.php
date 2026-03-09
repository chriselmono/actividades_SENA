<?php

echo "      ";

$num = 1;

for ($i = 0; $i < 4; $i++) {

    for ($o = 0; $o <= $i; $o++) {

        echo " {$num} ";

        $num++;

    }

    echo "
    ";
    
}

?>
