
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
            <div class="container-fluid container-inner py-0">
            <div class="card">
                <p class="card-header text-black">Credit / Debit List</p>
                <div class=" card-body d-flex justify-content-center">
                    <form action="" class="row d-flex align-items-center ">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputdate">From Date</label>
                                <input type="date" class="form-control form-control-sm mb-3" id="exampleInputdate"
                                    value="2019-12-18">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputdate">To Date</label>
                                <input type="date" class="form-control form-control-sm mb-3" id="exampleInputdate"
                                    value="2019-12-18">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="form-label">Type</label>
                                <select class="form-select form-select-sm mb-3 shadow-none">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 pt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <svg class="icon-16 mb-1" width="18" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Filter
                                </button>
                                <button type="submit" class="btn btn-danger btn-sm">cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
               <table id="datatable" class="table table-striped" data-toggle="data-table">
                  <thead>
                     <tr>
                     <th>Txn Id</th>
                                            <th>DC / DR</th>
                                            <th>Date & Time</th>
                                            <th>Openinng Balance</th>
                                            <th>Amount</th>
                                            <th>Closing Balance</th>
                                            <th>Payment Mode</th>
                                            <th>UTR No</th>
                                            <th>Remark</th>
                     </tr>
                  </thead>
                  <tbody>
                   
                  
                
                    
                     <tr>
                     <td>1</td>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                        <td>$183,000</td>
                        <td>$183,000</td>
                     </tr>
                     <tr>
                     <td>2</td>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                        <td>$183,000</td>
                        <td>$183,000</td>
                     </tr>
                  </tbody>
                  <!-- <tfoot>
                     <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                     </tr>
                  </tfoot> -->
               </table>
               </div>
    
      
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
