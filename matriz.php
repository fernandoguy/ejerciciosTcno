<?php
$numero = $_POST['numero'];

mostrarMatriz($numero);

function mostrarMatriz(int $cantidad)
{
    $columnas = $cantidad;
    $filas = $cantidad;
    $derecha = true;
    $izquierda = false;
    $abajo = false;
    $matrizc = array();
    $x = 0;
    $y = -1;

    for ($k = 1; $k <= $columnas * $filas; $k++) {
        if ($izquierda) {
            $y = $y - 1;
            if ($y == -1) {
                $y = 0;
                $x = $x - 1;
                $izquierda = false;
            } else if (isset($matrizc[$x][$y])) {
                $y = $y + 1;
                $x = $x - 1;
                $izquierda = false;
            }
        } else if ($derecha) {
            $y = $y + 1;
            if ($y == $columnas) {
                $y = $columnas - 1;
                $x = $x + 1;
                $derecha = false;
                $abajo = true;
            } else if (isset($matrizc[$x][$y])) {
                $y = $y - 1;
                $x = $x + 1;
                $derecha = false;
                $abajo = true;
            }
        } else if ($abajo) {
            $x = $x + 1;
            if ($x == $filas) {
                $x = $filas - 1;
                $y = $y - 1;
                $abajo = false;
                $izquierda = true;
            } else if (isset($matrizc[$x][$y])) {
                $y = $y - 1;
                $x = $x - 1;
                $abajo = false;
                $izquierda = true;
            }
        } else {
            $x = $x - 1;
            if ($x == -1 || isset($matrizc[$x][$y])) {
                $x = $x + 1;
                $y = $y + 1;
                $derecha = true;
            }
        }

        $matrizc[$x][$y] = $k;

    }

    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            echo $matrizc[$i][$j];
            echo ("\t");

        }
        echo ("<br>");
    }

}
