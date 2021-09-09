function createAddressPageAddress(addressId, customerName, customerPhone, address, city, country) {
    let addressEl = document.createElement("div");
    addressEl.classList.add("card", "border-0", "address");
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

    editAddressAction(editButton, addressId, customerName, customerPhone, address, country, city);
    deleteAddressAction(deleteButton, addressEl, addressId);

    return addressEl;
}

function editAddressAction(editButton, addressId, name, phone, address, country, city) {
    editButton.addEventListener("click", function () {
        setEditModalInputs(name, phone, address, country, city);
        document.getElementById("edit-address").setAttribute("data-target", addressId);
    });
}

function deleteAddressAction(deleteButton, addressEl, addressId) {
    deleteButton.addEventListener("click", function () {
        addressEl.classList.add("fade-out");
        deleteUserAddress(addressId);
        setTimeout(function () {
            document.getElementById("address-container").removeChild(addressEl);
            if (document.getElementById("address-container").children.length <= 0) {
                location.reload();
            }
        }, 1000);
    })
}