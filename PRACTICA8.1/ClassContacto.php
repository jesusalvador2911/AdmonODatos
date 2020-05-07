<?php
class Contacto
{

    public $nombre;
    public $apellidos;
    public $fecha_nac;
    public $estado_civil;
    public $origen;
    public $correo;
    public $redes;


    public function __construct(string $nom, string $apellidos, string $fecha, string $estado, string $orig, string $correo, string $redes)
    {

        $this->nombre = $nom;
        $this->apellidos = $apellidos;
        $this->fecha_nac = $fecha;
        $this->estado_civil = $estado;
        $this->origen = $orig;
        $this->correo = $correo;
        $this->redes = $redes;
    }

}