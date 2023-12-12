<x-layout.dashboard>

    <div class="row">
        <div class="col-4 d-flex flex-row gap-4 mb-4">
            <div class="my-auto fs-20"><strong>Payments</strong></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary ms-auto rounded-3" style="background-color: #041E43">Card Payment</button>
                    <button type="button" class="btn btn-secondary ms-auto rounded-3 border-0" style="background-color: #D8E5FF; color: #041E43">Mobile Payment</button>
                    <button type="button" class="btn btn-secondary ms-auto rounded-3 border-0" style="background-color: #D8E5FF; color: #041E43">Bank Transfer</button>
                </div>
                <div class="card-body row">
                    <div class="col-12 mb-4">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <div class="row border-2">
                                    <div class="col-12 col-md-4 border-2 border-end">
                                        <h3 class="card-title mb-4">Select Month</h3>
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-2">
                                                <div class="my-auto mx-2 avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-1" style="background-color: #041E43 !important; color: #ffffff;">1</div>
                                                <div>
                                                    <h5 class="fs-14 my-1"><a href="#" class="text-reset">Enter card details</a></h5>
                                                    <span class="text-muted">Define your sub title here</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row gap-2">
                                                <div class="my-auto mx-2 avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-1" style="background-color: #D8E5FF !important;">2</div>
                                                <div>
                                                    <h5 class="fs-14 my-1"><a href="#" class="text-reset">Enter card details</a></h5>
                                                    <span class="text-muted">Define your sub title here</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row gap-2">
                                                <div class="my-auto mx-2 avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-1" style="background-color: #D8E5FF !important;">3</div>
                                                <div>
                                                    <h5 class="fs-14 my-1"><a href="#" class="text-reset">Enter card details</a></h5>
                                                    <span class="text-muted">Define your sub title here</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <div>
                                            <button type="button" class="btn btn-light ms-auto rounded-3">
                                                <i class="bx bxl-visa bx-md"></i>
                                            </button>
                                            <button type="button" class="btn btn-light ms-auto rounded-3">
                                                <i class="bx bxl-paypal bx-md"></i>
                                            </button>
                                            <button type="button" class="btn btn-light ms-auto rounded-3">New <i class="ri-add-line align-middle me-1"></i></button>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="mt-3 col-12">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" placeholder="content here">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="mt-3 col-4">
                                                <label class="form-label">Select Month</label>
                                                <input type="number" class="form-control" placeholder="Month">
                                            </div>
                                            <div class="mt-3 col-4">
                                                <label class="form-label">Select Year</label>
                                                <input type="number" class="form-control" placeholder="Year">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="mt-3 col-4">
                                                <label class="form-label">CVV</label>
                                                <input type="number" class="form-control" placeholder="***">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="mt-3 col-4">
                                                <label class="form-label">Save Card Info</label>
                                                <!-- Base Example -->
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                                    <label class="form-check-label" for="formCheck1">
                                                        Save
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="mt-3 col-4">
                                                <button type="button" class="btn btn-primary ms-auto rounded-3" style="background-color: #041E43 !important;">Save Information</button>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="mt-3 col-12">
                                                <div class="card rounded-4">
                                                    <div class="card-body rounded-4" style="background-color: #AA8336">
                                                        <h3 class="card-title" style="color: #e9e9e9">Get our pro offers</h3>
                                                        <span class="" style="color: #e9e9e9">Create a visual identity for your company,<br> and an overall brand</span>
                                                        <div class="row mt-2">
                                                            <div class="mt-3 col-12 d-flex justify-content-end">
                                                                <input type="text" class="form-control" placeholder="Enter Email">
                                                                <button type="button" class="btn btn-primary ms-auto rounded-3" style="background-color: #041E43 !important;">Save Information</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
