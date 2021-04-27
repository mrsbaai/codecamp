
@extends('layouts.dashboard')

@section('content')



  <div class="container">

    <div class="row">
      <div class="col-xl-8">
        1 of 3
      </div>
      <div class="col-xl-4">
        

<div class="card">
    <div class="card-header">Change Password</div>
    <div class="card-body">
       <form method="POST" action="#">
          @csrf 
          @foreach ($errors->all() as $error)
          <p class="text-danger">{{ $error }}</p>
          @endforeach 
          <div class="form-group row mb-3 pt-3">
             <div class="col-12">
                <div class="input-group mb-3">
                   <div class="input-group-prepend">
                      <span class="input-group-text">{{ __('Current Password') }}</span>
                   </div>
                   <input id="password" type="password" class="form-control" name="current_password">
                </div>
             </div>
             <div class="col-12">
                <div class="input-group mb-3">
                   <div class="input-group-prepend">
                      <span class="input-group-text">{{ __('New Password') }}</span>
                   </div>
                   <input id="new_password" type="password" class="form-control" name="new_password">
                </div>
             </div>
             <div class="col-12">
                <div class="input-group mb-3">
                   <div class="input-group-prepend">
                      <span class="input-group-text">{{ __('Confirm Password') }}</span>
                   </div>
                   <input id="confirm_password" type="password" class="form-control" name="confirm_password">
                </div>
             </div>
          </div>
          <div class="form-group row mb-0">
             <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-dark">
                {{ __('Update') }}
                </button>
             </div>
          </div>
       </form>
    </div>
 </div>
 
 
      </div>

    </div>
  </div>

@endsection

@section('title')
Personal Info
@endsection
