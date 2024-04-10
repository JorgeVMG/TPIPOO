<?php
include "viaje.php";
include "pasajero.php";
include "responsable.php";
function menu(){
    echo "Bienvenidos a VIAJE FELIZ\n";
    echo "¿Qué desea hacer?\n1-Cargar la informacion del viaje\n2-Modificar Viaje\n3-Ingresar Pasajeros\n4-Modificar Pasajero\n5-Ver los datos";
}

/**Implementar un script testViaje.php que cree una instancia 
 * de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos
 */
$viaje = 0;
$responsable=0;
$colecPasajeros = [];
echo menu();
$opcion = trim(fgets(STDIN));
do{
    switch($opcion){
        case 1:
            echo "Ingrese el codigo de Viaje:";
            $codVia = trim(fgets(STDIN));
            echo "Destino:";
            $dest = trim(fgets(STDIN));
            echo "Ingrese el responsable:\n";
            echo "Numero de Empleado: ";
            $numI = trim(fgets(STDIN));
            echo "Numero de Licencia: ";
            $numL= trim(fgets(STDIN));
            echo "Nombre: ";
            $nombr = trim(fgets(STDIN));
            echo "Apellido: ";
            $apel = trim(fgets(STDIN));
            $responsable = new ResponsableV($numI,$numL,$nombr,$apel);
            echo "Cantidad Maxima de Pasajeros:";
            $cantMax = trim(fgets(STDIN));
            $viaje = new viaje($codVia,$dest,$responsable,$cantMax,$colecPasajeros);
            break;
        case 2:
            echo "Ingrese el nuevo codigo de Viaje:";
            $codVia = trim(fgets(STDIN));
            echo "Ingrese el nuevo destino:";
            $dest = trim(fgets(STDIN));
            echo "Ingrese el nuevo responsable:\n";
            echo "Numero de Empleado: ";
            $numI = trim(fgets(STDIN));
            echo "Numero de Licencia: ";
            $numL= trim(fgets(STDIN));
            echo "Nombre: ";
            $nombr = trim(fgets(STDIN));
            echo "Apellido: ";
            $apel = trim(fgets(STDIN));
            $responsable = new ResponsableV($numI,$numL,$nombr,$apel);
            echo "Ingrese la nueva capacidad Maxima de Pasajeros:";
            $cantMax = trim(fgets(STDIN));
            $viaje = new viaje($codVia,$dest,$responsable,$cantMax,$colecPasajeros);
        case 3: 
            echo "ingrese los pasajeros:";
            $i = 0;
            do{
                $i++;
                echo "\nPasajero ".$i;
                echo "\nNombre: ";
                $nom = trim(fgets(STDIN));
                echo "\nApellido: ";
                $apel = trim(fgets(STDIN));
                echo "\nNumero de Documento: ";
                $DNI = trim(fgets(STDIN));
                echo "\nTelefono: ";
                $telf = trim(fgets(STDIN));
                $pasajero = new pasajero($nom,$apel,$DNI,$telf);
                if ($viaje->compararPasajero($pasajero)==false){
                    $np=count($colecPasajeros);
                    $coleccionPasajeros[$np]=$pasajero;
                }else{
                    $i--;
                }
                if ($i >= $cantMax) {
                    echo "Se ha alcanzado la cantidad máxima de pasajeros permitida.\n";
                } else {
                    echo "¿Desea ingresar otro pasajero? (s/n): ";//lo que intento aqui esque determine si quiere ingresar mas pasajeris o no y no solo hacerlo hasta el limite 
                    $respuesta = trim(fgets(STDIN));
                }
            }while($respuesta=="s"&&$i<$cantMax);
            break;
        case 4: 
            echo " Que pasajero desear cambiar:\n";
            $opcionPasajero=trim(fgets(STDIN));
            $opcionPasajero--;
            echo "nuevo nombre: ";
            $nuevoNom=trim(fgets(STDIN));
            echo "nuevo apellido: ";
            $nuveoApellido=trim(fgets(STDIN));
            echo "nuevo Nro.Telefono:";
            $nuevoTelefono=trim(fgets(STDIN));
            $coleccionPasajeros[$opcionPasajero]->modificar($nuevoNom,$nuveoApellido, $nuevoTelefono);
            break;
        default :
            echo "erros opcion incorrecta\n";
            break;
    }
    
}while($opcion==6);
