<?php
/**La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. 
 * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
 * Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase
 * (incluso los datos de los pasajeros).
 * Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de 
 * documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. 
 * También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase 
 * ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer 
 * referencia al responsable de realizar el viaje.
 * Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. 
 * Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
 * Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
 */
class viaje{
    private $codigoViaje;
    private $destino;
    private $cantidadMaxPasajeros;
    private $colcPasajeros;
    /**Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase */
    public function __construct($codVia,$dest,$cantMaxP,$colcP){
        $this->codigoViaje = $codVia;
        $this->destino = $dest;
        $this->cantidadMaxPasajeros = $cantMaxP;
        $this->colcPasajeros = $colcP;
    }

    public function getCodigoViaje() {
        return $this->codigoViaje;
    }
    public function setCodigoViaje($codigoViaje) {
        $this->codigoViaje = $codigoViaje;
    }
    public function getDestino() {
        return $this->destino;
    }
    public function setDestino($destino) {
        $this->destino = $destino;
    }
    public function getCantidadMaxPasajeros() {
        return $this->cantidadMaxPasajeros;
    }
    public function setCantidadMaxPasajeros($cantidadMaxPasajeros) {
        $this->cantidadMaxPasajeros = $cantidadMaxPasajeros;
    }
    public function getColcPasajeros() {
        return $this->colcPasajeros;
    }
    public function setColcPasajeros($colcPasajeros) {
        $this->colcPasajeros = $colcPasajeros;
    }
    public function __toString(){
        return "Codigo de viaje: ".$this->getCodigoViaje()."\nDestino: ".$this->getDestino()."\nCantidad maxima de pasajeros: ".$this->getCantidadMaxPasajeros().
        "\nCantidad de Pasajeros: ".count($this->getColcPasajeros());
    }
}