@extends('layouts.dashboard')

@section('content')
<div class="container vh-100 text-center pt-4">
  <h1 class="display-4">How Can We Help?</h1>
   <div class="card m-5">

       <div class="card-body bg-dark text-light">
   
            
        
              <div class="form-row">
                
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" data-rule="minlen:8" data-msg="Please enter your realphone number" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-12 form-group">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-12 form-group">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 form-group">
                  <div class="text-right"><button  class="btn btn-lg btn-primary" type="submit">Send</button></div>
                </div>
              </div>

   </div>
  </div>
</div>
@endsection


@section('title')
Support
@endsection
