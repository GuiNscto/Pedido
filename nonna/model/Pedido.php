<?php

class Pedido
{

    private $id;
    private $celular;
    private $cliente;
    private $endereco;

    private $con;

    /**
     * Pedido constructor.
     * @param $id
     * @param $celular
     * @param $cliente
     * @param $endereco
     */
    public function __construct($id=NULL, $celular=NULL, $cliente=NULL, $endereco=NULL)
    {
        $this->id = $id;
        $this->celular = $celular;
        $this->cliente = $cliente;
        $this->endereco = $endereco;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql = $this->con->prepare("SELECT * FROM ver_pedido");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;

    }

    public function tempoEspera(){

        $sql = $this->con->prepare("SELECT * FROM ver_tempo_espera");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }



}