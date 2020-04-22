<?php
    $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;
    $xml_file_name = 'lista_peliculas.xml';
        //crea el nodo raíz llamado Películas
        $raiz = $dom->createElement('Peliculas');
//creamos el nodo Pelicula. para cada película
            $nodo_peli = $dom->createElement('pelicula');
//define el atributo ID para el nodo película (aunque aun no lo asignamos)
            $attr_peli_id = new DOMAttr('peli_id', '5467');
//ahora sí, aquí le asignamos el atributo al nodo pelicula
        $nodo_peli->setAttributeNode($attr_peli_id);
        $child_node_title = $dom->createElement('Titulo', 'La Campaña');
            //agregamos el nodo hijo 'Titulo' al nodo pelicula
        $nodo_peli->appendChild($child_node_title);
        $nodo_hijo_año = $dom->createElement('Año', 2012);
//agregamos el nodo hijo 'Año' al nodo pelicula
        $nodo_peli->appendChild($nodo_hijo_año);
        $nodo_hijo_genero = $dom->createElement('Genero', 'Drama');
//agregamos el nodo hijo 'Año' al nodo pelicula
        $nodo_peli->appendChild($nodo_hijo_genero);
        $child_node_ratings = $dom->createElement('Clasificacion', 'B');
//agregamos el nodo hijo 'Clasificacion' al nodo pelicula
    $nodo_peli->appendChild($child_node_ratings);
    $raiz->appendChild($nodo_peli);
        //agregamos el nodo raíz al documento XML
$dom->appendChild($raiz);
        //guarda el archivo XML en el archivo
$dom->save($xml_file_name);
echo "El archivo: <a href= '$xml_file_name'> $xml_file_name </a> se ha creado con éxito";
?>