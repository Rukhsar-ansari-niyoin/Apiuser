
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
             <!-- all commision  section start  -->
        <div class="conatiner-fluid mt-5">

<div class="card px-4 rounded-0 py-2">
    <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2">View All Commission Slots</p>
    <div class="card-body">
        <div class="d-flex justify-content-between flex-column flex-md-row flex-lg-row flex-xl-row">
            <div>
                <div class="form-group">
                    <label class="form-label text-black">Show entries</label>
                    <select class="form-select form-select-sm mb-3 shadow-none">
                        <option selected="">10</option>
                        <option value="1">50</option>
                        <option value="2">100</option>
                        <option value="3">150</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                        placeholder="Search">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="basic-table" class="table table-striped mb-0 rounded-1" role="grid">
                <thead class="rounded-1">
                    <tr>
                        <th class="text-black">#</th>
                        <th class="text-black">User Type</th>
                        <th class="text-black">Service</th>
                        <th class="text-black">Commision Type</th>
                        <th class="text-black">Amount Range</th>
                        <th class="text-black">Amount / Percentage</th>
                        <th class="text-black">Plan</th>
                        <th class="text-black">Chain Type</th>
                        <th class="text-black">Status</th>
                        <th class="text-black">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Retailer</td>
                        <td>
                            <p class="m-0">Mobile Recharge</p>
                            <span class="text-primary">Airtel</span>
                        </td>

                        <td>
                            By Percentage
                        </td>
                        <td>
                            Rs. 1.00 - 10000.00
                        </td>
                        <td>
                            2.50%
                        </td>
                        <td>
                            Smart Retailer
                        </td>
                        <td>
                            Chain
                        </td>
                        <td>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                    checked="">
                            </div>

                        </td>
                        <td class="d-flex gap-1 align-items-center justify-content-center">
                            <div class="mt-1">
                                <a href="../dashboard/edit_commision_slot.html"
                                    class="bg-soft-primary border-0 text-center rounded-1 px-2 py-1">
                                    <svg class="icon-24 mb-1" width="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
                                    href="#"
                                    class="bg-soft-danger border-0 text-center rounded-1 px-2 pt-0">
                                    <svg class="icon-24 mb-1" width="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- model section start  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4>Are you sure?</h4>
                        <p>You will not be able to recover this data!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft-primary" data-bs-dismiss="modal">No,
                            Cancel!</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModaldelete">Yes, Delete it!</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- model section end  -->
        <!-- delete model start  -->
        <div class="modal fade" id="exampleModaldelete" tabindex="-1"
            aria-labelledby="exampleModadeletelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-success" id="exampleModaldeleteLabel">Deleted!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-success">Deleted successfuly!</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft-success"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete model end  -->
        <!-- pagination  -->
        <div
            class="d-flex mt-3 justify-content-between align-items-center flex-column flex-md-row flex-lg-row flex-xl-row">
            <div>
                <p class="text-black">Showing <span>1</span> to <span>10</span> of <span>22</span></p>
            </div>
            <div class="bd-example">
                <nav aria-label="Standard pagination example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

</div>
<!-- all commision section end  -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
