<?php
/*- Exercici 1
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/
function llamada($tempLlamada = 14) {
    if ($tempLlamada > 3) {
        $costeLlamada =  (($tempLlamada - 3) * 5) + 10;
        echo "El coste de la llamada es de: " . $costeLlamada . "cents";
    } else {
        echo "El coste de la llamada es de: 10cents.";  
    }
}
llamada();

?>