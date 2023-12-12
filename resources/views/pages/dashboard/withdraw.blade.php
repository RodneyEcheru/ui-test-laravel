<x-layout.dashboard>

    <div class="row">
        <div class="col-4 d-flex flex-row gap-4 mb-4">
            <div class="my-auto fs-20"><strong>WITHDRAW</strong></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-4">
                <div class="card-body row">
                    <div class="col-12 mb-4">
                        <div class="flex flex-row justify-content-end">
                            <button type="button" class="btn btn-primary ms-auto rounded-3" style="background-color: #041E43" data-bs-toggle="modal" data-bs-target="#myModal">SETTLEMENT</button>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card rounded-4 border-1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 mb-3">
                                        <label class="form-label">Currency</label>
                                        <select class="form-control" data-choices name="choices-single-default">
                                            <option value="">Select currency</option>
                                            <option value="admin">USD</option>
                                        </select>
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label class="form-label">Amount</label>
                                        <input type="text" class="form-control" placeholder="content here">
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label class="form-label">Send Amount</label>
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
                </div>
            </div>
        </div>
    </div>

</x-layout.dashboard>
