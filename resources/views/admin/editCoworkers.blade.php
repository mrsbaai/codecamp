@extends('layouts.dashboard')


@section('content')
<div class="container">
    <div class="text-center">  
         <h3>Coworkers</h3>
    </div>
   <div class="row justify-content-center ">
       <div class="col-lg-12">
          <table class="table table-bordered">
              <thead>
                  <tr class="table-active">
                     <th class="text-center"  scope="col">Full name</th>
                     <th class="text-center" scope="col">Phone</th>
                     <th class="text-center"  scope="col">City</th>
                     <th class="text-center"  scope="col">Is active</th>
                     <th class="text-center"  scope="col">Is paid</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                     <th class="text-center" scope="row">Adam Adam</th>
                     <td class="text-center">09876433</td>
                     <td class="text-center">Tetouan</td>
                     <td class="text-center"><button type="submit" class="btn btn-success">Activate</button></td>
                     <td class="text-center"><button type="submit" class="btn btn-success">Pay now</button></td>
                 </tr>
             </tbody>
          </table>
        </div>
   </div>
</div>
@endsection


@section('title')
Edit Coworkers
@endsection

