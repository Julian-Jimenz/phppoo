<?php 

class Cuenta{

    private $nombre;
    private $nrocuenta;
    private $tipoInteres;
    private $saldo;


    public function __construct( $nombre,$nrocuenta,$tipoInteres,$saldo)
    {
        $this->nombre= $nombre;
        $this->nombre= $nrocuenta;
        $this->nombre= $tipoInteres;
        $this->nombre= $saldo;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre ;
    }
}