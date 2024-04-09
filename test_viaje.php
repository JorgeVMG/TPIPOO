<?php
include "viaje.php";
include "pasajeros.php";
function menu(){
    echo "Bienvenidos a VIAJE FELIZ\n";
    echo "¿Qué desea hacer?\n1-Cargar la informacion del viaje\n2-Modificar Viaje\n3-Ver sus datos\n";
}
/**Implementar un script testViaje.php que cree una instancia 
 * de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos
 */
$viaje = new viaje(234,"buenos aires",34,[1,2,34,4,54]);
echo menu();
$opcion = trim(fgets(STDIN));
switch($opcion){
    case 1:
        echo $viaje;
        break;
    case 2:
        echo "modificar";
        break;
    case 3: 
        echo "Sus datos";
        break;
    default :
        echo "erros opcion incorrecta\n";
        break;
}