var checkAllDTV = document.getElementById("checkAlldtventa");
if (checkAllDTV) {
    checkAllDTV.onclick = function () {
        var checkboxes = document.querySelectorAll(
            '.form-check-all-dtventa input[type="checkbox"]'
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
var optionsTbDTV = {
    valueNames: [
        "dtvid",
        "dtvproductname",
        "dtvcantidad",
        "dtvpreciounitario",
        "dtvmonto",
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
var detalleventaTbList = new List("detalleVentaTableList", optionsTbDTV).on("updated", function (list) {
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

isCountdtVenta = new DOMParser().parseFromString(
    detalleventaTbList.items.slice(-1)[0]._values.dtvid,
    "text/html"
);

var isValuedtventa = isCountdtVenta.body.firstElementChild.innerHTML;
var DTVidField = document.getElementById("dtvid-field"),
    DTVproductNameField = document.getElementById("dtvproductname-field"),
    DTVdtccantidadField = document.getElementById("dtvcantidad-field"),
    DTVprecioUnitarioField = document.getElementById("dtvpreciounitario-field"),
    DTVmontoField = document.getElementById("dtvmonto-field"),
    DTVstatusField = document.getElementById("dtvstatus-field"),
    addBtndtventa = document.getElementById("add-btn"),
    editBtndtventa = document.getElementById("edit-btn"),
    removeBtnsdtventa = document.getElementsByClassName("remove-item-btn"),
    editBtnsdtventa = document.getElementsByClassName("edit-item-btn");
refreshCallbacksdtventa();
filterContactdtventa("All");

function filterContactdtventa(isValuedtventa) {
    var values_status = isValuedtventa;
    detalleventaTbList.filter(function (data) {
        var statusFilter = false;
        matchData = new DOMParser().parseFromString(
            data.values().status,
            "text/html"
        );
        var statusdtventa = matchData.body.firstElementChild.innerHTML;
        if (statusdtventa == "All" || values_status == "All") {
            statusFilter = true;
        } else {
            statusFilter = statusdtventa == values_status;
        }
        return statusFilter;
    });

    detalleventaTbList.update();
}

 

document.getElementById("showModalEditAdddetalleventa")
    .addEventListener("show.bs.modal", function (e) {
        if (e.relatedTarget.classList.contains("edit-item-btn")) {
            // CAMBIAR TITULO PARA EDITAR 
            document.getElementById("titleModalEditAdd").innerHTML = "Editar Cateroria";
            document.getElementById("showModalEditAdddetalleventa")
                .querySelector(".modal-footer").style.display = "block";
            document.getElementById("add-btn").style.display = "none";
            document.getElementById("edit-btn").style.display = "block";
        } else if (e.relatedTarget.classList.contains("add-btn")) {
            // CAMBIAR TITULO PARA AGREGAR 
            document.getElementById("titleModalEditAdd").innerHTML = "Agregar categoria";
            document.getElementById("showModalEditAdddetalleventa")
                .querySelector(".modal-footer").style.display = "block";
            document.getElementById("edit-btn").style.display = "none";
            document.getElementById("add-btn").style.display = "block";
        } else {
            document.getElementById("titleModalEditAdd").innerHTML = "List Customer";
            document.getElementById("showModalEditAdddetalleventa")
                .querySelector(".modal-footer").style.display = "none";

        }
    });
ischeckboxcheckdtventa();

document.getElementById("showModalEditAdddetalleventa")
    .addEventListener("hidden.bs.modal", function () {
        clearFieldsdtventa();
    });

document.querySelector("#detalleVentaTableList").addEventListener("click", function () {
    refreshCallbacksdtventa();
    ischeckboxcheckdtventa();
});

var table = document.getElementById("detalleVentaTable");
// save all tr
var tr = table.getElementsByTagName("tr");
var trlist = table.querySelectorAll(".list tr");

var count = Number(isValuedtventa.replace(/[^0-9]/g, "")) + 1;
addBtndtventa.addEventListener("click", function (e) {
    
    if (
        DTVproductNameField.value !== "" &&
        DTVdtccantidadField.value !== ""
    ) {
        detalleventaTbList.add({
            id: '<a href="javascript:void(0);" class="fw-medium link-primary">#VZ' +
                count +
                "</a>",
            dtvproductname: DTVproductNameField.value,
            dtvcantidad: DTVdtccantidadField.value,
            dtvpreciounitario: DTVprecioUnitarioField.value,
            dtvmonto: DTVmontoField.value,
            status: isStatusdtventa(DTVstatusField.value),
        });

        document.getElementById("close-modal").click();
        clearFieldsdtventa();
        refreshCallbacksdtventa();
        filterContactdtventa("All");
        count++;
    }
});

editBtndtventa.addEventListener("click", function (e) {
    document.getElementById("titleModalEditAdd").innerHTML = "Edit Customer";
    var editValues = detalleventaTbList.get({
        id: DTVidField.value,
    });
    editValues.forEach(function (x) {
        isid = new DOMParser().parseFromString(x._values.dtvid, "text/html");
        var selectedid = isid.body.firstElementChild.innerHTML;
        if (selectedid == itemId) {
            x.values({
                id: '<a href="javascript:void(0);" class="fw-medium link-primary">' +
                    DTVidField.value +
                    "</a>",
                dtvproductname: DTVproductNameField.value,
                dtvcantidad: DTVdtccantidadField.value,
                dtvpreciounitario: DTVprecioUnitarioField.value,
                dtvmonto: DTVmontoField.value,
                status: isStatusdtventa(DTVstatusField.value),
            });
        }
    });
    document.getElementById("close-modal").click();
    clearFieldsdtventa();
});

var statusValDTC = new Choices(DTVstatusField);

function isStatusdtventa(val) {
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

function ischeckboxcheckdtventa() {
    document.getElementsByName("checkAlldtventa").forEach(function (x) {
        x.addEventListener("click", function (e) {
            if (e.target.checked) {
                e.target.closest("tr").classList.add("table-active");
            } else {
                e.target.closest("tr").classList.remove("table-active");
            }
        });
    });
}

function refreshCallbacksdtventa() {
    removeBtnsdtventa.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            itemId = e.target.closest("tr").children[1].innerText;
            var itemValues = detalleventaTbList.get({
                id: itemId,
            });

            itemValues.forEach(function (x) {
                deleteid = new DOMParser().parseFromString(x._values.dtvid, "text/html");

                var isElem = deleteid.body.firstElementChild;
                var isdeleteid = deleteid.body.firstElementChild.innerHTML;

                if (isdeleteid == itemId) {
                    document.getElementById("delete-record")
                        .addEventListener("click", function () {
                            detalleventaTbList.remove("id", isElem.outerHTML);
                            document.getElementById("deleteRecordModal").click();
                        });
                }
            });
        });
    });

    editBtnsdtventa.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            itemId = e.target.closest("tr").children[1].innerText;
            var itemValues = detalleventaTbList.get({
                dtvid: itemId,
            });

            itemValues.forEach(function (x) {
                isid = new DOMParser().parseFromString(x._values.dtvid, "text/html");
                var selectedid = isid.body.firstElementChild.innerHTML;
                if (selectedid == itemId) {
                    DTVidField.value = selectedid;
                    DTVproductNameField.value = x._values.dtproductname;
                    DTVdtccantidadField.value = x._values.dtccantidad;
                    DTVprecioUnitarioField.value = x._values.dtcpreciounitario;
                    DTVmontoField.value = x._values.dtcmonto;

                    if (statusValDTC) statusValDTC.destroy();
                    statusValDTC = new Choices(DTVstatusField);
                    val = new DOMParser().parseFromString(x._values.status, "text/html");
                    var statusSelec = val.body.firstElementChild.innerHTML;
                    statusValDTC.setChoiceByValue(statusSelec);
                }
            });
        });
    });
}

function clearFieldsdtventa() {
    DTVproductNameField.value = "";
    DTVdtccantidadField.value = "";
    DTVprecioUnitarioField.value = "";
    DTVmontoField.value = "";
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
var attroptionsTbDTV = {
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