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
            return true;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            return false;
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
            return true;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            return false;
            die();
        }
        $this->stmt = null;
    }

    // public function Add($nombre, $direccion, $telefono, $ciudad, $correoElectronico, $url, $estado)
    // {
    //     try {
    //         $this->stmt = $this->db->prepare("SELECT AgregarProveedor(:nombre, :direccion, :telefono, :ciudad, :correoElectronico, :url, :estado);");
    //         $this->stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
    //         $this->stmt->bindParam(":direccion", $direccion, PDO::PARAM_STR);
    //         $this->stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);
    //         $this->stmt->bindParam(":ciudad", $ciudad, PDO::PARAM_STR);
    //         $this->stmt->bindParam(":correoElectronico", $correoElectronico, PDO::PARAM_STR);
    //         $this->stmt->bindParam(":url", $url, PDO::PARAM_STR);
    //         $this->stmt->bindParam(":estado", $estado, PDO::PARAM_INT);
    //         $this->stmt->execute();
    //         return true;
    //     } catch (PDOException $e) {
    //         echo  $e->getMessage();
    //         return false;
    //         die();
    //     }
    //     $this->stmt = null;
    // }

    public function Delete($supplierID)
    {
        try {
            $this->stmt = $this->db->prepare("DELETE FROM Proveedor WHERE IDProveedor = :IDProveedor;");
            $this->stmt->bindParam(":IDProveedor", $supplierID, PDO::PARAM_INT);
            $this->stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            return false;
            die();
        }
        $this->stmt = null;
    }

    public function Edit(Suppliers $supplier, $supplierID)
    {
        try {
            $this->stmt = $this->db->prepare("UPDATE Proveedor
            SET nombre = :nombre,
                direccion = :direccion,
                telefono = :telefono,
                ciudad = :ciudad,
                correoElectronico = :correoElectronico,
                url = :url,
                estado = :estado
            WHERE IDProveedor = :IDProveedor;");
            $this->stmt->bindParam(":nombre", $supplier->getProveedor(), PDO::PARAM_STR);
            $this->stmt->bindParam(":direccion", $supplier->getDireccion(), PDO::PARAM_STR);
            $this->stmt->bindParam(":telefono", $supplier->getTelefono(), PDO::PARAM_STR);
            $this->stmt->bindParam(":ciudad", $supplier->getCiudad(), PDO::PARAM_STR);
            $this->stmt->bindParam(":correoElectronico", $supplier->getEmail(), PDO::PARAM_STR);
            $this->stmt->bindParam(":url", $supplier->getUrl(), PDO::PARAM_STR);
            $this->stmt->bindParam(":estado", $supplier->getEstado(), PDO::PARAM_INT);
            $this->stmt->bindParam(":IDProveedor", $supplierID, PDO::PARAM_INT);
            $this->stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            return false;
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
