<x-layout.dashboard>


    <div class="row">
        <div class="col-4 d-flex flex-row gap-4">
            <div class="my-auto fs-20"><strong>DASHBOARD</strong></div>
            <div class="app-search">
                <div class="position-relative">
                    <input type="text" class="form-control" style="background-color: #F2F2EE; min-width: 500px" placeholder="Search here" autocomplete="off" id="search-options" value="">
                    <span class="mdi mdi-magnify search-widget-icon"></span>
                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="alert alert-warning alert-dismissible bg-warning text-dark fade show" role="alert" style="background-color: #FFD600 !important;">
                <strong>Important</strong> - Software updates provide more than just security updates, they offer new and improved features and speed enhancements to make the end-user experience better
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <div class="col-12 d-flex mb-4">
            <div class="my-auto fs-20"><strong>My Cards</strong></div>
            <button type="button" class="btn btn-primary ms-auto rounded-3"><i class="ri-add-line align-middle me-1"></i> Add Cards</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="mx-auto" style="max-width: 250px">
                <div class="bg-gradient p-4 rounded-4 mb-3" style="background-color: #062858">
                    <div class="d-flex justify-content-end">
                        <div class="flex-shrink-0">
                            <div class="text-white-50">12.10.2023</div>
                        </div>
                    </div>
                    <div class="text-white-50">Balance</div>
                    <div class="card-number fs-20 text-white" id="card-num-elem">
                        115,382.26 AED
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <div>
                                <div class="text-white-50">Wallet ID</div>
                                <div id="card-holder-elem" class="fw-medium fs-14 text-white">24579485</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="card rounded-4"> {{--card-height-100--}}
                <div class="card-body">
                    <h5 class="card-title mb-4">Recent Merchants</h5>
                    <div class="d-flex flex-wrap gap-lg-5">
                        <div>
                            <a href="javascript:void(0);" class="avatar-xs d-block mx-auto">
                               <span class="avatar-title rounded-circle fs-48 bg-body text-body"><i class="ri-github-fill"></i></span>
                            </a><br/>
                            <div class="text-dark-50">Transfer</div>
                            <div class="text-gray-700">Manual</div>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="avatar-xs d-block">
                               <span class="avatar-title rounded-circle fs-48 bg-primary"><i class="ri-facebook-fill"></i></span>
                            </a><br/>
                            <div class="text-dark-50">Facebook</div>
                            <div class="text-secondary">25012487</div>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="avatar-xs d-block">
                               <span class="avatar-title rounded-circle fs-48 bg-success"><i class="ri-team-fill"></i></span>
                            </a><br/>
                            <div class="text-dark-50">Teams</div>
                            <div class="text-secondary">20124857</div>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="avatar-xs d-block">
                               <span class="avatar-title rounded-circle fs-48 bg-danger"><i class="ri-pinterest-fill"></i></span>
                            </a><br/>
                            <div class="text-dark-50">job portal</div>
                            <div class="text-secondary">Manual</div>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="avatar-xs d-block">
                               <span class="avatar-title rounded-circle fs-48 bg-danger"><i class="ri-amazon-fill"></i></span>
                            </a><br/>
                            <div class="text-dark-50">Amazon</div>
                            <div class="text-secondary">Manual</div>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="avatar-xs d-block">
                               <span class="avatar-title rounded-circle fs-48 bg-danger"><i class="ri-noon-fill"></i></span>
                            </a><br/>
                            <div class="text-dark-50">Noon</div>
                            <div class="text-secondary">Manual</div>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="avatar-xs d-block">
                               <span class="avatar-title rounded-circle fs-48 bg-danger"><i class="ri-instagram-fill"></i></span>
                            </a><br/>
                            <div class="text-dark-50">Instagram</div>
                            <div class="text-secondary">Manual</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card rounded-4"> {{--card-height-100--}}
                <div class="card-body">
                    <div class="row flex flex-row">
                        <div class="col-6 row">
                            <h5 class="card-title mb-4">Merchant Statistics</h5>
                            <div class="col-6">
                                <div class="d-flex flex-column gap-3">
                                    <div>
                                        <span class="text-muted">Merchant Name</span>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">Facebook</a></h5>
                                    </div>
                                    <div>
                                        <span class="text-muted">Valid Date</span>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">08/21</a></h5>
                                    </div>
                                    <div>
                                        <span class="text-muted">Card Number</span>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">**** **** **** 1234</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column gap-3">
                                    <div>
                                        <span class="text-muted">Bank Name</span>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">ABC Center Bank</a></h5>
                                    </div>
                                    <div>
                                        <span class="text-muted">Card Holder Name</span>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">Marquezz Silalahi</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 row">
                            <div class="col-6">
                                <div class="card-body">
                                    <h6 class="text-muted">Statistics</h6>
                                    <div class="progress-pie" data-value="66" data-color="#FF6826" style="width: 150px; height: 150px;"></div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">Current Limits</a></h5>
                                        <span class="text-muted">$10,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <select class="js-example-basic-single" name="state" style="background-color: #041E43; color: #ffffff">
                                        <option value="">Choose Merchant</option>
                                        <option value="MA">Facebook</option>
                                        <option value="TO">Teams</option>
                                        <option value="LO">Amazon</option>
                                        <option value="WY">Instagram</option>
                                    </select>
                                    <div class="progress-pie" data-value="31" data-color="#1DC624" style="width: 150px; height: 150px;"></div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">Spend</a></h5>
                                        <span class="text-muted">$500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card rounded-4">
                <div class="card-header rounded-4">
                    <h4 class="card-title mb-0">Overall Account Statistics</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area_chart_spline" data-colors='["--vz-danger", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <div class="col-12">
            <div class="card rounded-4">
                <div class="card-header border-0 align-items-center d-flex rounded-4">
                    <h4 class="card-title mb-0 flex-grow-1">Payment Analytics</h4>
                    <div>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            ALL
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            1M
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            6M
                        </button>
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            1Y
                        </button>
                    </div>
                </div><!-- end card header -->

                <div class="card-header p-0 border-0 bg-light-subtle">
                    <div class="row g-0 text-center">
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                <p class="text-muted mb-0">Orders</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                <p class="text-muted mb-0">Earnings</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                <p class="text-muted mb-0">Refunds</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0 border-end-0">
                                <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                <p class="text-muted mb-0">Conversation Ratio</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div><!-- end card header -->

                <div class="card-body p-0 pb-2">
                    <div class="w-100">
                        <div id="customer_impression_charts" data-colors='["--vz-primary", "--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
    </div>

</x-layout.dashboard>
