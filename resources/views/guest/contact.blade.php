@extends('layouts.app')
@section('content')
<div class="container mb-4">

            <div class="text-center m-5">
                <h3>More info?</h3>
             </div>

        <div class="row mt-1">

          <div class="col-lg-6">
           
              <div class="col-lg-12">
                <h4 ><i class="fas fa-map-marker-alt"></i> Location</h4>
                <p>Wilaya Center N°55 ET 5 Tetouan Morocco.</p>
              </div>

              <div class="col-lg-12">
                <h4 ><i class="fas fa-envelope"></i> Email</h4>
                <p>info@codecamp.ma</p>
              </div>

              <div class="col-lg-12">
                <h4 ><i class="fas fa-phone-alt"></i> Call</h4>
                <p>07 07 73 07 72</p>
              </div>

           

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0">
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
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button  class="btn btn-w" type="submit">Send</button></div>

          </div>

        </div>

    

      </div>

@endsection
@section('title')
: Contact
@endsection
@section('head')

@endsection

