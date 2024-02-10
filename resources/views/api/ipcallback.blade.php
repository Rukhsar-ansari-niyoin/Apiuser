
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
            <div class="card">
        <div class="card-header">
          <div
            class="d-flex justify-content-between align-items-center flex-wrap"
          >
            <div>
              <h5>IP CALLBACK SETTINGS</h5>
            </div>
            <div class="d-flex gap-2 py-2">
              <p class="text-sm text-black mb-0">Developer Zone</p>
              <div id="svg-container-15">
                <svg
                  class="icon-18"
                  width="32"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M8.5 5L15.5 12L8.5 19"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <p class="text-sm mb-0">IP Callback Settings</p>
            </div>
          </div>
        </div>
      </div>
      <!-- main title  -->
      <!-- table 1  -->
      <div class="container-fluid container-inner py-0">
        
        <div class="card">

         <div class="d-flex justify-content-between">
            <div> <p class="card-header text-black">WEBHOOKS</p></div>
            <div>
                <button type="button" class="btn btn-light shadow-sm text-primary bg-body rounded m-lg-3 p-1">
                DOCUMENTATION<svg class="icon-14" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">  <mask maskUnits="userSpaceOnUse" x="3" y="0" width="18" height="24" fill="black">                                    <rect fill="white" x="3" width="18" height="24"></rect>                                    <path d="M4 3.00004C4 1.89547 4.89543 1.00004 6 1.00004H13.0801C13.664 1.00004 14.2187 1.25517 14.5986 1.69845L19.5185 7.43826C19.8292 7.80075 20 8.26243 20 8.73985V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V3.00004Z"></path>                                    </mask>                                    <path d="M4 3.00004C4 1.89547 4.89543 1.00004 6 1.00004H13.0801C13.664 1.00004 14.2187 1.25517 14.5986 1.69845L19.5185 7.43826C19.8292 7.80075 20 8.26243 20 8.73985V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V3.00004Z" fill="#130F26" fill-opacity="0.4"></path>                                    <path d="M4 3.00004C4 1.89547 4.89543 1.00004 6 1.00004H13.0801C13.664 1.00004 14.2187 1.25517 14.5986 1.69845L19.5185 7.43826C19.8292 7.80075 20 8.26243 20 8.73985V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V3.00004Z" stroke="#130F26" stroke-width="2" mask="url(#path-1-outside-1)"></path>                                    <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="0" width="18" height="24">                                    <mask mask-type="luminance" maskUnits="userSpaceOnUse" x="3" y="0" width="18" height="24" fill="black">                                    <rect fill="white" x="3" width="18" height="24"></rect>                                    <path d="M4 3.00004C4 1.89547 4.89543 1.00004 6 1.00004H13.0801C13.664 1.00004 14.2187 1.25517 14.5986 1.69845L19.5185 7.43826C19.8292 7.80075 20 8.26243 20 8.73985V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V3.00004Z"></path>                                    </mask>                                    <path d="M4 3.00004C4 1.89547 4.89543 1.00004 6 1.00004H13.0801C13.664 1.00004 14.2187 1.25517 14.5986 1.69845L19.5185 7.43826C19.8292 7.80075 20 8.26243 20 8.73985V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V3.00004Z" fill="#130F26"></path>                                    <path d="M4 3.00004C4 1.89547 4.89543 1.00004 6 1.00004H13.0801C13.664 1.00004 14.2187 1.25517 14.5986 1.69845L19.5185 7.43826C19.8292 7.80075 20 8.26243 20 8.73985V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V3.00004Z" stroke="#130F26" stroke-width="2" mask="url(#path-2-outside-2)"></path>                                    </mask>                                    <path d="M14 6V0L21 8H16C14.8954 8 14 7.10457 14 6Z" stroke="#130F26"></path>                                    <mask fill="white">                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"></path>                                    </mask>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z" stroke="#130F26" stroke-width="2" stroke-linecap="round" mask="url(#path-4-inside-3)"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="#130F26"></path>                                    <mask fill="white">                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.1031C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"></path>                                    </mask>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.1031C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z" stroke="#130F26" stroke-width="2" stroke-linecap="round" mask="url(#path-6-inside-4)"></path>                                </svg>
              </button>
            </div>
        </div>
         <div class="d-flex justify-content-between m-lg-4">
          
          <div class="w-75">
            <label for="email"><span class="text-dark">Enter Webhook URL</span>  <span class="text-danger">(Please don't put (?) mark)</span></label>
            <input type="email" class="form-control" id="email">
          </div>
          <div>
            <label for="email"></label> <br>
            <button type="button" class="btn btn-success">
                Update
              </button>
        </div>
          </div>
        </div>
        
      </div>

      <!-- body table end -->
      <!-- body next section start -->
      <div class="container-fluid container-inner py-0">
        <div class="card">
            <div class="d-flex justify-content-between">
                <div> <p class="card-header text-black">API KEYS</p></div>
                <div>
                    <button type="button" class="btn btn-primary m-lg-3 p-1">
                    Re-Generate Key
                  </button>
                </div>
            </div>
          <div class="row">
          
            <hr />
            <div class="row">
              <div class="col-sm-12 m-lg-4">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table
                        id="basic-table"
                        class="table table-striped mb-0"
                        role="grid"
                      >
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Token</th>
                            <th>Date & Time</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Click on Re-Generate to generate token</td>
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
      <!-- body next sections end -->
      <!-- body 3rd section start -->
      <div class="container-fluid container-inner py-0">
        <div class="card">
            <div class="d-flex justify-content-between">
                <div> <p class="card-header text-black"> <span class="text-dark">White Listed IP
                    </span> <br> <span class="text-danger">   Only 3 IP White Listed</span> </p></div>
                <div>
                    <button type="button" class="btn btn-primary m-lg-3 p-1">
                        <svg class="icon-22" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z" fill="currentColor"></path>                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>                                <path d="M14.3672 12.2364H12.6392V10.5094C12.6392 10.0984 12.3062 9.7644 11.8952 9.7644C11.4842 9.7644 11.1502 10.0984 11.1502 10.5094V12.2364H9.4232C9.0122 12.2364 8.6792 12.5704 8.6792 12.9814C8.6792 13.3924 9.0122 13.7264 9.4232 13.7264H11.1502V15.4524C11.1502 15.8634 11.4842 16.1974 11.8952 16.1974C12.3062 16.1974 12.6392 15.8634 12.6392 15.4524V13.7264H14.3672C14.7782 13.7264 15.1122 13.3924 15.1122 12.9814C15.1122 12.5704 14.7782 12.2364 14.3672 12.2364Z" fill="currentColor"></path>                                </svg>                             Add Id
                  </button>
                </div>
            </div>
          <div class="row">
          
            <hr />
            <div class="row">
              <div class="col-sm-12 m-lg-4">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table
                        id="basic-table"
                        class="table table-striped mb-0"
                        role="grid"
                      >
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>IP Address</th>
                            <th>Status</th>
                            <th>Date & Time</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>No matching records found</td>
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
