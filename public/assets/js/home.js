"use strict";

let formEl = document.getElementsByTagName("form")[0];

const submitForm = (e) => {
  e.preventDefault();
  formEl.submit();
};

formEl.addEventListener("change", submitForm);
