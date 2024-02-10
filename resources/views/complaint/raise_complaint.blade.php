
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
               <!-- main content start  -->
        <div class="conatiner-fluid mt-4 px-4 py-0">
            <div class="card p-2">
                <div class="bd-example">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <div class="d-flex flex-row justify-content-between align-items-center py-2 w-100">
                                <div class="d-flex px-1">
                                    <a class="border-0 text-danger border-bottom border-2 border-danger rounded-1">Raise
                                        New Request</a>
                                </div>
                                <div class="d-flex pe-1">
                                    <button class="btn btn-soft-danger btn-sm">
                                        Track Complaint
                                    </button>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="card-body">
                    <p class="text-black-50">
                        Select nature of your request (Help us understand your concern)
                    </p>
                    <div class="border-top mb-5"></div>
                    <div>
                        <button type="button" class="btn btn-outline-danger mt-2">
                            Account Activation
                        </button>
                        <button type="button" class="btn btn-outline-danger mt-2">
                            Account Configuration/changes
                        </button>
                        <button type="button" class="btn btn-outline-danger mt-2">
                            eValue Related
                        </button>
                        <button type="button" class="btn btn-outline-danger mt-2">
                            Technical Assistance
                        </button>
                        <button type="button" class="btn btn-outline-danger mt-2">
                            Other
                        </button>
                        <button type="button" class="btn btn-outline-danger mt-2">
                            Transactions Related
                        </button>
                        <button type="button" class="btn btn-outline-danger mt-2">
                            Fund Settlement Related
                        </button>

                        <button type="button" class="btn btn-outline-danger mt-2">
                            Tech Issue/Api Integration Related Issues
                        </button>
                    </div>
                </div>
                <!-- table start  -->
                <div class="card-body">
                    <div class="table-responsive mt-4"></div>
                    <hr />
                    <div class="">
                        <!-- <p>Showing 0 to 0 of 0 entries</p> -->
                        <div>
                            <button class="bg-transparent border-0"></button>
                            <button class="bg-transparent border-0"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content end  -->
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
