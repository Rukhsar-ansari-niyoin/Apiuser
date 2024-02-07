
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
               <!-- body bank list table start frome here -->
        <div class="container-fluid container-inner py-0">
            <div class="card p-4">
                <div class="row">
                  <h6>Low Balance Alert Settings</h6>
                  <hr>
                  <div class="entry-content">
                    <h6>Note :</h6>
                    <ul>
                        <span class="text-dark"> <li>Alerts will be triggered once your account balance falls below the set threshold.</span></li>
                       <li><span class="text-dark">These alerts serve as a proactive measure to help you manage your wallet and take necessary actions when your balance nears the threshold.</span></li>
                       <li><span class="text-dark">We'll notify you at two-minute intervals while your transaction is in progress.</span></li>
                       <li><span class="text-dark">You can add multiple WhatsApp numbers or email IDs, separated by commas.</span></li>
                       <li><span class="text-dark">We won't send you low balance alerts if your transaction hasn't occurred.</span></li>
              
                     </ul>
                   </div>
<hr>
<form>
    <div class="mb-3 col-lg-6">
      <label for="exampleInputEmail1" class="form-label"><span class="text-dark">Enter Threshold Limit (₹)</span> </label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="exampleInputPassword1" class="form-label"><span class="text-dark">Enter Whatsapp Numbers</span>  [Ex. 1234567890, 97000000, 98000000]</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 col-lg-6">
        <label for="exampleInputPassword1" class="form-label">
            <span class="text-dark">Enter Email Ids </span>[Ex. test@test.com, test2@test.com, test3@test.com]</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 col-lg-6">
        <span class="text-dark">Alert Status</span> </label>
        <select class="form-select" aria-label="Default select example">
            <option value="2">Active</option>
            <option value="3">Inactive</option>
          </select>
      </div>
  
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
<!-- end table -->


                    </div>
             
               
            </div>
        </div>   
 <!-- body bank list table start frome here -->
      
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
