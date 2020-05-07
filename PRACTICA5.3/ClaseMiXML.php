<?php
class miXML
{
    private $xml_nombre_archivo;
    private $dom;
    public function __construct(string $nombreArchivo)
    {
        $this->xml_nombre_archivo = $nombreArchivo;
        $this->dom = new DOMDocument('1.0','UTF-8');
        $this->dom->formatOutput = true;
    }
    public function insertePelicula(int $id, string $titulo, int $año, string $genero, string $clasificacion)
        {
            $this->dom->load($this->xml_nombre_archivo);
            $Peliculas = $this->dom->getElementsByTagName('peliculas')->item(0);
            $nodo_registro_peli = $this->dom->createElement('pelicula');
            $attr_peli_id = new DOMAttr('peli_id', $id);
            $nodo_registro_peli->setAttributeNode($attr_peli_id);
            $nodo_campo_title = $this->dom->createElement('titulo', $titulo);
            $nodo_campo_año = $this->dom->createElement('año', $año);
            $nodo_campo_genero = $this->dom->createElement('genero', $genero);
            $nodo_campo_clasif = $this->dom->createElement('clasificacion', $clasificacion);
            $nodo_registro_peli->appendChild($nodo_campo_title);
            $nodo_registro_peli->appendChild($nodo_campo_año);
            $nodo_registro_peli->appendChild($nodo_campo_genero);
            $nodo_registro_peli->appendChild($nodo_campo_clasif);
            $Peliculas->appendChild($nodo_registro_peli);
            $this->dom->save($this->xml_nombre_archivo);
        }
        public function existenValores(): int
        {
            $x = simplexml_load_file($this->xml_nombre_archivo);
            if ($x === false) return -1;
                else {  
                    return $x->count();
                }
        }
        public function crearXMLFile()
        {
            $raiz = $this->dom->createElement('peliculas');
            $this->dom->appendChild($raiz);
            $this->dom->save($this->xml_nombre_archivo);
        }
        public function obtenerPeliculas()
        {
            $datos = simplexml_load_file($this->xml_nombre_archivo)
            or die("Error: No se puede generar el objeto SimpleXMLElement");
            return $datos->pelicula;
        }
}
