@extends('layouts.dashboard')


@section('content')
<div class="container">
    <div class="text-center">  
        <h3>Coworking requests</h3>
   </div>
   <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="text-left">  
                <h5>New requests</h5>
            </div>
           <table class="table table-bordered">
               <thead>
                   <tr class="table-active">
                      <th class="text-center"  scope="col">User id</th>
                      <th class="text-center"  scope="col">Name</th>
                      <th class="text-center" scope="col">Phone</th>
                      <th class="text-center"  scope="col">City</th>
                      <th class="text-center"  scope="col">Notes</th>
                      <th class="text-center"  scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                  <tr>
                      <th class="text-center" scope="row">1</th>
                      <th class="text-center" scope="row">Adam Adam</th>
                      <td class="text-center">09876433</td>
                      <td class="text-center">Tetouan</td>
                      <td class="text-center"><textarea></textarea></td>
                      <td>
                         <div class="row justify-content-center ">
                          <div class="col-lg-4">
                              <div class="text-center ">
                                  <button type="submit" class="btn btn-outline-dark"><i class="fas fa-edit"></i>Update</button>
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="text-center ">
                                  <button type="submit" class=" btn btn-outline-dark"><i class="fas fa-eye-slash"></i> Archive</button>
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="text-center ">
                                  <button type="submit" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i>Delete</button>
                              </div>
                          </div>
                          </div>
                      </td>                
                   </tr>
              </tbody>
           </table>
         </div>
    </div>
 
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="text-left">  
                <h5>Processed requests </h5>
            </div>
           <table class="table table-bordered">
               <thead>
                   <tr class="table-active">
                      <th class="text-center"  scope="col">User id</th>
                      <th class="text-center"  scope="col">Name</th>
                      <th class="text-center" scope="col">Phone</th>
                      <th class="text-center"  scope="col">City</th>
                      <th class="text-center"  scope="col">Notes</th>
                      <th class="text-center"  scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                  <tr>
                      <th class="text-center" scope="row">1</th>
                      <th class="text-center" scope="row">Adam Adam</th>
                      <td class="text-center">09876433</td>
                      <td class="text-center">Tetouan</td>
                      <td class="text-center">.....</td>
                      <td>
                          <div class="row justify-content-center ">
                            <div class="col-lg-4">
                              <div class="text-center ">
                                  <button type="submit" class="btn btn-outline-dark"><i class="fas fa-plus-square"></i> Paid</button>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="text-center ">
                                  <button type="submit" class=" btn btn-outline-dark"><i class="fas fa-eye-slash"></i> Archive</button>
                              </div>
                            </div>
                          </div>
                      </td>                
                   </tr>
              </tbody>
           </table>
         </div>
    </div>
 </div>
@endsection


@section('title')
Coworking Requests
@endsection

