<?php // Estructura Grafo tipo Árbol

class Nodo 
{
    public $Valor;
    public $Izquierda;
    public $Derecha;

    public function __construct($Valor)
    {
        $this->Valor = $Valor;
        $this->Izquierda = null;
        $this->Derecha = null;
    }
}

class ArbolBinario
{
    private $Raiz;

    public function __construct()
    {
        $this->Raiz = null;
    }

    public function Insertar($Valor)
    {
        $this->Raiz = $this->insertarRec($this->Raiz, $Valor);
    }

    private function insertarRec($nodo, $Valor)
    {
        if ($nodo == null) {
            return new Nodo($Valor);
        }

        if ($Valor < $nodo->Valor) {
            $nodo->Izquierda = $this->insertarRec($nodo->Izquierda, $Valor);
        } else {
            $nodo->Derecha = $this->insertarRec($nodo->Derecha, $Valor);
        }

        return $nodo;
    }

    public function InOrden()
    {
        $this->InOrdenRec($this->Raiz);
    }
    
    private function InOrdenRec($Nodo)
    {
        if ($Nodo !== null) {
            $this->InOrdenRec($Nodo->Izquierda);
            echo $Nodo->Valor . " ";
            $this->InOrdenRec($Nodo->Derecha);
        }
    }
    
    public function PreOrden()
    {
        $this->PreOrdenRec($this->Raiz);
        echo PHP_EOL;
    }
    
    private function PreOrdenRec($Nodo)
    {
        if ($Nodo !== null) {
            echo $Nodo->Valor . "  ";
            $this->PreOrdenRec($Nodo->Izquierda);
            $this->PreOrdenRec($Nodo->Derecha);
        }
    }
    
    public function PostOrden()
    {
        $this->PostOrdenRec($this->Raiz);
        echo PHP_EOL;
    }
    
    private function PostOrdenRec($Nodo)
    {
        if ($Nodo !== null) {
            $this->PostOrdenRec($Nodo->Izquierda);
            $this->PostOrdenRec($Nodo->Derecha);
            echo $Nodo->Valor . "  ";
        }
    }
}

$Arbol = new ArbolBinario();
$Arbol->Insertar(40);
$Arbol->Insertar(10);
$Arbol->Insertar(20);
$Arbol->Insertar(30);
$Arbol->Insertar(39);
$Arbol->Insertar(50);
$Arbol->Insertar(60);
$Arbol->Insertar(80);

echo "\nRecorrido InOrden:\n";
$Arbol->InOrden();
echo "\n\nRecorrido PreOrden:\n";
$Arbol->PreOrden();
echo "\nRecorrido PostOrden:\n";
$Arbol->PostOrden();
?>