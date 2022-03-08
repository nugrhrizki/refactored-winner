function $(query) {
    return document.querySelector(query);
}

function createElement(tag, value, text) {
    let el = document.createElement(tag);
    el.setAttribute("value", value);
    el.innerText = text;
    return el;
}

function deleteChild(el) {
    while (el.firstChild) {
        el.removeChild(el.firstChild);
    }
}

function debounce(func, timeout = 300) {
    let timer;
    return (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => {
            func.apply(this, args);
        }, timeout);
    };
}

module.exports = {
    $,
    createElement,
    deleteChild,
    debounce,
};
