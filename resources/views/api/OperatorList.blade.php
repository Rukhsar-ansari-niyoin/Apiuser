
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
            
        <!-- main title  -->
        <!-- table 1  -->
        <div class="container-fluid container-inner py-0">
            <div class="card">
                <p class="card-header text-black">Operator List</p>
                <div class="row">
                    <div class="col-md-6 m-lg-4 w-50">
                      <div class="form-group">
                        <select class="form-select" aria-label="Disabled select example">
                          <option selected="">Select Service Category</option>
                          <option value="1">Broadband</option>
                          <option value="2">Cable Tv</option>
                          <option value="3">Clubs And Associations</option>
                          <option value="3">Credit Card</option>
                          <option value="3">Electricity</option>
                          <option value="3">Fastag</option>
                          <option value="3">Hosting And Pathology</option>
                          <option value="3">Hosting Society</option>
                          <option value="3">Insurance Premium</option>
                          <option value="3">Landline</option>
                          <option value="3">Loan Repayment</option>
                          <option value="3">LPG Gas</option>
                          <option value="3">Municipal Taxes</option>
                          <option value="3">Piped Gas</option>
                          <option value="3">Subscription Payment</option>
                          <option value="3">Water</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-5 m-lg-4">
                      <div class="form-group">
                        <button type="button" class="btn btn-primary "> Search_Records</button>
                      </div>
                    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 m-lg-4">
            <div class="card">

                <div class="card-body p-0">
                    <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th>Operator Name</th>
                                    <th>P2</th>
                                    <th>P3</th>
                                    <th>P4</th>
                                    <th>p5</th>
                                    <th>P6</th>
                                    <th>Descriptrion</th>
                                    <th>Bill Fetch Requried</th>
                                    <th>Attachment</th>
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
</div>
</x-app-layout>
