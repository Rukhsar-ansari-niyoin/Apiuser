
<x-app-layout :assets="$assets ?? []">
<div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">{{ $pageTitle ?? 'List'}}</h4>
               </div>
                <!-- <div class="card-action">
                    {!! $headerAction ?? '' !!}
                </div> -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  <i class="fa-solid fa-plus"></i> &nbsp; Payment Request
</button>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Submit Payment Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- model form start -->

      <div class="row">
 
        <div class="col-md-6">
          <div class="form-group">
            <label for="disabledTextInput" class="form-label">Deposit Bank *</label>
            <select class="form-select" aria-label="Disabled select example">
              <!-- <input type="password" class="form-control" name="pwd" placeholder="05-02-2024"> -->
              <option selected="">Select Bank</option>
              <option value="1">HDFC BANK LTD - 50200047851173</option>
              <option value="2">IDFC First Bank Limited - 10157936547</option>
             
            </select>
             
          </div>
      </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="disabledTextInput" class="form-label">Payment Mode *</label>
              <select class="form-select" aria-label="Disabled select example">
                <!-- <input type="password" class="form-control" name="pwd" placeholder="05-02-2024"> -->
                <option selected="">Select Bank</option>
                <option value="1">IMPS/UPI</option>
                <option value="2">NEFT/RTGS</option>
                <option value="3">Same Bank Transfer</option>
                <option value="3">Cash Deposite</option>
              </select>
               
            </div>
        </div>
       
        <div class="col-md-6">
          <div class="form-group">
            <label for="disabledTextInput" class="form-label">Amount *</label>
            <input type="password" class="form-control" name="pwd" placeholder="Enter Amount">
             
          </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="disabledTextInput" class="form-label">Payment Date *<label>
            <input type="password" class="form-control" name="pwd" placeholder="05-02-2024">
           
        </div>
    </div>


    <div class="col-md-6">
      <div class="form-group">
        <label for="disabledTextInput" class="form-label">Refernce No/UTR No<label>
          <input type="password" class="form-control" name="pwd" placeholder="Refernce No /UTR No">
         
      </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="disabledTextInput" class="form-label">Cash Slip Or Screen Shot<label>
        <input class="form-control" type="file" id="formFile">
        
       s
    </div>
</div>


        </div>
      <!-- model form end -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
            </div>
            <div class="card-body px-0">
               <div class="table-responsive">
               <table id="datatable" class="table table-striped" data-toggle="data-table">
                  <thead>
                     <tr>
                        <th>Agent ID</th>
                        <th>Agents Name</th>
                        <th>Agent Shop Name</th>
                        <th>Agent Mobile</th>
                        <th>Created at</th>
                        <th>Agent State</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                   
                  
                
                    
                     <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                        <td>$183,000</td>
                     </tr>
                     <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                        <td>$183,000</td>
                     </tr>
                     <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
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
