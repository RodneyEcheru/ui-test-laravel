<x-layout.dashboard>

    <div class="row">
        <div class="col-4 d-flex flex-row gap-4 mb-3">
            <div class="my-auto fs-20"><strong>IP WHITELISTING</strong></div>
        </div>
        <div class="col-12 d-flex mb-4 gap-3">
            <button type="button" class="btn btn-primary rounded-3" style="background-color: #041E43">API Key</button>
            <button type="button" class="btn btn-primary rounded-3" style="background-color: #FFFFFF33; color: #041E43">IP WHITELISTING</button>
        </div>
        <div class="col-12 d-flex mb-4 gap-3">
            <button type="button" class="btn btn-primary rounded-3 ms-auto" style="background-color: #041E43" data-bs-toggle="modal" data-bs-target="#myModal">ADD NEW IP</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-4">
                <div class="card-body row">
                    <div class="col-12 mb-4">
                        <div class="flex flex-row justify-content-end">
                            <div id="myModal" class="modal fade bs-example-modal-center" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #041E43">
                                            <h5 class="modal-title my-auto text-white" id="myModalLabel">Add New IP</h5>
                                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <label class="form-label">Enter IP</label>
                                                    <input type="text" class="form-control" placeholder="content here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary rounded-3" style="background-color: #041E43">SAVE</button>
                                        </div>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card rounded-4 border-1">
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th data-ordering="false">IP</th>
                                        <th data-ordering="false">DATE</th>
                                        <th data-ordering="false">ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="fs-14 my-1"><a href="#" class="text-reset">Name</a></h5>
                                            <span class="text-muted">192.168.35.4</span>
                                        </td>
                                        <td>03 Oct, 2021</td>
                                        {{--<td><span class="badge bg-info-subtle text-info">Re-open</span></td>--}}
                                        <td><btn class="btn btn-danger">Delete</btn></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="fs-14 my-1"><a href="#" class="text-reset">Name</a></h5>
                                            <span class="text-muted">192.168.35.4</span>
                                        </td>
                                        <td>03 Oct, 2021</td>
                                        {{--<td><span class="badge bg-info-subtle text-info">Re-open</span></td>--}}
                                        <td><btn class="btn btn-danger">Delete</btn></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="fs-14 my-1"><a href="#" class="text-reset">Name</a></h5>
                                            <span class="text-muted">192.168.35.4</span>
                                        </td>
                                        <td>03 Oct, 2021</td>
                                        {{--<td><span class="badge bg-info-subtle text-info">Re-open</span></td>--}}
                                        <td><btn class="btn btn-danger">Delete</btn></td>
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
