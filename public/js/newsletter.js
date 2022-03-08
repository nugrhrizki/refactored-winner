/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/utils.js":
/*!*******************************!*\
  !*** ./resources/js/utils.js ***!
  \*******************************/
/***/ ((module) => {

function $(query) {
  return document.querySelector(query);
}

function createElement(tag, value, text) {
  var el = document.createElement(tag);
  el.setAttribute("value", value);
  el.innerText = text;
  return el;
}

function deleteChild(el) {
  while (el.firstChild) {
    el.removeChild(el.firstChild);
  }
}

function debounce(func) {
  var _this = this;

  var timeout = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 300;
  var timer;
  return function () {
    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    clearTimeout(timer);
    timer = setTimeout(function () {
      func.apply(_this, args);
    }, timeout);
  };
}

module.exports = {
  $: $,
  createElement: createElement,
  deleteChild: deleteChild,
  debounce: debounce
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!************************************!*\
  !*** ./resources/js/newsletter.js ***!
  \************************************/
var _require = __webpack_require__(/*! ./utils */ "./resources/js/utils.js"),
    $ = _require.$,
    createElement = _require.createElement;

var email_regex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
$("#newsletter1").addEventListener("input", function (e) {
  validate(e.target.value);
});
$("#submit").addEventListener("click", function (e) {
  e.preventDefault();
  validate($("#newsletter1").value) && postData($("#newsletter1").value);
});

function validate(nstr) {
  var str = nstr.trim();
  var message = [];

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
  window.axios.post("http://localhost:8001/newsletter", {
    email: email
  }).then(function () {
    window.open("/", "_self");
  });
}
})();

/******/ })()
;