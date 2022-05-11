// Las funciones se llaman en: View/Data/Proveedores/proveedores_data.php

function editar_proveedor(id_editar) {

    document.getElementById('proveedores-editar').value = document.getElementById(id_editar).value;
   
    // El array passedArray es el que pasamos con la funcion encode en proveedores.php, linea 149

    for (var i = 0; i < passedArray.length; i++) {
        // alert(passedArray[i][1]);
      if (passedArray[i][0] == document.getElementById(id_editar).value) {
        //   alert(passedArray[i][0]);
        document.getElementById('id-proveedores-edit-nombre').value = passedArray[i][1];
        document.getElementById('id-proveedores-edit-direccion').value = passedArray[i][2];
        document.getElementById('id-proveedores-edit-telefono').value = passedArray[i][3];
        document.getElementById('id-proveedores-edit-ciudad').value = passedArray[i][4];
        document.getElementById('id-proveedores-edit-email').value = passedArray[i][5];
        document.getElementById('id-proveedores-edit-url').value = passedArray[i][6];
        // document.getElementById('id-proveedores-edit-status').value = passedArray[i][7];
        // 1 es para activo
        if (passedArray[i][7] == 1) {
            document.getElementById('id-proveedores-edit-status').innerHTML = "<option value=1 selected>Active</option><option value=0>Block</option>";
        } else {
            document.getElementById('id-proveedores-edit-status').innerHTML = "<option value=1>Active</option><option value=0 selected>Block</option>";
        }
  
        break;
      }
    }
  }

  function eliminar_proveedor(id_eliminar) {
    document.getElementById('proveedores-borrar').value = document.getElementById(id_eliminar).value;
    // alert(document.getElementById('proveedores-borrar').value);
  }