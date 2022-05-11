<?php

$contador = 0;

foreach ($datosSupplier as $key => $value) {
    $contador++;

    echo '<tr>';
    echo '<th scope="row">';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" name="checkAll" value="option1">';
    echo '</div>';
    echo '</th>';
    echo '<td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>';
    echo '<td class="proveedor_name">'. $value['nombre'].'</td>';
    echo '<td class="email">'. $value['direccion'].'</td>';
    echo '<td class="phone">'. $value['telefono'].'</td>';
    echo '<td class="phone">'. $value['ciudad'].'</td>';
    echo '<td class="phone">'. $value['correoElectronico'].'</td>';
    echo '<td class="Url"><a href="'. $value['url'].'">'. $value['url'].'</a></td>';

    if ($value['estado'] == 1) {
        echo '<td class="Status"><span class="badge badge-soft-success text-uppercase">Activo</span></td>';
    } else {
        echo '<td class="Status"><span class="badge badge-soft-success text-uppercase">Bloqueado</span></td>';
    }
    
    echo '<td>';
    echo '<div class="d-flex gap-2">';
    echo '<div class="edit">';
    echo '<button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" onClick="editar_proveedor(this.id)" id="'. $value['IDProveedor']. '_Edit'. '" data-bs-target="#editModal" value="'. $value['IDProveedor'] .'">'. $lang["t-Edit"]. '</button>';
    echo '</div>';
    echo '<div class="remove">';
    echo '<button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" onClick="eliminar_proveedor(this.id)" id="'. $value['IDProveedor']. '_Delete'. '" data-bs-target="#deleteRecordModal" value="'. $value['IDProveedor'] .'">'. $lang["t-Remove"]. '</button>';
    echo '</div>';
    echo '</div>';
    echo '</td>';
    echo '</tr>';                         
                        
}

// $value['IDProveedor'].
?>
