
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
            <div class="card-body ">
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputdate">From Date</label>
                                            <input type="date" class="form-control form-control-sm mb-3"
                                                id="exampleInputdate" value="2019-12-18">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputdate">To Date</label>
                                            <input type="date" class="form-control form-control-sm mb-3"
                                                id="exampleInputdate" value="2019-12-18">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4 pt-2">
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
                </div> <!-- first table  -->
                <div class="card-body">
                    <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service Name</th>
                                    <th>Total Hits</th>
                                    <th>Total Amount</th>
                                    <th>Success Hits</th>
                                    <th>Success Amount</th>
                                    <th>Failed Hits</th>
                                    <th>Failed Amount</th>
                                    <th>Pending Hits</th>
                                    <th>Pending Amount</th>
                                    <th>Commission</th>
                                    <th>Surchatge</th>
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
                    <div class="card-footer border-top d-flex justify-content-between ">
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
                <!-- partition div  -->
                <div class="border-top"></div>
                <!-- partition div  -->

                <!-- second table  -->
                <div class="card-body">
                    <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th>Total Sum</th>
                                    <th>Total Hits</th>
                                    <th>Total Amount</th>
                                    <th>Success Hits</th>
                                    <th>Success Amount</th>
                                    <th>Failed Hits</th>
                                    <th>Failed Amount</th>
                                    <th>Pending Hits</th>
                                    <th>Pending Amount</th>
                                    <th>Commission</th>
                                    <th>Surchatge</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="card-footer border-top d-flex justify-content-between  flex-wrap">
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
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
