<?php
/** 
 * Clase Libro
 * 
 * Representa un libro con atributos de título, autor y precio.
 * 
 * @author Samuel
 * @version 1.0
 */
class Libro {
    
    /**
     * @var string Título del libro
     */
    private $titulo; 
    
    /**
     * @var string Autor del libro
     */
    private $autor; 
    
    /**
     * @var float Precio del libro
     */
    private $precio; 
    
    /**
     * Constructor de la clase
     * 
     * @access public 
     * @param string $titulo Título del libro
     * @param string $autor Autor del libro
     * @param float $precio Precio del libro
     */

    public function __construct($titulo, $autor, $precio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }
    
    /**
     * Devuelve el título del libro
     * @access public
     * @return string
     */
    public function getTitulo() {
        return $this->titulo;
    }
    
    /**
     * Devuelve el autor del libro
     * @access public
     * @return string
     */
    public function getAutor() {
        return $this->autor;
    }

    /**
     * Devuelve el precio del libro
     * @access public
     * @return float
     */
    
    public function getPrecio() {
        return $this->precio;
    }
    
    /**
     * Asigna el título del libro
     * @access public 
     * @param string $titulo Nuevo título
     */

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    /**
     * Asigna el autor del libro
     * @access public
     * @param string $autor Nuevo autor
     */
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    
    /**
     * Asigna el precio del libro
     * @access public
     * @param float $precio Nuevo precio
     */
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    
    /**
     * Aplica un descuento al precio del libro
     * @access public
     * @param float $descuento Cantidad  del descuento
     * @throws Exception Si el precio descontado es negativo devuelve error 
     * @return float Precio con descuento 
     */

    public function descuentoPrecio($descuento) {
        $precioDescontado = $this->precio - $descuento;
        if ($precioDescontado < 0) {
            throw new Exception("El precio descontado no puede ser negativo.");
        }
        return $precioDescontado; 
    }

    /**
     * Método obsoleto
     * @access public
     * @deprecated Este método está obsoleto 
     */
    public function metodoObsoleto() {
        echo "Método obsoleto";
    }

    /**
     * Método interno de la clase
     * 
     * @access public
     */
    public function metodoInterno() {
        echo "Método interno";
    }
}

// Creamos dos libros
$libro1 = new Libro("El libro negro de las horas", "Eva García Sáenz", 25.95);
$libro2 = new Libro("Libro 2", "Autor 2", 25.95);

// Mostramos info de los libros
echo "El libro: " . $libro1->getTitulo() . " del autor: " . $libro1->getAutor() . " y precio: " . $libro1->getPrecio() . " euros." . "<br>"; 
echo "El libro: " . $libro2->getTitulo() . " del autor: " . $libro2->getAutor() . " y precio: " . $libro2->getPrecio() . " euros." . "<br>";
echo "El libro1 con descuento es: " . $libro1->descuentoPrecio(10) ."<br>";
echo "El libro2 con descuento es: " . $libro1->descuentoPrecio(30)."<br>";
?>