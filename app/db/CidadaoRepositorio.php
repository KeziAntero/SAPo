<?php

namespace db;

class CidadoRepositorio extends DBMySQL {


    public function inserir(Persistente $persistente){
        $sql = "INSERT INTO minhaTabela (nome) VALUES (:nome)";
        return $this->update($sql, $persistente->objectToArray());
    }

}


?>