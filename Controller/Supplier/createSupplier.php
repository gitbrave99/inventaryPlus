<?php

    if (isset($_POST['supplier'])) {
        require_once '../../Model/classes/suppliers.php';
        require_once '../../Model/ModelSupplier.php';

        $objSuppliers = new Suppliers($_POST['supplier'], $_POST['direction'], $_POST['phone'], $_POST['country'], $_POST['email'], $_POST['url'], $_POST['status']);

        (new Supplier())->Add($objSuppliers);
    }

    header('Location: /inventaryPlus/View/proveedores.php');
    // echo 'dfsfs';

?>