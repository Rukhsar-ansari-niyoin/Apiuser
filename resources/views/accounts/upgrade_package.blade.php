1
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
            <div class="card-body">
                    <h5 class="card-title">Choose the plan that's right for you</h5>
                    <p class="card-text">Simple pricing. No hidden fees. Advanced features for your business.</p>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-3 text-center px-4">

                    <div class="col">
                        <div class="card mb-4 rounded-3 ">

                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0<small
                                        class="text-muted fw-light">/mo</small>
                                </h1>
                                <h4 class="my-0 fw-normal mt-3">Free</h4>
                                <ul class="list-unstyled my-3 p-0">
                                    <li>
                                        <p>10 users included</p>
                                    </li>
                                    <li>
                                        <p>2 GB of storage</p>
                                    </li>
                                    <li>
                                        <p>Email support</p>
                                    </li>
                                    <li>
                                        <p>Help center access</p>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-outline-secondary disabled">Sign up for
                                    free</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 ">
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$15<small
                                        class="text-muted fw-light">/mo</small>
                                </h1>
                                <h4 class="my-0 fw-normal mt-3">Pro</h4>
                                <ul class="list-unstyled my-3 p-0">
                                    <li>
                                        <p>20 users included</p>
                                    </li>
                                    <li>
                                        <p>10 GB of storage</p>
                                    </li>
                                    <li>
                                        <p>Priority email support</p>
                                    </li>
                                    <li>
                                        <p>Help center access</p>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-outline-primary">Get started</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 ">
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$29<small
                                        class="text-muted fw-light">/mo</small>
                                </h1>
                                <h4 class="my-0 fw-normal mt-3">Enterprise</h4>
                                <ul class="list-unstyled my-3 p-0">
                                    <li>
                                        <p>30 users included</p>
                                    </li>
                                    <li>
                                        <p>15 GB of storage</p>
                                    </li>
                                    <li>
                                        <p>Call and email support</p>
                                    </li>
                                    <li>
                                        <p>Help center access</p>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 ">
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$49<small
                                        class="text-muted fw-light">/mo</small>
                                </h1>
                                <h4 class="my-0 fw-normal mt-3">Premium</h4>
                                <ul class="list-unstyled my-3 p-0">
                                    <li>
                                        <p>50 users included</p>
                                    </li>
                                    <li>
                                        <p>60 GB of storage</p>
                                    </li>
                                    <li>
                                        <p>24 X 7 call support</p>
                                    </li>
                                    <li>
                                        <p>Help center access</p>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-header pb-3">
                    <h3 class="block-title">Features</h3>
                </div> -->
                <div class="card-body p-0 px-2">
                    <div class="table-responsive pricing pt-2">
                        <table id="my-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center prc-wrap"></th>
                                    <th class="text-center prc-wrap">
                                        <div class="prc-box">
                                            <div class="h3 pt-4">$0<small> / month</small>
                                            </div> <span class="type">Free</span>
                                        </div>
                                    </th>
                                    <th class="text-center prc-wrap">
                                        <div class="prc-box active">
                                            <div class="h3 pt-4">$15<small> / month</small>
                                            </div> <span class="type">Pro</span>
                                        </div>
                                    </th>
                                    <th class="text-center prc-wrap">
                                        <div class="prc-box">
                                            <div class="h3 pt-4">$29<small> / month</small>
                                            </div> <span class="type">Enterprise</span>
                                        </div>
                                    </th>
                                    <th class="text-center prc-wrap">
                                        <div class="prc-box">
                                            <div class="h3 pt-4">$49<small> / month</small>
                                            </div> <span class="type">Premium</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Features 1</th>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell active">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Features 2</th>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 20L20 4M20 20L4 4" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell active">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Features 3</th>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 20L20 4M20 20L4 4" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell active">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Features 4</th>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell active">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Features 5</th>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 20L20 4M20 20L4 4" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell active">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 20L20 4M20 20L4 4" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                    <td class="text-center child-cell">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 4.72059 17.3493L1 10.4798"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Free</a>
                                    </td>
                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Purchase</a>
                                    </td>
                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Purchase</a>
                                    </td>
                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Purchase</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- pricing card start  -->
            <div class="card">

            </div>

            <!-- pricing card end  -->
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
