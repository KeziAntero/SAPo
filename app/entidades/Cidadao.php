<?php 

namespace entidades;

use Agendamento;
use Persistente;


class Cidadao extends Persistente {

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $cpf;

    public function __construct(string $nome, string $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getCPF() : string {
        return $this->cpf;
    }

}

?>