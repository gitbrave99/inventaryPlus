var checkAllDTC = document.getElementById("checkAlldtcompra");
if (checkAllDTC) {
    checkAllDTC.onclick = function () {
        var checkboxes = document.querySelectorAll(
            '.form-check-all-dtcompra input[type="checkbox"]'
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
var optionsTbDTC = {
    valueNames: [
        "dtcid",
        "dtproductname",
        "dtccantidad",
        "dtcpreciounitario",
        "dtcmonto",
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
var detallecompraTbList = new List("detalleCompraTableList", optionsTbDTC).on("updated", function (list) {
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

isCountdtCompra = new DOMParser().parseFromString(
    detallecompraTbList.items.slice(-1)[0]._values.dtcid,
    "text/html"
);

var isValuedtcompra = isCountdtCompra.body.firstElementChild.innerHTML;
var DTCidField = document.getElementById("dtcid-field"),
    DTCproductNameField = document.getElementById("dtproductname-field"),
    DTCdtccantidadField = document.getElementById("dtccantidad-field"),
    DTCprecioUnitarioField = document.getElementById("dtcpreciounitario-field"),
    DTCmontoField = document.getElementById("dtcmonto-field"),
    DTCstatusField = document.getElementById("dtcstatus-field"),
    addBtndtcompra = document.getElementById("add-btn"),
    editBtndtcompra = document.getElementById("edit-btn"),
    removeBtnsdtcompra = document.getElementsByClassName("remove-item-btn"),
    editBtnsdtcompra = document.getElementsByClassName("edit-item-btn");
refreshCallbacksdtcompra();
filterContactdtcompra("All");

function filterContactdtcompra(isValuedtcompra) {
    var values_status = isValuedtcompra;
    detallecompraTbList.filter(function (data) {
        var statusFilter = false;
        matchData = new DOMParser().parseFromString(
            data.values().status,
            "text/html"
        );
        var statusdtcompra = matchData.body.firstElementChild.innerHTML;
        if (statusdtcompra == "All" || values_status == "All") {
            statusFilter = true;
        } else {
            statusFilter = statusdtcompra == values_status;
        }
        return statusFilter;
    });

    detallecompraTbList.update();
}

// function updateList() {
//     var values_status = document.querySelector(
//         "input[name=status]:checked"
//     ).value;

//     data = userList.filter(function (item) {
//         var statusFilter = false;

//         if (values_status == "All") {
//             statusFilter = true;
//         } else {
//             statusFilter = item.values().sts == values_status;
//             console.log(statusFilter, "statusFilter");
//         }
//         return statusFilter;
//     });

//     userList.update();
// }

document.getElementById("showModalEditAdddetalleCompra")
    .addEventListener("show.bs.modal", function (e) {
        if (e.relatedTarget.classList.contains("edit-item-btn")) {
            document.getElementById("titleModalEditAdd").innerHTML = "Editar Cateroria";
            document.getElementById("showModalEditAdddetalleCompra")
                .querySelector(".modal-footer").style.display = "block";
            document.getElementById("add-btn").style.display = "none";
            document.getElementById("edit-btn").style.display = "block";
        } else if (e.relatedTarget.classList.contains("add-btn")) {
            document.getElementById("titleModalEditAdd").innerHTML = "Agregar categoria";
            document.getElementById("showModalEditAdddetalleCompra")
                .querySelector(".modal-footer").style.display = "block";
            document.getElementById("edit-btn").style.display = "none";
            document.getElementById("add-btn").style.display = "block";
        } else {
            document.getElementById("titleModalEditAdd").innerHTML = "List Customer";
            document.getElementById("showModalEditAdddetalleCompra")
                .querySelector(".modal-footer").style.display = "none";

        }
    });
ischeckboxcheckdtcompra();

document.getElementById("showModalEditAdddetalleCompra")
    .addEventListener("hidden.bs.modal", function () {
        clearFieldsdtcompra();
    });

document.querySelector("#detalleCompraTableList").addEventListener("click", function () {
    refreshCallbacksdtcompra();
    ischeckboxcheckdtcompra();
});

var table = document.getElementById("detalleCompraTable");
// save all tr
var tr = table.getElementsByTagName("tr");
var trlist = table.querySelectorAll(".list tr");

var count = Number(isValuedtcompra.replace(/[^0-9]/g, "")) + 1;
addBtndtcompra.addEventListener("click", function (e) {

    if (
        DTCproductNameField.value !== "" &&
        DTCdtccantidadField.value !== ""
    ) {
        detallecompraTbList.add({
            id: '<a href="javascript:void(0);" class="fw-medium link-primary">#VZ' +
                count +
                "</a>",
            dtproductname: DTCproductNameField.value,
            dtccantidad: DTCdtccantidadField.value,
            dtcpreciounitario: DTCprecioUnitarioField.value,
            dtcmonto: DTCmontoField.value,
            status: isStatusdtcompra(DTCstatusField.value),
        });

        document.getElementById("close-modal").click();
        clearFieldsdtcompra();
        refreshCallbacksdtcompra();
        filterContactdtcompra("All");
        count++;
    }
});

editBtndtcompra.addEventListener("click", function (e) {
    document.getElementById("titleModalEditAdd").innerHTML = "Edit Customer";
    var editValues = detallecompraTbList.get({
        id: DTCidField.value,
    });
    editValues.forEach(function (x) {
        isid = new DOMParser().parseFromString(x._values.dtcid, "text/html");
        var selectedid = isid.body.firstElementChild.innerHTML;
        if (selectedid == itemId) {
            x.values({
                id: '<a href="javascript:void(0);" class="fw-medium link-primary">' +
                    DTCidField.value +
                    "</a>",
                dtproductname: DTCproductNameField.value,
                dtccantidad: DTCdtccantidadField.value,
                dtcpreciounitario: DTCprecioUnitarioField.value,
                dtcmonto: DTCmontoField.value,
                status: isStatusdtcompra(DTCstatusField.value),
            });
        }
    });
    document.getElementById("close-modal").click();
    clearFieldsdtcompra();
});

var statusValDTC = new Choices(DTCstatusField);

function isStatusdtcompra(val) {
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

function ischeckboxcheckdtcompra() {
    document.getElementsByName("checkAlldtcompra").forEach(function (x) {
        x.addEventListener("click", function (e) {
            if (e.target.checked) {
                e.target.closest("tr").classList.add("table-active");
            } else {
                e.target.closest("tr").classList.remove("table-active");
            }
        });
    });
}

function refreshCallbacksdtcompra() {
    removeBtnsdtcompra.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            itemId = e.target.closest("tr").children[1].innerText;
            var itemValues = detallecompraTbList.get({
                id: itemId,
            });

            itemValues.forEach(function (x) {
                deleteid = new DOMParser().parseFromString(x._values.dtcid, "text/html");

                var isElem = deleteid.body.firstElementChild;
                var isdeleteid = deleteid.body.firstElementChild.innerHTML;

                if (isdeleteid == itemId) {
                    document
                        .getElementById("delete-record")
                        .addEventListener("click", function () {
                            detallecompraTbList.remove("id", isElem.outerHTML);
                            document.getElementById("deleteRecordModal").click();
                        });
                }
            });
        });
    });

    editBtnsdtcompra.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            itemId = e.target.closest("tr").children[1].innerText;
            var itemValues = detallecompraTbList.get({
                dtcid: itemId,
            });

            itemValues.forEach(function (x) {
                isid = new DOMParser().parseFromString(x._values.dtcid, "text/html");
                var selectedid = isid.body.firstElementChild.innerHTML;
                if (selectedid == itemId) {
                    DTCidField.value = selectedid;
                    DTCproductNameField.value = x._values.dtproductname;
                    DTCdtccantidadField.value = x._values.dtccantidad;
                    DTCprecioUnitarioField.value = x._values.dtcpreciounitario;
                    DTCmontoField.value = x._values.dtcmonto;

                    if (statusValDTC) statusValDTC.destroy();
                    statusValDTC = new Choices(DTCstatusField);
                    val = new DOMParser().parseFromString(x._values.status, "text/html");
                    var statusSelec = val.body.firstElementChild.innerHTML;
                    statusValDTC.setChoiceByValue(statusSelec);
                }
            });
        });
    });
}

function clearFieldsdtcompra() {
    DTCproductNameField.value = "";
    DTCdtccantidadField.value = "";
    DTCprecioUnitarioField.value = "";
    DTCmontoField.value = "";
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
var attroptionsTbDTC = {
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