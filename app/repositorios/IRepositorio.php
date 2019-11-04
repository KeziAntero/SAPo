<?php

namespace respositorios;

use entidades\Persistente;

interface IRepositorio {


    public function inserir(Persistente $persistente);
    public function atualizar(Persistente $persistente);
    public function excluir(Persistente $persistente);
    public function selecionar(Persistente $persistente);
    public function selecionarTodos();

}


?>