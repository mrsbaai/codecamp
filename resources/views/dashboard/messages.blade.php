@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
        <div class="card">
             <div class="card-header ">
                Inbound Messages 
                <div class="form-group col-md-4 offset-md-8 text-right">
                <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Delete All</a>
                </div>
             </div>
             <div class="card-body p-0">
             <table class="table table-striped">
               <thead>
                    <tr>
                       <th class="col-lg-4">From</th>
                       <th class="col-lg-6">Subject</th>
                       <th class="col-lg-2"></th>
                   </tr>
               </thead>
               <tbody>
                    <tr>
                       <td>Mark</td>
 
                       <td><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">This is a test subject to test</a></td>
                       <td>
                        <div class="form-group col-md-4 offset-md-8 text-right">
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        
                           
                        </td> 
                     </tr>
 
               </tbody>
           </table>
           </div>
        </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">New message from</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <div class="modal-body">
                        <div class="row">
                           <div class="col-sm-3">
                               <h6 class="mb-0"><strong>Name</strong></h6>
                           </div>
                           <div class="col-sm-9 ">
                               Mark
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                               <h6 class="mb-0"><strong>Email</strong></h6>
                           </div>
                           <div class="col-sm-9 ">
                               Mark@gmail.com
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                               <h6 class="mb-0"><strong>Phone</strong></h6>
                           </div>
                           <div class="col-sm-9 ">
                               09876554
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                               <h6 class="mb-0"><strong>Message</strong></h6>
                           </div>
                           <div class="col-sm-9 ">
                               Hello Ikram....
                           </div>
                        </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-dark" data-dismiss="modal">Delete</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
           </div>
       </div>
    </div>
</div>
@endsection


@section('title')
Messages
@endsection
