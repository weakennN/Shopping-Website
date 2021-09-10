setAddressAction();

document.getElementById("create-address").addEventListener("click", function () {
    let action = validateAddressModal("createAddressModal");

    if (action === true) {
        addUserAddress(getAddressModalValues("createAddressModal"));
    }
});

document.getElementById("edit-address").addEventListener("click", function () {
    let editAddress = validateAddressModal("editAddressModal");

    if (editAddress === true) {
        editUserAddress(getAddressModalValues("editAddressModal"), this.getAttribute("data-target"));
    }
});