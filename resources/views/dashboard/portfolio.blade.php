@extends('layouts.dashboard')
@section('content')
<div class="container pt-4">
   <div class="row">
      <div class="col-xl-6 pb-5">
         <div class="card">
            <div class="card-header">
               Edit portfolio
            </div>
            <div class="card-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                   <span class="input-group-text">{{ __('First Name') }}</span>
                </div>
                <input id="first_name" type="text" class="form-control" name="first_name" required>
             </div>
             @error('first_name')
             <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
             @enderror
            </div>
         </div>
      </div>
      <div class="col-xl-6 pb-5">
        <div class="card">
           <div class="card-header">
              Edit portfolio
           </div>
           <div class="card-body">
              bb
           </div>
        </div>
     </div>
   </div>
   <div class="row">
    <div class="col-xl-6 pb-5">
       <div class="card">
          <div class="card-header">
             Edit portfolio
          </div>
          <div class="card-body">
             bb
          </div>
       </div>
    </div>
    <div class="col-xl-6 pb-5">
      <div class="card">
         <div class="card-header">
            Edit portfolio
         </div>
         <div class="card-body">
            bb
         </div>
      </div>
   </div>
 </div>
 <div class="row">
  <div class="col-xl-6 pb-5">
     <div class="card">
        <div class="card-header">
           Edit portfolio
        </div>
        <div class="card-body">
           bb
        </div>
     </div>
  </div>
  <div class="col-xl-6 pb-5">
    <div class="card">
       <div class="card-header">
          Edit portfolio
       </div>
       <div class="card-body">
          bb
       </div>
    </div>
 </div>
</div>
<div class="row">
  <div class="col-xl-6 pb-5">
     <div class="card">
        <div class="card-header">
           Edit portfolio
        </div>
        <div class="card-body">
           bb
        </div>
     </div>
  </div>
  <div class="col-xl-6 pb-5">
    <div class="card">
       <div class="card-header">
          Edit portfolio
       </div>
       <div class="card-body">
          bb
       </div>
    </div>
 </div>
</div>
</div>
@endsection
@section('title')
Edit Portfolio
@endsection

