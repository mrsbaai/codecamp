@extends('layouts.dashboard')

@section('content')
<div class="container pt-2">


  <div class="d-flex my-3">
    <div class="card">
      <div class="card-header">{{ __('How Can We Help?') }}</div>
      <div class="card-body">
        <div class="form-row">
                  
          <div class="col-md-4 form-group pb-2">
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group pb-2">
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" data-rule="minlen:8" data-msg="Please enter your realphone number" />
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group pb-2">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>

        <div class="form-row">
   
            <div class="col-12 form-group pb-2">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
       
          </div>
        </div>

        <div class="form-row">
          <div class="col-12 form-group pb-2">

              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
   
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 form-group pb-2">
            <div class="text-right"><button  class="btn btn-light" type="submit">Send</button></div>
          </div>
        </div>

      </div>

  </div>
</div>
@endsection


@section('title')
Support
@endsection
