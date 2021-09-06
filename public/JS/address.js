document.getElementById("create-address").addEventListener("click", function () {
    let action = validateAddressModal("createAddressModal");

    if (action === true) {
        // get input values and call ajax function to create address
        let addressInfo = getAddressModalValues("createAddressModal");
        addAddress(createAddress(2, addressInfo["name"], addressInfo["phone"]
            , addressInfo["address"], addressInfo["city"], addressInfo["country"]));
    }
});

document.getElementById("edit-address").addEventListener("click", function () {
    let editAddress = validateAddressModal("editAddressModal");

    if (editAddress === true) {
        // get input values, get edit button data-target attribute and call ajax function to edit address
    }
});

function addAddress(addressEl) {
    document.getElementById("address-container").append(addressEl, document.createElement("hr"));
}

function createAddress(addressId, customerName, customerPhone, address, city, country) {
    let addressEl = document.createElement("div");
    addressEl.classList.add("card", "border-0");
    addressEl.setAttribute("id", addressId);
    let addressElBody = document.createElement("div");
    addressElBody.classList.add("card-body", "p-0");
    let customerNameEl = document.createElement("h5");
    customerNameEl.classList.add("card-title");
    customerNameEl.textContent = customerName;
    let customerPhoneEl = document.createElement("p");
    customerPhoneEl.classList.add("card-text", "m-0");
    customerPhoneEl.textContent = customerPhone;
    let customerAddressEl = document.createElement("p");
    customerAddressEl.classList.add("card-text", "m-0");
    customerAddressEl.textContent = address;
    let customerLocationEl = document.createElement("p");
    customerLocationEl.classList.add("card-text", "m-0");
    customerLocationEl.textContent = country + " - " + city;
    addressElBody.append(customerNameEl, customerPhoneEl, customerAddressEl, customerLocationEl);
    let buttonRow = document.createElement("div");
    buttonRow.classList.add("mt-3", "d-flex", "flex-row");
    let editButton = document.createElement("button");
    editButton.classList.add("btn", "modify-address-btn", "btn-primary", "me-2");
    editButton.setAttribute("data-bs-target", "#editAddressModal");
    editButton.setAttribute("data-bs-toggle", "modal");
    editButton.setAttribute("type", "button");
    editButton.textContent = "Edit";
    let deleteButton = document.createElement("button");
    deleteButton.classList.add("btn", "modify-address-btn", "btn-danger");
    deleteButton.setAttribute("type", "button");
    deleteButton.textContent = "Delete";
    buttonRow.append(editButton, deleteButton);
    addressElBody.appendChild(buttonRow);
    addressEl.appendChild(addressElBody);

    // TODO: add action to buttons

    return addressEl;
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