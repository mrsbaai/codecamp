@extends('layouts.dashboard')


@section('content')
<div class="container">
    <div class="text-center">  
       <h3>News</h3>
   </div>
    <div class="row m-3">  
        <a class="btn btn-primary" href="new_article" role="button"><i class="fas fa-plus-square"></i> Add new article </a> 
    </div>
   </div>
   <div class="row justify-content-center">
       <div class="col-lg-12 ">
          <table class="table table-bordered">
              <thead>
                  <tr class="table-active">
                     <th class="text-center"  scope="col">id</th>
                     <th class="text-center" scope="col">Title</th>
                     <th class="text-center"  scope="col">Category</th>
                     <th class="text-center"  scope="col">Created at</th>
                     <th class="text-center"  scope="col">Actions</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                     <th class="text-center" scope="row">1</th>
                     <td class="text-center">Dolorum optio tempore voluptas</td>
                     <td class="text-center">Training</td>
                     <td class="text-center">07/04/2021</td>
                     <td>
                        <div class="row justify-content-center ">
                         <div class="col-lg-4">
                             <div class="text-center ">
                                 <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-edit"></i> Edit </a> 
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div class="text-center ">
                                 <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Delete</a> 
                             </div>
                         </div>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <th class="text-center" scope="row">2</th>
                     <td class="text-center">Dolorum optio tempore voluptas</td>
                     <td class="text-center">Event</td>
                     <td class="text-center">07/04/2021</td>
                     <td>
                        <div class="row justify-content-center ">
                         <div class="col-lg-4">
                             <div class="text-center ">
                                 <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-edit"></i> Edit </a> 
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div class="text-center ">
                                 <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Delete </a> 
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
Edit News
@endsection

