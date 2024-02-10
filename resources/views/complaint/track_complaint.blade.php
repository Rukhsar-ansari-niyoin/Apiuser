
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
               <!-- track_complaint section start  -->
        <div class="conatiner-fluid mt-4 px-4 py-0">
            <div class="bd-example">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <div class="d-flex flex-row justify-content-between align-items-center w-100">
                            <div class="d-flex">
                                <button class="nav-link active btn btn-soft-light btn-sm" id="nav-all-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab"
                                    aria-controls="nav-all" aria-selected="true">All</button>
                                <button class="nav-link btn btn-soft-light btn-sm" id="nav-open-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-open" type="button" role="tab"
                                    aria-controls="nav-open" aria-selected="false">Open</button>
                                <button class="nav-link btn btn-soft-light btn-sm" id="nav-closed-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-closed" type="button" role="tab"
                                    aria-controls="nav-closed" aria-selected="false">Closed</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-soft-danger btn-sm">Raise Complaint</button>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="card">
                            <div
                                class="card-body d-flex flex-column justify-content-center flex-md-row justify-content-md-between">
                                <!-- form section  -->
                                <div class="d-flex gap-1">
                                    <div class="form-group">
                                        <label class="form-label">Show</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Short By</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Pages</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">10</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- pagination section  -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="pt-3 user-select-none">Viewing <span>0-0</span> of <span>0</span></p>
                                    <button class="border-0 bg-transparent text-gray">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 2.75024C6.892 2.75024 2.75 6.89124 2.75 12.0002C2.75 17.1082 6.892 21.2502 12 21.2502C17.108 21.2502 21.25 17.1082 21.25 12.0002C21.25 6.89124 17.108 2.75024 12 2.75024Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.4424 8.52905L9.95638 12.0001L13.4424 15.4711"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="border-0 bg-transparent text-gray">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-soft-light btn-sm">
                                        Reload
                                    </button>
                                </div>

                            </div>

                            <!-- border line  -->
                            <div class="border-top mb-4"></div>
                            <!-- table section start  -->
                            <div>
                                <div class="d-flex justify-content-center justify-content-md-end px-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            placeholder="Search...">
                                    </div>
                                </div>
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr class="user-select-none">
                                                <th>Complaint Id</th>
                                                <th>Complaint Date</th>
                                                <th>Transaction ID</th>
                                                <th>Trana Date</th>
                                                <th>Product</th>
                                                <th>Sub Product</th>
                                                <th>Issue</th>
                                                <th>+</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table section end  -->
                            <p class="border-top"></p>
                            <div class="card-footer text-muted text-center">
                                <button class="me-2 btn btn-sm btn-soft-primary">First</button>
                                <button class=" me-2 btn btn-sm btn-soft-primary">Previous</button>
                                <button class="me-2 btn btn-sm btn-soft-primary">Next</button>
                                <button class=" me-2 btn btn-sm btn-soft-primary">Last</button>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-open" role="tabpanel" aria-labelledby="nav-open-tab">
                        <div class="card">
                            <div
                                class="card-body d-flex flex-column justify-content-center flex-md-row justify-content-md-between">
                                <!-- form section  -->
                                <div class="d-flex gap-1">
                                    <div class="form-group">
                                        <label class="form-label">Show</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Short By</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Pages</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">10</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- pagination section  -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="pt-3 user-select-none">Viewing <span>0-0</span> of <span>0</span></p>
                                    <button class="border-0 bg-transparent text-gray">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 2.75024C6.892 2.75024 2.75 6.89124 2.75 12.0002C2.75 17.1082 6.892 21.2502 12 21.2502C17.108 21.2502 21.25 17.1082 21.25 12.0002C21.25 6.89124 17.108 2.75024 12 2.75024Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.4424 8.52905L9.95638 12.0001L13.4424 15.4711"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="border-0 bg-transparent text-gray">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-soft-light btn-sm">
                                        Reload
                                    </button>
                                </div>

                            </div>

                            <!-- border line  -->
                            <div class="border-top mb-4"></div>
                            <!-- table section start  -->
                            <div>
                                <div class="d-flex justify-content-center justify-content-md-end px-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            placeholder="Search...">
                                    </div>
                                </div>
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr class="user-select-none">
                                                <th>Complaint Id</th>
                                                <th>Complaint Date</th>
                                                <th>Transaction ID</th>
                                                <th>Trana Date</th>
                                                <th>Product</th>
                                                <th>Sub Product</th>
                                                <th>Issue</th>
                                                <th>+</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table section end  -->
                            <p class="border-top"></p>
                            <div class="card-footer text-muted text-center">
                                <button class="me-2 btn btn-sm btn-soft-primary">First</button>
                                <button class=" me-2 btn btn-sm btn-soft-primary">Previous</button>
                                <button class="me-2 btn btn-sm btn-soft-primary">Next</button>
                                <button class=" me-2 btn btn-sm btn-soft-primary">Last</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-closed" role="tabpanel" aria-labelledby="nav-closed-tab">
                        <div class="card">
                            <div
                                class="card-body d-flex flex-column justify-content-center flex-md-row justify-content-md-between">
                                <!-- form section  -->
                                <div class="d-flex gap-1">
                                    <div class="form-group">
                                        <label class="form-label">Show</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Short By</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Pages</label>
                                        <select class="form-select form-select-sm mb-3 shadow-none">
                                            <option selected="">10</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- pagination section  -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="pt-3 user-select-none">Viewing <span>0-0</span> of <span>0</span></p>
                                    <button class="border-0 bg-transparent text-gray">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 2.75024C6.892 2.75024 2.75 6.89124 2.75 12.0002C2.75 17.1082 6.892 21.2502 12 21.2502C17.108 21.2502 21.25 17.1082 21.25 12.0002C21.25 6.89124 17.108 2.75024 12 2.75024Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.4424 8.52905L9.95638 12.0001L13.4424 15.4711"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="border-0 bg-transparent text-gray">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-soft-light btn-sm">
                                        Reload
                                    </button>
                                </div>

                            </div>

                            <!-- border line  -->
                            <div class="border-top mb-4"></div>
                            <!-- table section start  -->
                            <div>
                                <div class="d-flex justify-content-center justify-content-md-end px-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            placeholder="Search...">
                                    </div>
                                </div>
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr class="user-select-none">
                                                <th>Complaint Id</th>
                                                <th>Complaint Date</th>
                                                <th>Transaction ID</th>
                                                <th>Trana Date</th>
                                                <th>Product</th>
                                                <th>Sub Product</th>
                                                <th>Issue</th>
                                                <th>+</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table section end  -->
                            <p class="border-top"></p>
                            <div class="card-footer text-muted text-center">
                                <button class="me-2 btn btn-sm btn-soft-primary ">First</button>
                                <button class=" me-2 btn btn-sm btn-soft-primary ">Previous</button>
                                <button class="me-2 btn btn-sm btn-soft-primary ">Next</button>
                                <button class=" me-2 btn btn-sm btn-soft-primary ">Last</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- track_complaint section end  -->

            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
