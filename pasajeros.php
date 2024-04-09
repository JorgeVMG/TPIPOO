<?php
/** Utilice clases y arreglos  para   almacenar la información correspondiente a los pasajeros. 
 * Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”. */
class pasajeros{
    private $nombre;
    private $apellido;
    private $numeroDocumento;
    
    public function __construct($nom,$apel,$numDoc){
        $this->nombre = $nom;
        $this->apellido = $apel;
        $this->numeroDocumento = $numDoc;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function getNumeroDocumento() {
        return $this->numeroDocumento;
    }
    public function setNumeroDocumento($numeroDocumento) {
        $this->numeroDocumento = $numeroDocumento;
    }
}