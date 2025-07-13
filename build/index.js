/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/Drawer.js":
/*!*******************************!*\
  !*** ./src/scripts/Drawer.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Drawer {
  constructor(drawerSelector, toggleSelector, closeSelector) {
    this.drawer = document.querySelector(drawerSelector);
    this.toggle = document.querySelector(toggleSelector);
    this.close = closeSelector ? document.querySelector(closeSelector) : null;
    if (this.toggle && this.drawer) {
      this.toggle.addEventListener('click', () => this.open());
    }
    if (this.close && this.drawer) {
      this.close.addEventListener('click', () => this.closeDrawer());
    }
    if (this.drawer) {
      this.drawer.addEventListener('click', e => {
        if (e.target === this.drawer) this.closeDrawer();
      });
    }
  }
  open() {
    this.drawer.classList.remove('translate-y-full');
    this.drawer.classList.add('translate-y-0');
  }
  closeDrawer() {
    this.drawer.classList.remove('translate-y-0');
    this.drawer.classList.add('translate-y-full');
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Drawer);

/***/ }),

/***/ "./src/scripts/StarRating.js":
/*!***********************************!*\
  !*** ./src/scripts/StarRating.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class StarRating {
  constructor(starRatingSelector, hiddenInputSelector) {
    this.starRating = document.querySelector(starRatingSelector);
    this.hiddenInput = document.querySelector(hiddenInputSelector);
    this.updateStarColor(this.hiddenInput.value);
    this.activeColor = 'text-tertiary';
    this.defaultColor = 'text-gray-500';
    this.events();
    this.starRating.querySelectorAll('i').forEach(star => {
      star.addEventListener('click', () => {
        const value = star.getAttribute('data-value');
        this.updateHiddenRatingField(value);
        this.updateStarColor(value, 'click');
      });
      star.addEventListener('pointerover', () => {
        const value = star.getAttribute('data-value');
        this.updateStarColor(value, 'pointerover');
      });
      star.addEventListener('pointerleave', () => {
        this.updateStarColor(this.hiddenInput.value, 'pointerleave');
      });
    });
  }
  events() {
    this.hiddenInput.addEventListener('change', e => {
      this.updateStarColor(this.hiddenInput.value, 'change');
    });
  }
  updateStarColor(value, e) {
    this.starRating.querySelectorAll('i').forEach(star => {
      if (e === 'pointerover') {
        star.classList.add("opacity-50");
      } else {
        star.classList.remove("opacity-50");
      }
      if (parseInt(star.getAttribute('data-value')) <= parseInt(value)) {
        star.classList.add(this.activeColor);
        star.classList.remove(this.defaultColor);
      } else {
        star.classList.remove(this.activeColor);
        star.classList.add(this.defaultColor);
      }
    });
  }
  updateHiddenRatingField(newValue) {
    this.hiddenInput.value = newValue;
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (StarRating);

/***/ }),

/***/ "./src/scripts/TestimonialForm.js":
/*!****************************************!*\
  !*** ./src/scripts/TestimonialForm.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class TestimonialForm {
  constructor(formSelector) {
    this.form = document.querySelector(formSelector);
    this.events();
  }
  events() {
    this.form.addEventListener('submit', async e => {
      e.preventDefault();
      const formData = new FormData(this.form);
      try {
        const response = await fetch(siteData.root_url + '/wp-json/wp/v1/testimonial', {
          method: 'POST',
          headers: {
            'X-WP-Nonce': siteData.nonce
          },
          body: formData
        });
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        console.log('Success:', data);
      } catch (error) {
        console.error('Error submitting testimonial:', error);
      }
    });
    this.form.addEventListener('reset', () => {
      const ratingField = document.querySelector('#testimonial-rating-field');
      if (ratingField) {
        ratingField.value = '5';
        ratingField.dispatchEvent(new Event('change'));
      }
    });
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (TestimonialForm);

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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_Drawer__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Drawer */ "./src/scripts/Drawer.js");
/* harmony import */ var _scripts_TestimonialForm__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/TestimonialForm */ "./src/scripts/TestimonialForm.js");
/* harmony import */ var _scripts_StarRating__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/StarRating */ "./src/scripts/StarRating.js");



document.addEventListener('DOMContentLoaded', function () {
  new _scripts_Drawer__WEBPACK_IMPORTED_MODULE_0__["default"]('#drawer', '#drawer-toggle', '#drawer-close');
  const testimonialFormEl = document.querySelector('#testimonial-form');
  if (testimonialFormEl) {
    new _scripts_TestimonialForm__WEBPACK_IMPORTED_MODULE_1__["default"]('#testimonial-form');
    new _scripts_StarRating__WEBPACK_IMPORTED_MODULE_2__["default"]('#star-rating', "#testimonial-rating-field");
  }
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map