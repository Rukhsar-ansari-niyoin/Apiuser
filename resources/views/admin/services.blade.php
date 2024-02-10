
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
               <!-- manage serices  section start  -->
        <div class="conatiner-fluid mt-5">

<div class="card px-4 rounded-0 py-2">
    <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2">View All Services</p>
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
                        <th class="text-black">Service Title</th>
                        <th class="text-black">Created on</th>
                        <th class="text-black">Status</th>
                        <th class="text-black">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mobile Recharge</td>
                        <td>10 - Feb - 2024 08:04 AM</td>
                        <td>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                    checked="">
                            </div>

                        </td>
                        <td>
                            <a href="../dashboard/edit_service.html"
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
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
