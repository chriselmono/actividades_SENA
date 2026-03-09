<?php

echo "    ";

$asterisco = 7;

for ($i = 0; $i < $asterisco; $i++) {

    for ($o = 0; $o < $asterisco; $o++) {

        if ($i == 0 || $i == ($asterisco - 1) || ($asterisco - 1 - $i) == $o) {

            echo "*";

        } else {

            echo " ";
            
        }
    }
    echo "
    ";
}
?>