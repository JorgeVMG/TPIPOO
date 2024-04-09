<?php
/**También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase 
 * ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. */
class ResponsableV{
    private $empleado;
    private $numeroLicencia;
    private $nombre;
    private $apellido;
    
    public function __construct($empl,$numLic,$nom,$apel){
        $this->empleado = $empl;
        $this->numeroLicencia = $numLic;
        $this->nombre = $nom;
        $this->apellido = $apel;
    }
      // Métodos get y set para $empleado
      public function getEmpleado() {
        return $this->empleado;
    }
    public function setEmpleado($empl) {
        $this->empleado = $empl;
    }
    public function getNumeroLicencia() {
        return $this->numeroLicencia;
    }
    public function setNumeroLicencia($numLic) {
        $this->numeroLicencia = $numLic;
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
}