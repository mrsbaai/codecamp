@extends('layouts.dashboard')


@section('content')
<div class="container">
   <div class="row justify-content-center ">
       <div class="col-lg-12">
          <table class="table table-bordered">
              <thead>
                  <tr class="table-active">
                     <th class="text-center"  scope="col">Title</th>
                     <th class="text-center"  scope="col">Full name</th>
                     <th class="text-center" scope="col">Phone</th>
                     <th class="text-center"  scope="col">Email</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                     <th class="text-center" scope="row">Online Business Resolution</th>
                     <th class="text-center" scope="row">Adam Adam</th>
                     <td class="text-center">09876433</td>
                     <td class="text-center">Adam@gmail.com</td>
                 </tr>
             </tbody>
          </table>
        </div>
   </div>
</div>
@endsection


@section('title')
Event subscribers
@endsection

