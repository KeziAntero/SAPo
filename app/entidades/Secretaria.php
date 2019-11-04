<?php 

namespace entidades;

class Secretaria extends \Persistente {

    /**
     * @var string
     */
    private $nome;

    /** 
     * @var string
     */
    private $sigla;


    public static function arrayToObject(array $valores) : Secretaria {
        return new self($valores["identificador"], $valores["nome"], $valores["sigla"]);
    }

    public __construct(int $identificador, string $nome, string $sigla){
        parent::__construct($identificador);

        $this->nome = $nome;
        $this->sigla = $sigla;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getSigla() : string {
        return $this->sigla;
    }

    public function objectToArray(){
        return  [
            'identificador' => $identificador,
            'nome' => $nome,
            'sigla' => $sigla
        ];
    }
}

?>