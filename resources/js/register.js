let { $, createElement, deleteChild } = require("./utils");

$("#province").addEventListener("change", function (e) {
    populate("province", e.target.value);
});

$("#regency").addEventListener("change", function (e) {
    populate("regency", e.target.value);
});

$("#district").addEventListener("change", function (e) {
    populate("district", e.target.value);
});

function populate(wilayah, id) {
    switch (wilayah) {
        case "province":
            getData("regencies/" + id, $("#regency"), function () {
                deleteChild($("#regency"));
                deleteChild($("#district"));
                deleteChild($("#village"));
                $("#regency").appendChild(placeholder("Select Regency"));
                $("#district").appendChild(placeholder("Select District"));
                $("#village").appendChild(placeholder("Select Village"));
            });
            break;
        case "regency":
            getData("districts/" + id, $("#district"), function () {
                deleteChild($("#district"));
                deleteChild($("#village"));
                $("#district").appendChild(placeholder("Select District"));
                $("#village").appendChild(placeholder("Select Village"));
            });
            break;
        case "district":
            getData("villages/" + id, $("#village"), function () {
                deleteChild($("#village"));
                $("#village").appendChild(placeholder("Select Village"));
            });
            break;
        default:
            break;
    }
}

let memoizeData = {};

function getData(route, el, before) {
    if (memoizeData[route]) {
        before();
        for (let data of memoizeData[route]) {
            el.appendChild(createElement("option", data.id, data.name));
        }
        return;
    }

    window.axios.get("http://localhost:8001/api/" + route).then((res) => {
        before();
        for (let data of res.data) {
            el.appendChild(createElement("option", data.id, data.name));
        }
        memoizeData[route] = res.data;
    });
}

function placeholder(text) {
    let el = document.createElement("option");
    el.setAttribute("value", "");
    el.setAttribute("disabled", true);
    el.setAttribute("selected", true);
    el.innerText = text;
    return el;
}
