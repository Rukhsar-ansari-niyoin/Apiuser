
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
               <!-- add new commision  section start  -->
        <div class="conatiner-fluid mt-5">

<div class="card px-4 rounded-0 py-2">
    <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2">Add Commission Slot</p>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label text-black">User Type<span class="text-danger">*</span></label>
                    <select class="form-select text-black form-select-sm mb-3 shadow-none">
                        <option selected="">--choose--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label text-black">Plan<span class="text-danger">*</span></label>
                    <select class="form-select text-black form-select-sm mb-3 shadow-none">
                        <option selected="">--choose--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label text-black">Service<span class="text-danger">*</span></label>
                    <select class="form-select text-black form-select-sm mb-3 shadow-none">
                        <option selected="">--choose--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label text-black">Commission Type<span
                            class="text-danger">*</span></label>
                    <select class="form-select text-black form-select-sm mb-3 shadow-none">
                        <option selected="">--choose--</option>
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
                    <label class="form-label text-black" for="colFormLabelSm">From Amount<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                        placeholder="From amount">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="customFile2" class="form-label custom-file-input text-black">To
                        Amount</label>
                    <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                        placeholder="To amount">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="customFile2" class="form-label custom-file-input text-black">TDS / GST
                        (In%)</label>
                    <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                        placeholder="Enter TDS / GST Charges">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label text-black">Chain Type<span
                            class="text-danger">*</span></label>
                    <select class="form-select text-black form-select-sm mb-3 shadow-none">
                        <option selected="">--choose--</option>
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
                    <label class="form-label text-black">Transaction Type<span
                            class="text-danger">*</span></label>
                    <select class="form-select text-black form-select-sm mb-3 shadow-none">
                        <option selected="">--choose--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="customFile2" class="form-label custom-file-input text-black">For Any
                        Specific User</label>
                    <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                        placeholder="Enter usr name">
                </div>
            </div>
        </div>
        <div class="mt-2">
            <button class="btn btn-success btn-sm">Submit</button>
        </div>
    </div>
</div>

</div>
<!-- add new commision section end  -->
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
