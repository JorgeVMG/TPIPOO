<?php
include "viaje.php";
include "pasajeros.php";
/**Implementar un script testViaje.php que cree una instancia 
 * de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos
 */
$viaje = new viaje(234,"buenos aires",34,[1,2,34,4,54]);
echo $viaje;