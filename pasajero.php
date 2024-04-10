<?php
/** Utilice clases y arreglos  para   almacenar la información correspondiente a los pasajeros. 
 * Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”. */
class pasajero{
    private $nombre;
    private $apellido;
    private $numeroDocumento;
    private $telefono;
    /**Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de 
 * documento y teléfono */
    public function __construct($nom,$apel,$numDoc,$telf){
        $this->nombre = $nom;
        $this->apellido = $apel;
        $this->numeroDocumento = $numDoc;
        $this->telefono = $telf;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nom) {
        $this->nombre = $nom;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function setApellido($apel) {
        $this->apellido = $apel;
    }
    public function getNumeroDocumento() {
        return $this->numeroDocumento;
    }
    public function setNumeroDocumento($numDoc) {
        $this->numeroDocumento = $numDoc;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telf){
        $this->telefono = $telf;
    }
    public function __toString(){
        return "Nombre y Apellido: ".$this->getNombre()." ".$this->getApellido()."\nDNI: ".$this->getNumeroDocumento()."\nTelefono: ".$this->getTelefono();
    }
    public function modificar($nuevoNom, $nuevoApe, $nuevoTele){
        $this->setNombre($nuevoNom);
        $this->setApellido($nuevoApe);
        $this->setTelefono($nuevoTele);
    }
}
