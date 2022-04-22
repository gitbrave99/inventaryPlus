<?php

require_once __DIR__ . '../../../Model/ModelSupplier.php';

$objeto = new Supplier();
$datosSupplier = $objeto->Read();

require_once __DIR__ . '../../../View/data/Proveedores/proveedores_data.php';

?>