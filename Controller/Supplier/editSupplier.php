<?php

    if (isset($_POST['proveedores-editar-btn'])) { // Este nos trae el ID a editar

        require_once '../../Model/classes/suppliers.php';
        require_once '../../Model/ModelSupplier.php';
        // var_dump($_POST);

        $objSuppliers = new Suppliers($_POST['supplier'], $_POST['direction'], $_POST['phone'], $_POST['country'], $_POST['email'], $_POST['url'], $_POST['status-field']);

        (new Supplier())->Edit($objSuppliers, $_POST['proveedores-editar-btn']);
        // $obj = new Supplier();
        // $obj->Edit();
        // $obj->Cerrar();
        // die();
    }

    header('Location: /inventaryPlus/View/proveedores.php');

?>