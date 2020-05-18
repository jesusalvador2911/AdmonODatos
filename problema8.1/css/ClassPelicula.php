<?php

class Pelicula
{
    
    public $nombrepelicula;
    public $Genero;
    public $Duracion;
    public $Clasificacion;
    public $Protagonistas;
   
    public function __construct(string $Nomp, string $Genero, string $Duracion, string $Clasificacion, string $Protagonistas)
    {
        $this->nombrepelicula = $Nomp;
        $this->Genero = $Genero;
        $this->Duracion = $Duracion;
        $this->Clasificacion = $Clasificacion;
        $this->Protagonistas = $Protagonistas;
    }

}