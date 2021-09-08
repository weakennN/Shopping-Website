<div class="modal fade" id="createAddressModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-sm-down modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create address</h5>
                <button id="create-modal-close" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column alert-container">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3 input-holder">
                        <label for="create-input-name">Name</label>
                        <input type="text" id="create-input-name" class="form-control">
                    </div>
                    <div class="col-lg-6 col-12 mb-3 input-holder">
                        <label for="create-input-phone">Phone</label>
                        <input type="text" id="create-input-phone" class="form-control">
                    </div>
                    <div class="col-12 mb-3 input-holder">
                        <label for="create-input-address">Address</label>
                        <input class="form-control" type="text" id="create-input-address">
                    </div>
                    <div class="col-lg-6 col-12 mb-3 input-holder">
                        <label for="create-input-city">City</label>
                        <input type="text" class="form-control" id="create-input-city">
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <label for="create-select-shipping-country">Shipping country</label>
                        <select class="form-select" id="create-select-shipping-country">
                            <option selected id="1">Bulgaria</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button style="width: 100px" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel
                </button>
                <button style="width: 100px" type="button" class="btn btn-primary" id="create-address">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editAddressModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-sm-down modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit address</h5>
                <button type="button" id="edit-modal-close" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column alert-container">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3 input-holder">
                        <label for="edit-input-name">Name</label>
                        <input type="text" id="edit-input-name" class="form-control">
                    </div>
                    <div class="col-lg-6 col-12 mb-3 input-holder">
                        <label for="edit-input-phone">Phone</label>
                        <input type="text" id="edit-input-phone" class="form-control">
                    </div>
                    <div class="col-12 mb-3 input-holder">
                        <label for="edit-input-address">Address</label>
                        <input class="form-control" type="text" id="edit-input-address">
                    </div>
                    <div class="col-lg-6 col-12 mb-3 input-holder">
                        <label for="edit-input-city">City</label>
                        <input type="text" class="form-control" id="edit-input-city">
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <label for="edit-select-shipping-country">Shipping country</label>
                        <select class="form-select" id="edit-select-shipping-country">
                            <option selected id="1">Bulgaria</option>
                            <option id="1">England</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button style="width: 100px" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel
                </button>
                <button style="width: 100px" type="button" class="btn btn-primary" id="edit-address">Edit</button>
            </div>
        </div>
    </div>
</div>
