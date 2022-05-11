<?php

use PHPUnit\Framework\TestCase;

class OperationsTest extends TestCase {
    private $SupplierTest;

    public function setUp():void{
        $this->SupplierTest = new Supplier();
    }

    public function testAddSupplier() {
        $nombre = 'Name Test';
        $direccion = 'Direction Test';
        $telefono = '+555 Test';
        $ciudad = 'City Test';
        $correoElectronico = 'test@info.com';
        $url = 'test.com';
        $estado = 1;

        // $objSuppliers = new Suppliers($nombre, $direccion, $telefono, $ciudad, $correoElectronico, $url, $estado);

        $this->assertEquals(true, $this->SupplierTest->Add($nombre, $direccion, $telefono, $ciudad, $correoElectronico, $url, $estado));
        // $this->assertEquals(true, $this->SupplierTest->Add($objSuppliers));
        
        // '.\Model\PHP Unit Testing\vendor\bin\phpunit' .\Model\tests\OperationsTest.php
    }
}

?>