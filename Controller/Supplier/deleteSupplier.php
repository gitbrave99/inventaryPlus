<?php

    if (isset($_POST['proveedores-borrar-btn'])) { // Este nos trae el ID a eliminar

        // require_once '../../Model/classes/suppliers.php';
        require_once '../../Model/ModelSupplier.php';

        (new Supplier())->Delete($_POST['proveedores-borrar-btn']);
    }

    header('Location: /inventaryPlus/View/proveedores.php');

?>