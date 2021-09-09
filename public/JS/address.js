function setAddressAction() {
    let addresses = document.getElementsByClassName("address");

    for (let address of addresses) {
        let addressId = address.id;
        let name = address.getElementsByTagName("h5").item(0).textContent;
        let phone = address.getElementsByClassName("card-text").item(0).textContent;
        let userAddress = address.getElementsByClassName("card-text").item(1).textContent;
        let country = address.getElementsByClassName("card-text").item(2).textContent.split(" - ")[0]
        let city = address.getElementsByClassName("card-text").item(2).textContent.split(" - ")[1];
        let editButton = address.getElementsByTagName("button").item(0);
        let deleteButton = address.getElementsByTagName("button").item(1);

        editAddressAction(editButton, addressId, name, phone, userAddress, country, city);
        deleteAddressAction(deleteButton, address, addressId);
    }
}

setAddressAction();

function setEditModalInputs(name, phone, address, country, city) {
    document.getElementById("edit-input-name").value = name;
    document.getElementById("edit-input-phone").value = phone;
    document.getElementById("edit-input-address").value = address;
    document.getElementById("edit-input-city").value = city;
    document.getElementById("edit-select-shipping-country").options.item(getCurrentOptionId(country)).selected = true
}

function getCurrentOptionId(country) {
    let select = document.getElementById("edit-select-shipping-country");

    for (let i = 0; i < select.children.length; i++) {
        if (select.children.item(i).textContent === country) {
            return i;
        }
    }

    return 0;
}

getCurrentOptionId();

// move this two in addressModal.js
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

function addAddress(addressEl) {
    if (document.getElementById("no-addresses-text") !== null) {
        document.getElementById("address-container").removeChild((document.getElementById("no-addresses-text")));
    }
    document.getElementById("address-container").appendChild(addressEl);
}

function getAddressModalValues(addressModal) {
    let addressModalEl = document.getElementById(addressModal);
    let inputs = addressModalEl.getElementsByTagName("input");
    console.log(inputs.item(1).value)
    return {
        "name": inputs.item(0).value,
        "phone": inputs.item(1).value,
        "address": inputs.item(2).value,
        "city": inputs.item(3).value,
        "country": addressModalEl.getElementsByTagName("select").item(0).value,
        "countryId": addressModalEl.getElementsByTagName("select").item(0).options.item(addressModalEl.getElementsByTagName("select").item(0).options.selectedIndex).id
    };
}

function updateAddressContent(addressInfo, addressId) {
    let address = document.getElementById(addressId);
    address.getElementsByTagName("h5").item(0).textContent = addressInfo["name"];
    address.getElementsByClassName("card-text").item(0).textContent = addressInfo["phone"];
    address.getElementsByClassName("card-text").item(1).textContent = addressInfo["address"];
    address.getElementsByClassName("card-text").item(2).textContent = addressInfo["country"] + " - " + addressInfo["city"];
}