<?php
$n = 0;

listar($n);
function listar(int $n)
{

    for ($i = 0; $i <= $n; $i++) {

        if (($i > 0) and ((($i % 3) == 0) or (($i % 5) == 0))) {
            if (($i % 3) == 0) {
                echo ("fizz");
            }

            if (($i % 5) == 0) {
                echo ("buzz");
            }

        } else {
            echo $i;
            
        }
        echo "\t";

    }
}
