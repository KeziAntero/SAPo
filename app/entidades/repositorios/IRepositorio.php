<?php

namespace entidades\respositorios;

use entidades\Persistente;

interface IRepositorio {


    public function inserir(Persistente $persistente);

    

}


?>