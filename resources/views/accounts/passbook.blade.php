
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
            <div class="card-body px-0">
               <!-- passboo section start from here  -->
        <div class="conatiner-fluid py-0 bg-white">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div> 
                        </div>
                        <div class="d-flex gap-2 py-2">
                            <p class="text-sm text-black mb-0">Passbook</p>
                            <div id="svg-container-15">
                                <svg class="icon-18" width="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="text-sm mb-0">Passbook</p>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-success text-white rounded p-3">
                                            <svg class="icon-18" width="18px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="fs-6">SUCCESS <br> COUNT <span>( 0 )</span></p>
                                            <h2 class="counter">75</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-danger text-white rounded p-3">
                                            <svg class="icon-18" width="18px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 2.75C17.108 2.75 21.25 6.891 21.25 12C21.25 17.108 17.108 21.25 12 21.25C6.891 21.25 2.75 17.108 2.75 12C2.75 6.891 6.891 2.75 12 2.75Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M11.9951 8.2041V12.6231" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.995 15.7959H12.005" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p>FAILED <br> COUNT <span> ( 0 ) </span></p>
                                            <h2 class="counter">60</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-warning text-white rounded p-3">
                                            <svg class="icon-18" width="18px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2.87187 11.5983C1.79887 8.24832 3.05287 4.41932 6.56987 3.28632C8.41987 2.68932 10.4619 3.04132 11.9999 4.19832C13.4549 3.07332 15.5719 2.69332 17.4199 3.28632C20.9369 4.41932 22.1989 8.24832 21.1269 11.5983C19.4569 16.9083 11.9999 20.9983 11.9999 20.9983C11.9999 20.9983 4.59787 16.9703 2.87187 11.5983Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16 6.69995C17.07 7.04595 17.826 8.00095 17.917 9.12195"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p>PENDING <br> COUNT <span> ( 0 ) </span></p>
                                            <h2 class="counter">80</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-info text-white rounded p-3">
                                            <svg class="icon-18" width="18px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.334 2.75H7.665C4.645 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.635 21.25 7.665 21.25H16.334C19.364 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.364 2.75 16.334 2.75Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M12 7.91394L12 16.0859" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.25205 11.6777L12 7.91373L15.748 11.6777"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="text-end">
                                            <p> PROFIT <br> <span>Total (0)</span></p>
                                            <h2 class="counter">45</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card mx-4"> -->
                <div class="card-body px-4">
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
                                            <label class="form-label">Service List</label>
                                            <select class="form-select form-select-sm mb-3 shadow-none">
                                                <option selected="">All Service</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Service Provider</label>
                                            <select class="form-select form-select-sm mb-3 shadow-none">
                                                <option selected="">All Service Provider</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Search By</label>
                                            <select class="form-select form-select-sm mb-3 shadow-none">
                                                <option selected="">Search By</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label" for="colFormLabelSm">Enter Value</label>
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                placeholder="Enter Complaint Id">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-label">Credit / Debit</label>
                                            <select class="form-select form-select-sm mb-3 shadow-none">
                                                <option selected="">All</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 d-flex gap-2 align-items-center justify-content-center mt-4">
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
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <svg class="icon-16" width="18" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M21.419 15.732C21.419 19.31 19.31 21.419 15.732 21.419H7.95C4.363 21.419 2.25 19.31 2.25 15.732V7.932C2.25 4.359 3.564 2.25 7.143 2.25H9.143C9.861 2.251 10.537 2.588 10.967 3.163L11.88 4.377C12.312 4.951 12.988 5.289 13.706 5.29H16.536C20.123 5.29 21.447 7.116 21.447 10.767L21.419 15.732Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M7.48145 14.4629H16.2164" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Export Excel
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="border-top mb-5"></div>
                <!-- tab section start  -->
                <div class="bd-example px-4">
                    <nav>
                        <div class="nav nav-tabs mb-3 px-2" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-allorders-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-allorders" type="button" role="tab" aria-controls="nav-allorders"
                                aria-selected="true">
                                All Orders
                            </button>
                            <button class="nav-link" id="nav-success-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-success" type="button" role="tab" aria-controls="nav-success"
                                aria-selected="false">
                                Success
                            </button>
                            <button class="nav-link" id="nav-failed-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-failed" type="button" role="tab" aria-controls="nav-failed"
                                aria-selected="false">
                                Failed
                            </button>
                            <button class="nav-link d-flex align-items-center gap-1 justify-content-center"
                                id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button"
                                role="tab" aria-controls="nav-pending" aria-selected="false">
                                Pending
                                <span class="bg-danger text-white rounded px-1">0</span>
                            </button>
                            <button class="nav-link d-flex align-items-center gap-1 justify-content-center"
                                id="nav-refund-tab" data-bs-toggle="tab" data-bs-target="#nav-refund" type="button"
                                role="tab" aria-controls="nav-refund" aria-selected="false">
                                Refund
                            </button>
                            <button class="nav-link d-flex align-items-center gap-1 justify-content-center"
                                id="nav-reversal-tab" data-bs-toggle="tab" data-bs-target="#nav-reversal" type="button"
                                role="tab" aria-controls="nav-reversal" aria-selected="false">
                                Reversal
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content px-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-allorders" role="tabpanel"
                            aria-labelledby="nav-allorders-tab">
                            <!-- <div class="card text-center rounded-0"> -->
                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Txn Id</th>
                                                <th>Date & Time</th>
                                                <th>Description</th>
                                                <th>Net Amount</th>
                                                <th>Credit & Debit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>All Orders</td>
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
                        <div class="tab-pane fade" id="nav-success" role="tabpanel" aria-labelledby="nav-success-tab">
                            <!-- <div class="card text-center rounded-0"> -->
                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Txn Id</th>
                                                <th>Date & Time</th>
                                                <th>Description</th>
                                                <th>Net Amount</th>
                                                <th>Credit & Debit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Success Orders</td>
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
                        <div class="tab-pane fade" id="nav-failed" role="tabpanel" aria-labelledby="nav-failed-tab">
                            <!-- <div class="card text-center rounded-0"> -->
                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Txn Id</th>
                                                <th>Date & Time</th>
                                                <th>Description</th>
                                                <th>Net Amount</th>
                                                <th>Credit & Debit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Failed Orders</td>
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
                        <div class="tab-pane fade" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
                            <!-- <div class="card text-center rounded-0"> -->
                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Txn Id</th>
                                                <th>Date & Time</th>
                                                <th>Description</th>
                                                <th>Net Amount</th>
                                                <th>Credit & Debit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pending Orders</td>
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
                        <div class="tab-pane fade" id="nav-refund" role="tabpanel" aria-labelledby="nav-refund-tab">
                            <!-- <div class="card text-center rounded-0"> -->
                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Txn Id</th>
                                                <th>Date & Time</th>
                                                <th>Description</th>
                                                <th>Net Amount</th>
                                                <th>Credit & Debit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Refund Orders</td>
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
                        <div class="tab-pane fade" id="nav-reversal" role="tabpanel" aria-labelledby="nav-reversal-tab">
                            <!-- <div class="card text-center rounded-0"> -->
                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Txn Id</th>
                                                <th>Date & Time</th>
                                                <th>Description</th>
                                                <th>Net Amount</th>
                                                <th>Credit & Debit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Reversal Orders</td>
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
                <!-- tab section end  -->
                <!-- </div> -->
            </div>
            <!-- form section start from here  -->

            <!-- form section end here  -->
        </div>
        <!-- passboo section end here  -->
    </main>
    <!-- main section end here  -->

    <!-- Wrapper End-->  
        
      </div>
   </div>
</div>
</x-app-layout>
