var checkAll = document.getElementById("checkAll");
if (checkAll) {
    checkAll.onclick = function () {
        var checkboxes = document.querySelectorAll(
            '.form-check-all input[type="checkbox"]'
        );
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = this.checked;
            if (checkboxes[i].checked) {
                checkboxes[i].closest("tr").classList.add("table-active");
            } else {
                checkboxes[i].closest("tr").classList.remove("table-active");
            }
        }
    };
}

var perPage = 8;

//Table
var options = {
    valueNames: [
        "id",
        "sucursal_name",
        "imagen",
        "direccion",
        "telefono",
        "ciudad",
        "email",
        "status",
    ],
    page: perPage,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2
        })
    ]
};
// Init list
var sucursalTbList = new List("sucursalesTableList", options).on("updated", function (list) {
    list.matchingItems.length == 0 ?
        (document.getElementsByClassName("noresult")[0].style.display = "block") :
        (document.getElementsByClassName("noresult")[0].style.display = "none");
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;
    // make the Prev and Nex buttons disabled on first and last pages accordingly
    (document.querySelector(".pagination-prev.disabled")) ? document.querySelector(".pagination-prev.disabled").classList.remove("disabled"): '';
    (document.querySelector(".pagination-next.disabled")) ? document.querySelector(".pagination-next.disabled").classList.remove("disabled"): '';
    if (isFirst) {
        document.querySelector(".pagination-prev").classList.add("disabled");
    }
    if (isLast) {
        document.querySelector(".pagination-next").classList.add("disabled");
    }
    if (list.matchingItems.length <= perPage) {
        document.querySelector(".pagination-wrap").style.display = "none";
    } else {
        document.querySelector(".pagination-wrap").style.display = "flex";
    }

    if (list.matchingItems.length == perPage) {
        document.querySelector(".pagination.listjs-pagination").firstElementChild.children[0].click()
    }

    if (list.matchingItems.length > 0) {
        document.getElementsByClassName("noresult")[0].style.display = "none";
    } else {
        document.getElementsByClassName("noresult")[0].style.display = "block";
    }
});

isCount = new DOMParser().parseFromString(
    sucursalTbList.items.slice(-1)[0]._values.id,
    "text/html"
);

var isValue = isCount.body.firstElementChild.innerHTML;
var previewEditImgSucursal = document.getElementById("previewEditImgSucursal");

var idField = document.getElementById("id-field"),
    sucursalNameField = document.getElementById("sucursalname-field"),
    imagenField = document.getElementById("imagen-field"),
    direccionField = document.getElementById("direccion-field"),
    telefonoField = document.getElementById("telefono-field"),
    ciudadField = document.getElementById("ciudad-field"),
    emailField = document.getElementById("email-field"),
    statusField = document.getElementById("status-field"),
    addBtn = document.getElementById("add-btn"),
    editBtn = document.getElementById("edit-btn"),
    removeBtns = document.getElementsByClassName("remove-item-btn"),
    editBtns = document.getElementsByClassName("edit-item-btn");
refreshCallbacks();
filterContact("All");

function filterContact(isValue) {
    var values_status = isValue;
    sucursalTbList.filter(function (data) {
        var statusFilter = false;
        matchData = new DOMParser().parseFromString(
            data.values().status,
            "text/html"
        );
        var status = matchData.body.firstElementChild.innerHTML;
        if (status == "All" || values_status == "All") {
            statusFilter = true;
        } else {
            statusFilter = status == values_status;
        }
        return statusFilter;
    });

    sucursalTbList.update();
}

function updateList() {
    var values_status = document.querySelector(
        "input[name=status]:checked"
    ).value;

    data = userList.filter(function (item) {
        var statusFilter = false;

        if (values_status == "All") {
            statusFilter = true;
        } else {
            statusFilter = item.values().sts == values_status;
            // console.log(statusFilter, "statusFilter");
        }
        return statusFilter;
    });

    userList.update();
}

document.getElementById("showModalEditAddSucursal")
    .addEventListener("show.bs.modal", function (e) {
        if (e.relatedTarget.classList.contains("edit-item-btn")) {
            document.getElementById("titleModalEditAdd").innerHTML = "Editar Cateroria";

            //MOSTRAR PREVIEW IMAGEN MODAL 
            document.getElementById("boxPreviewImage").style.display = "block"
            previewEditImgSucursal.style.display="block";

            document.getElementById("showModalEditAddSucursal")
                .querySelector(".modal-footer").style.display = "block";
            document.getElementById("add-btn").style.display = "none";
            document.getElementById("edit-btn").style.display = "block";

        } else if (e.relatedTarget.classList.contains("add-btn")) {
            document.getElementById("titleModalEditAdd").innerHTML = "Agregar categoria";
            // OCULTAR PREVIEW IMAGEN MODAL 
            document.getElementById("boxPreviewImage").style.display = "none"
            document
                .getElementById("showModalEditAddSucursal")
                .querySelector(".modal-footer").style.display = "block";
            document.getElementById("edit-btn").style.display = "none";
            document.getElementById("add-btn").style.display = "block";
        } else {
            document.getElementById("titleModalEditAdd").innerHTML = "List Customer";
            document
                .getElementById("showModalEditAddSucursal")
                .querySelector(".modal-footer").style.display = "none";

        }
    });
ischeckboxcheck();

document
    .getElementById("showModalEditAddSucursal")
    .addEventListener("hidden.bs.modal", function () {
        clearFields();
    });

document.querySelector("#sucursalesTableList").addEventListener("click", function () {
    refreshCallbacks();
    ischeckboxcheck();
});

var table = document.getElementById("sucursalTable");
// save all tr
var tr = table.getElementsByTagName("tr");
var trlist = table.querySelectorAll(".list tr");

var count = Number(isValue.replace(/[^0-9]/g, "")) + 1;
addBtn.addEventListener("click", function (e) {
    if (
        sucursalNameField.value !== ""
    ) {
        sucursalTbList.add({
            id: '<a href="javascript:void(0);" class="fw-medium link-primary">#VZ' +
                count +
                "</a>",
            sucursal_name: sucursalNameField.value,
            imagen: imagenField.value,
            direccion: direccionField.value,
            telefono: telefonoField.value,
            ciudad: ciudadField.value,
            email: emailField.value,
            status: isStatus(statusField.value),
        });

        document.getElementById("close-modal").click();
        clearFields();
        refreshCallbacks();
        filterContact("All");
        count++;
    }
});

editBtn.addEventListener("click", function (e) {
    document.getElementById("titleModalEditAdd").innerHTML = "Edit Customer";
    var editValues = sucursalTbList.get({
        id: idField.value,
    });
    editValues.forEach(function (x) {
        isid = new DOMParser().parseFromString(x._values.id, "text/html");
        var selectedid = isid.body.firstElementChild.innerHTML;
        if (selectedid == itemId) {
            x.values({
                id: '<a href="javascript:void(0);" class="fw-medium link-primary">' +
                    idField.value +
                    "</a>",
                sucursal_name: sucursalNameField.value,
                imagen: imagenField.value,
                direccion: direccionField.value,
                telefono: telefonoField.value,
                ciudad: ciudadField.value,
                email: emailField.value,
                status: isStatus(statusField.value),
            });
        }
    });
    document.getElementById("close-modal").click();
    clearFields();
});

var statusVal = new Choices(statusField);

function isStatus(val) {
    switch (val) {
        case "Active":
            return (
                '<span class="badge badge-soft-success text-uppercase">' +
                val +
                "</span>"
            );
        case "Block":
            return (
                '<span class="badge badge-soft-danger text-uppercase">' +
                val +
                "</span>"
            );
    }
}

function ischeckboxcheck() {
    document.getElementsByName("checkAll").forEach(function (x) {
        x.addEventListener("click", function (e) {
            if (e.target.checked) {
                e.target.closest("tr").classList.add("table-active");
            } else {
                e.target.closest("tr").classList.remove("table-active");
            }
        });
    });
}

function refreshCallbacks() {
    removeBtns.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            itemId = e.target.closest("tr").children[1].innerText;
            var itemValues = sucursalTbList.get({
                id: itemId,
            });

            itemValues.forEach(function (x) {
                deleteid = new DOMParser().parseFromString(x._values.id, "text/html");

                var isElem = deleteid.body.firstElementChild;
                var isdeleteid = deleteid.body.firstElementChild.innerHTML;

                if (isdeleteid == itemId) {
                    document
                        .getElementById("delete-record")
                        .addEventListener("click", function () {
                            sucursalTbList.remove("id", isElem.outerHTML);
                            document.getElementById("deleteRecordModal").click();
                        });
                }
            });
        });
    });

    editBtns.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            var rutaImg=e.target.closest("tr").childNodes[7].childNodes[1].src;
            console.log("valor idfiel: ", e.target.closest("tr").childNodes[7].childNodes[1].src);
            itemId = e.target.closest("tr").children[1].innerText;
            var itemValues = sucursalTbList.get({
                id: itemId,
            });

            itemValues.forEach(function (x) {
                isid = new DOMParser().parseFromString(x._values.id, "text/html");
                var selectedid = isid.body.firstElementChild.innerHTML;

                if (selectedid == itemId) {
                    idField.value = selectedid;
                    sucursalNameField.value = x._values.sucursal_name;
                    direccionField.value = x._values.direccion;
                    telefonoField.value = x._values.telefono;
                    ciudadField.value = x._values.ciudad;
                    emailField.value = x._values.email;

                    previewEditImgSucursal.src=rutaImg;

                    // console.log("edit: ", x._values);


                    if (statusVal) statusVal.destroy();
                    statusVal = new Choices(statusField);
                    val = new DOMParser().parseFromString(x._values.status, "text/html");
                    var statusSelec = val.body.firstElementChild.innerHTML;
                    statusVal.setChoiceByValue(statusSelec);
                }
            });
        });
    });
}

function clearFields() {
    sucursalNameField.value = "";
    direccionField.value = "";
    telefonoField.value = "";
    ciudadField.value = "";
    emailField.value = "";
    imagenField.src = "";

}

document.querySelector(".pagination-next").addEventListener("click", function () {
    (document.querySelector(".pagination.listjs-pagination")) ? (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
    document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click(): '': '';
});
document.querySelector(".pagination-prev").addEventListener("click", function () {
    (document.querySelector(".pagination.listjs-pagination")) ? (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
    document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click(): '': '';
});

// data- attribute example
var attroptions = {
    valueNames: [
        'name',
        'born',
        {
            data: ['id']
        },
        {
            attr: 'src',
            name: 'image'
        },
        {
            attr: 'href',
            name: 'link'
        },
        {
            attr: 'data-timestamp',
            name: 'timestamp'
        }
    ]
};