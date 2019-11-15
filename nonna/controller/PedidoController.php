<?php
require_once 'model/Pedido.php';

class PedidoController
{

    public function all(){

        $obj = new Pedido();
        $pedidos = $obj->all();
        include "view/Pedido_all.php";

    }

    public function tempoEspera(){

        $obj = new Pedido();
        $pedidos = $obj->tempoEspera();
        include "view/Pedido_tempo_espera.php";

    }
}