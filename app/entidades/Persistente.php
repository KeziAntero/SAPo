<?php 

namespace entidades;


abstract class Persistente {

    /**
     * @var int
     */
    protected $identificador;

    public function __construct(int $identificador){
        $this->identificador = $identificador;
    }

    public function getIdentificador() : int {
        return $this->identificador;
    }

    abstract static function arrayToOBject(array $valores);

    abstract function objectToArray() : array;
}


?>