let { $, createElement } = require("./utils");
let email_regex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

$("#newsletter1").addEventListener("input", function (e) {
    validate(e.target.value);
});

$("#submit").addEventListener("click", function (e) {
    e.preventDefault();
    validate($("#newsletter1").value) && postData($("#newsletter1").value);
});

function validate(nstr) {
    let str = nstr.trim();
    let message = [];

    if (str == "" || str == null) {
        message.push(["email can't empty"]);
    }

    if (str.length <= 10) {
        message.push(["minimal 10 character"]);
    }

    if (!email_regex.test(str)) {
        message.push(["email format is not valid"]);
    }

    if (message.length > 0) {
        $("#newsletter1").classList.remove("is-valid");
        $("#newsletter1").classList.add("is-invalid");
        $("#message").classList.remove("d-none");
        $("#message").classList.add("text-danger");
        $("#message").innerText = message.join(", ");
        return false;
    } else {
        $("#newsletter1").classList.add("is-valid");
        $("#message").classList.add("d-none");
        $("#newsletter1").classList.remove("is-invalid");
        $("#message").classList.remove("text-danger");
        return true;
    }
}

function postData(email) {
    window.axios
        .post("http://localhost:8001/newsletter", { email: email })
        .then(() => {
            window.open("/", "_self");
        });
}
