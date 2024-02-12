
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
               <!-- add fund  section start  -->
        <div class="conatiner-fluid mt-5">

<div class="card px-4 rounded-0 py-2">
    <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2">Add Funds To Your Admin Wallet
    </p>
    <div class="card-body">
        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label for="customFile2" class="form-label custom-file-input text-black">
                        Amount<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                        placeholder="Enter amount">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label text-black">Txn Type<span class="text-danger">*</span></label>
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
                    <label for="customFile2" class="form-label custom-file-input text-black">
                        Remark<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                        placeholder="Enter remark">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mt-md-4 mt-lg-4 mt-xl-4">
                    <button class="btn btn-primary btn-sm mt-md-2 mt-lg-2 mt-xl-2">Submit</button>
                </div>
            </div>
        </div>


    </div>
</div>

</div>
<!-- add fund section end  -->
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
