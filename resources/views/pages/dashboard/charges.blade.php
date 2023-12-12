<x-layout.dashboard>

    <div class="row">
        <div class="col-4 d-flex flex-row gap-4 mb-4">
            <div class="my-auto fs-20"><strong>CHARGES</strong></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-primary mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">SERVICE CHARGES</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">NON TIERED CHARGE</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">TIERED CHARGE</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body row">
                                                    <div class="col-3 mb-3">
                                                        <label class="form-label">Service</label>
                                                        <select class="form-control" data-choices name="choices-single-default">
                                                            <option value="">Select service</option>
                                                            <option value="admin">USD</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-4 mb-3">
                                                        <label class="form-label">Charge Type</label>
                                                        <select class="form-control" data-choices name="choices-single-default">
                                                            <option value="">Select charge type</option>
                                                            <option value="admin">USD</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-primary rounded-3" style="background-color: #041E43">Initiate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Service</label>
                                                            <select class="form-control" data-choices name="choices-single-default">
                                                                <option value="">Select service</option>
                                                                <option value="admin">USD</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4 mb-3">
                                                            <label class="form-label">Charge Type</label>
                                                            <select class="form-control" data-choices name="choices-single-default">
                                                                <option value="">Select charge type</option>
                                                                <option value="admin">USD</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Charge</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-primary rounded-3" style="background-color: #041E43">Initiate</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Service</label>
                                                            <select class="form-control" data-choices name="choices-single-default">
                                                                <option value="">Select service</option>
                                                                <option value="admin">USD</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Charge Type</label>
                                                            <select class="form-control" data-choices name="choices-single-default">
                                                                <option value="">Select charge type</option>
                                                                <option value="admin">USD</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Lower Unit</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Upper Unit</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Charge</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                        <div class="col-9 mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-primary rounded-3" style="background-color: #041E43">Initiate</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Recipient Account Number</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Currency</label>
                                                            <select class="form-control" data-choices name="choices-single-default">
                                                                <option value="">Select currency</option>
                                                                <option value="admin">USD</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Send Amount</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Transfer Type</label>
                                                            <select class="form-control" data-choices name="choices-single-default">
                                                                <option value="">Select type</option>
                                                                <option value="International Account">International Account</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3 mb-3">
                                                            <label class="form-label">Receive Amount</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                        <div class="col-9 mb-3">
                                                            <label class="form-label">Description</label>
                                                            <input type="text" class="form-control" placeholder="content here">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary rounded-3" style="background-color: #041E43">Continue</button>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout.dashboard>
