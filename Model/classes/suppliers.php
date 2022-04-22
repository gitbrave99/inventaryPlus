<?php

class Suppliers
{

    private $proveedor;
    private $direccion;
    private $telefono;
    private $ciudad;
    private $email;
    private $url;
    private $estado;

    function __construct($proveedor, $direccion, $telefono, $ciudad, $email, $url, $estado)
    {
        $this->proveedor = $proveedor;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;
        $this->email = $email;
        $this->url = $url;
        $this->estado = $estado;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}

?>