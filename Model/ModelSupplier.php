<?php

require_once __DIR__ . '/classes/suppliers.php';

class Supplier
{

    private $stmt;
    private $db;

    public function Read()
    {
        try {
            $this->stmt = $this->db->prepare("SELECT IDProveedor, nombre, direccion, telefono, ciudad, correoElectronico, url, estado FROM Proveedor;");
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function Add(Suppliers $supplier)
    {
        try {
            $this->stmt = $this->db->prepare("SELECT AgregarProveedor(:nombre, :direccion, :telefono, :ciudad, :correoElectronico, :url, :estado);");
            $this->stmt->bindParam(":nombre", $supplier->getProveedor(), PDO::PARAM_STR);
            $this->stmt->bindParam(":direccion", $supplier->getDireccion(), PDO::PARAM_STR);
            $this->stmt->bindParam(":telefono", $supplier->getTelefono(), PDO::PARAM_STR);
            $this->stmt->bindParam(":ciudad", $supplier->getCiudad(), PDO::PARAM_STR);
            $this->stmt->bindParam(":correoElectronico", $supplier->getEmail(), PDO::PARAM_STR);
            $this->stmt->bindParam(":url", $supplier->getUrl(), PDO::PARAM_STR);
            $this->stmt->bindParam(":estado", $supplier->getEstado(), PDO::PARAM_INT);
            $this->stmt->execute();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function Delete($supplierID)
    {
        try {
            $this->stmt = $this->db->prepare("DELETE FROM peliculas WHERE nombre = :nombre;");
            $this->stmt->bindParam(":nombre", $pelicula, PDO::PARAM_STR);
            $this->stmt->execute();
            $this->stmt = null;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function Edit(Suppliers $supplier)
    {
        try {
            
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function Cerrar()
    {
        $this->db = null;
    }

    public function __construct()
    {
        require_once('conexion.php');
        $this->db = Conexion::Conexion();
    }
}
