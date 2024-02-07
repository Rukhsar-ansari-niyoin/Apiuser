
<x-app-layout :assets="$assets ?? []">
<div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">{{ $pageTitle ?? 'List'}}</h4>
               </div>
                <div class="card-action">
                  
                </div>
            </div>
            <!-- main content start from here  -->
        <div class="conatiner-fluid py-0 bg-white">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <h5>DISPUTES</h5>
                        </div>
                        <div class="d-flex gap-2 py-2">
                            <p class="text-sm text-black mb-0">Disputes</p>
                            <div id="svg-container-15">
                                <svg class="icon-18" width="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="text-sm mb-0">Disputes</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputdate">From Date</label>
                                            <input type="date" class="form-control form-control-sm mb-3"
                                                id="exampleInputdate" value="2019-12-18">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputdate">To Date</label>
                                            <input type="date" class="form-control form-control-sm mb-3"
                                                id="exampleInputdate" value="2019-12-18">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Complaint Status</label>
                                            <select class="form-select form-select-sm mb-3 shadow-none">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="colFormLabelSm">Complaint Id</label>
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                placeholder="Enter Complaint Id">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="colFormLabelSm">Txn id</label>
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                placeholder="Enter Complaint Id">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="colFormLabelSm">Transaction Number</label>
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                placeholder="Enter Complaint Id">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="colFormLabelSm">Client Id</label>
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                placeholder="Enter Complaint Id">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-4 pt-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <svg class="icon-16 mb-1" width="18" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.7161 16.2234H8.49609" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M15.7161 12.0369H8.49609" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.2521 7.86011H8.49707" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="card text-center rounded-0"> -->
                <div class="card-body">
                    <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th>Cmp Id</th>
                                    <th>Txn Id</th>
                                    <th>Txn Details</th>
                                    <th>Complaint Status</th>
                                    <th>CMP Time</th>
                                    <th>Resolve Time</th>
                                    <th>Remark</th>
                                    <th>Attachment</th>
                                    <th>Attempt</th>
                                    <th>Reopen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="card-footer border-top d-flex justify-content-between flex-wrap">
                        <p>Showing 0 to 0 of 0 entries</p>
                        <div>
                            <button class="bg-transparent border-0">
                                Previous
                            </button>
                            <button class="bg-transparent border-0">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
                <!-- table end here -->
                <!-- main content end here  -->
                <!-- </div> -->
         </div>
      </div>
   </div>
</div>
</x-app-layout>
