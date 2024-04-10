<?php
/**La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. 
 * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
 * Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase
 * (incluso los datos de los pasajeros).
 * Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
 * Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
 */
class viaje{
    private $codigoViaje;
    private $destino;
    private $cantidadMaxPasajeros;
    private $colcPasajeros;
    private $responsable;
    /**Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase */
    public function __construct($codVia,$dest,$resp,$cantMaxP,$colcP){
        $this->codigoViaje = $codVia;
        $this->destino = $dest;
        $this->responsable = $resp;//La clase Viaje debe hacer referencia al responsable de realizar el viaje.
        $this->cantidadMaxPasajeros = $cantMaxP;
        $this->colcPasajeros = $colcP;//El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. 
         
    }

    public function getCodigoViaje() {
        return $this->codigoViaje;
    }
    public function setCodigoViaje($codVia) {
        $this->codigoViaje = $codVia;
    }
    public function getDestino() {
        return $this->destino;
    }
    public function setDestino($dest) {
        $this->destino = $dest;
    }
    
    public function getResponsable(){
        return $this->responsable;
    }
    public function getCantidadMaxPasajeros() {
        return $this->cantidadMaxPasajeros;
    }
    public function setCantidadMaxPasajeros($cantMaxP) {
        $this->cantidadMaxPasajeros = $cantMaxP;
    }
    public function getColcPasajeros() {
        return $this->colcPasajeros;
    }
    public function setColcPasajeros($colcP) {
        $this->colcPasajeros = $colcP;
    }
    public function __toString(){
        return "Codigo de viaje: ".$this->getCodigoViaje()."\nDestino: ".$this->getDestino()."\nResponsable: ".$this->getResponsable()."\nCantidad maxima de pasajeros: ".$this->getCantidadMaxPasajeros().
        "\nCantidad de Pasajeros: ".count($this->getColcPasajeros());
    }
   
}
