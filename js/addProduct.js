"use strict"

let form = document.querySelector(".add-form");
form.onsubmit = function(event) {
  event.preventDefault();
  addProduct(form);
}

function addProduct(form) {
  let formData = new FormData(form);
  fetch("addProduct_obr.php", {
    method: "POST",
    body: formData,
  })
    .then(response => response.text())
    .then(result => {
      if(result == "ok") {
        alert("Товар успешно добавлен");
      } else {
        showErrorText(result);
      }
    });
}

function showErrorText(error) {
  let errorElement = document.querySelector(".error-text");
  errorElement.classList.remove("d-none");
  errorElement.innerHTML = error;
}