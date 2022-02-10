<?php


$string = "el gato al rato, el rato a la cuerda, la cuerda al palo, daba el arriero a Sancho, Sancho a la moza, la moza a él, el ventero a la moza";

contarPalabra($string);
function contarPalabra(string $string){
$temporal = "";
$string = preg_replace('/[0-9\@\.\,;\""]+/', '', $string);
$tok = strtok($string, " ");

while ($tok !== false) {
    if (mb_substr_count($temporal, $tok) == 0) {
        $temporal = $temporal . " " . $tok;
    }
    $tok = strtok(" \n\t");
}
$tok = strtok($temporal, " ");
echo "<table><thead><tr><th>palabra</th><th>cantidad</th></tr></thead><tbody>";
while ($tok !== false) {
    echo "<tr><td>" . $tok . "</td><td>" . mb_substr_count($string, $tok) . "</td>";
    $tok = strtok(" \n\t");
}
echo "</tbody></table>";
}