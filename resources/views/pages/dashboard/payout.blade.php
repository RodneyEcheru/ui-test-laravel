<x-layout.dashboard>

    <div class="row">
        <div class="col-4 d-flex flex-row gap-4 mb-4">
            <div class="my-auto fs-20"><strong>PAYOUT HISTORY</strong></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-4">
                <div class="card-body row">
                    <div class="col-12 mb-4">
                        <div class="card rounded-4 border-1">
                            <div class="card-body">
                                <div class="col-12 row mb-4">
                                    <div class="col-2">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" placeholder="User ID">
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <span class="input-group-text">From</span>
                                            <input type="date" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <span class="input-group-text">To</span>
                                            <input type="date" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-primary ms-auto rounded-3" style="background-color: #041E43">Search</button>
                                    </div>
                                </div>
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th data-ordering="false">Report ID</th>
                                        <th data-ordering="false">Created Date</th>
                                        <th data-ordering="false">Report Type</th>
                                        <th data-ordering="false">Send to Email</th>
                                        <th data-ordering="false">Download Link</th>
                                        <th>Available role</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>03 Oct, 2021</td>
                                        <td>Weekly</td>
                                        <td>email@gmail.com</td>
                                        <td>pid=website&af-channel=we</td>
                                        <td>Tech Support</td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>03 Oct, 2021</td>
                                        <td>Weekly</td>
                                        <td>email@gmail.com</td>
                                        <td>pid=website&af-channel=we</td>
                                        <td>Tech Support</td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>03 Oct, 2021</td>
                                        <td>Weekly</td>
                                        <td>email@gmail.com</td>
                                        <td>pid=website&af-channel=we</td>
                                        <td>Tech Support</td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>03 Oct, 2021</td>
                                        <td>Weekly</td>
                                        <td>email@gmail.com</td>
                                        <td>pid=website&af-channel=we</td>
                                        <td>Tech Support</td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>03 Oct, 2021</td>
                                        <td>Weekly</td>
                                        <td>email@gmail.com</td>
                                        <td>pid=website&af-channel=we</td>
                                        <td>Tech Support</td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>03 Oct, 2021</td>
                                        <td>Weekly</td>
                                        <td>email@gmail.com</td>
                                        <td>pid=website&af-channel=we</td>
                                        <td>Tech Support</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout.dashboard>
