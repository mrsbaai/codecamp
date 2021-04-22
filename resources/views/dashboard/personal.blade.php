
@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">
     <div class="col-lg-8 m-3">
         <div class="card">
             <div class="card-header">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                         <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" id="update-tab" data-toggle="tab" href="#update" role="tab" aria-controls="update" aria-selected="false">Update</a>
                     </li>
                 </ul>
              </div>
              <div class="card-body">
                   <div class="tab-content" id="myTabContent">
                       <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="row">
                             <div class="col-sm-3">
                                 <h6 class="mb-0"><strong>User Name</strong></h6>
                             </div>
                             <div class="col-sm-9 ">
                                 {{ Auth::user()->username }}
                             </div>
                          </div>
                          <hr>
                          <div class="row">
                             <div class="col-sm-3">
                                 <h6 class="mb-0"><strong>First Name</strong></h6>
                             </div>
                             <div class="col-sm-9 ">
                                 {{ Auth::user()->first_name }}
                             </div>
                          </div>
                          <hr>
                          <div class="row">
                               <div class="col-sm-3">
                                  <h6 class="mb-0"><strong>Last Name</strong></h6>
                               </div>
                               <div class="col-sm-9 ">
                                   {{ Auth::user()->last_name }}
                               </div>
                          </div>
                          <hr>
                          <div class="row">
                             <div class="col-sm-3">
                                 <h6 class="mb-0"><strong>City</strong></h6>
                             </div>
                             <div class="col-sm-9 ">
                                 {{ Auth::user()->city }}
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                              <div class="col-sm-3">
                                  <h6 class="mb-0"><strong>Phone</strong></h6>
                              </div>
                              <div class="col-sm-9 ">
                                  {{ Auth::user()->phone }}
                             </div>
                          </div>
                          <hr>
                          <div class="row">
                             <div class="col-sm-3 ">
                                  <h6 class="mb-0"><strong>Email</strong></h6>
                             </div>
                             <div class="col-sm-9">
                                 {{ Auth::user()->email }}
                             </div>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-tab">
                          <form>
                              <div class="form-row">
                                 <div class="form-group col-md-4">
                                     <label for="first_name">First Name</label>
                                     <input type="text" name="first_name" class="form-control" id="first_name" value="{{ Auth::user()->first_name }}">
                                 </div>
                                 <div class="form-group col-md-4">
                                     <label for="last_name">Last Name</label>
                                     <input type="text" name="last_name" class="form-control" id="last_name" value="{{ Auth::user()->last_name }}">
                                 </div>
                                 <div class="form-group col-md-4">
                                     <label for="username">User Name</label>
                                     <input type="text" name="username" class="form-control" id="username" value="{{ Auth::user()->username }}">
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                     <label for="adress">City</label>
                                     <input type="text" name="city" class="form-control" id="city" value="{{ Auth::user()->city }}">
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="phone">Phone</label>
                                      <input type="tel" name="phone" class="form-control" id="phone" value="{{ Auth::user()->phone }}">
                                  </div>  
                                  <div class="form-group col-md-6">
                                     <label for="email">Email</label>
                                      <input type="text" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
                                  </div>                    
                              </div>
                              <div class="form-group row mb-0">
                                 <div class="col-md-8 offset-md-4 text-right">
                                    <button type="submit" class="btn btn-dark">
                                        Update Info
                                   </button>
                               </div>
                        </div>
                          </form>
                       </div>
                  </div>                
             </div>
          </div>
     </div>
  </div>
</div>
@endsection

@section('title')
Personal Info
@endsection
