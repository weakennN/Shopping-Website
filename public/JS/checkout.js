document.getElementById("create-address").addEventListener("click", function () {
    let create = validateAddressModal("createAddressModal");
    if (create) {
        addCheckoutPageUserAddress(getAddressModalValues("createAddressModal"))
    }
});
document.getElementById("edit-address").addEventListener("click", function () {
    let edit = validateAddressModal("editAddressModal");
    if (edit) {
        editUserAddress(getAddressModalValues("editAddressModal"), this.getAttribute("data-target"));
    }
});

setAddressAction();

function creatCheckoutPageAddress(addressId, name, phone, address, city, country) {
    let addressEl = createAddressPageAddress(addressId, name, phone, address, city, country);
    let flexRow = document.createElement("div");
    flexRow.classList.add("d-flex", "flex-row");
    let formCheck = document.createElement("div");
    formCheck.classList.add("form-check", "mt-4", "me-4");
    let radioButton = document.createElement("input");
    radioButton.classList.add("form-check-input");
    radioButton.setAttribute("type", "radio");
    radioButton.setAttribute("name", "radioButton");
    radioButton.setAttribute("value", addressId);
    formCheck.appendChild(radioButton);
    flexRow.appendChild(formCheck);
    flexRow.appendChild(addressEl.children.item(0));
    addressEl.appendChild(flexRow);

    return addressEl;
}