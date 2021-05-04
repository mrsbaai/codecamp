@extends('layouts.dashboard')
@section('content')
<div class="container pt-4">
   <div class="row">
      <div class="col-xl-6 pb-5">
         <div class="card">
            <div class="card-header">
               Who are you?
            </div>
            <div class="card-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                   <span class="input-group-text">{{ __('I\'m a') }}</span>
                </div>
                <input id="title" type="text" class="form-control" name="title" required>
             </div>
             @error('title')
             <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
             </span>
             @enderror

             <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text">https://codecamp.ma/</span>
               </div>
               <input id="username" type="text" class="form-control" name="username" required>
            </div>
            @error('username')
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
             Face photo
           </div>
           <div class="card-body">
            <div class="custom-file">
               <input type="file" accept="image" class="custom-file-input" id="photo" name="photo" required>
               <label class="custom-file-label" for="photo">Choose photo...</label>
               @error('photo')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
               @enderror
             </div>
              
           </div>
        </div>
     </div>
   </div>
   <div class="row">
    <div class="col-xl-6 pb-5">
       <div class="card">
          <div class="card-header">
            About
          </div>
          <div class="card-body">
             bb
          </div>
       </div>
    </div>
    <div class="col-xl-6 pb-5">
      <div class="card">
         <div class="card-header">
            Skills
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
          Projects
        </div>
        <div class="card-body">
           bb
        </div>
     </div>
  </div>
  <div class="col-xl-6 pb-5">
    <div class="card">
       <div class="card-header">
          Education
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

