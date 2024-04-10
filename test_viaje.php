<?php
include "viaje.php";
include "pasajero.php";
include "responsable.php";
function menu(){

    echo "\n1-Cargar la informacion del viaje\n2-Modificar Viaje\n3-Ingresar Pasajeros\n4-Modificar Pasajero\n5-Ver los datos\n6-mostrar lista de pasajeros\n7-salir\n";
}
function compararPasajero($colcPasa,$nuevPasajero){
        $encontrado = false;
        $i = 0;
        while($encontrado==false&&$i<count($colcPasa)){
            $j=$colcPasa[$i];
            if($j === $nuevPasajero){
                $encontrado = true;
            }else{
                $i++;
            }
        }
        return $encontrado; 
}
function mostrarPasajeros($colecPasa){
    $coleccion="------------------\n";
    for($i=0;$i<count($colecPasa);$i++){
        $coleccion .= "Pasajero ".($i+1)."\n";
        $coleccion .= $colecPasa[$i]."\n";
        $coleccion .= "------------------\n";
    }
    return $coleccion;
}

/**Implementar un script testViaje.php que cree una instancia 
 * de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos
 */
$cantMax=3;//variable para tomar encuenta si no se a cambiado la cantidad maxima de pasajeros esto sera de ayuda para que no de error
$pasajero1 = new pasajero("lucas","arias",2,3);
$pasajero2 = new pasajero("rdad","dsda",33424,53354);
$colecPasajeros = [$pasajero1,$pasajero2];
$responsable= new ResponsableV(23,12,"juan","burgos");
$viaje = new viaje(1233,"buenos Aires","juan",$cantMax,$colecPasajeros);
echo "Bienvenidos a VIAJE FELIZ\n";
echo "¿Qué desea hacer?";
do{
    echo menu();
    echo "opcion: ";
    $opcion = trim(fgets(STDIN));
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
            break;
        case 3: 
            echo "ingrese los pasajeros:\n";
            $i = count($colecPasajeros);
            if ($i >= $cantMax) {
                echo "Se ha alcanzado la cantidad máxima de pasajeros permitida.\n";
            } else {
                $respuesta="s";
                while($respuesta=="s"&&$i<$cantMax){
                    $i++;
                    echo "Pasajero ".$i."\n";
                    echo "Nombre: ";
                    $nom = trim(fgets(STDIN));
                    echo "Apellido: ";
                    $apel = trim(fgets(STDIN));
                    echo "Numero de Documento: ";
                    $DNI = trim(fgets(STDIN));
                    echo "Telefono: ";
                    $telf = trim(fgets(STDIN));
                    $pasajero = new pasajero($nom,$apel,$DNI,$telf);
                    $resp = compararPasajero($colecPasajeros,$pasajero);
                    if ($resp===0){
                        $np=count($colecPasajeros);
                        $colecPasajeros[$np]=$pasajero;
                        echo "el pasajero fue ingreado\n";
                    }else{
                        $i--;
                        echo "el pasajero ya existe\n";
                    }
                    
                }
            }
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
            $colecPasajeros[$opcionPasajero]->modificar($nuevoNom,$nuveoApellido, $nuevoTelefono);
            break;
        case 5 :
            echo $viaje;
            break;
        case 6:
            echo mostrarPasajeros($colecPasajeros);
    }
    echo "-------------------------------------\n";
    
}while($opcion>0 &&$opcion<7);
