@extends('layouts.app')

@section('content')
<div class="container container mb-5">

<div class="row justify-content-center mt-5 mb-5">
  <div class="col-lg-10"> 
      <div class="card">
         <div class="embed-responsive embed-responsive-16by9" style="border-top-right-radius: calc(0.25rem - 1px);border-top-left-radius: calc(0.25rem - 1px);">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen></iframe>
         </div>
              <div class="card-body d-flex flex-column align-items-start">
                <h4 class="card-title">What is Coworking?</h4>
                 <p class="card-text">Coworking is an arrangement in which workers of different companies share an office space, allowing cost savings and convenience through the use of common infrastructures, such as equipment, utilities, and receptionist and custodial services, and in some cases refreshments and parcel acceptance services.</p>
                 <div class="col-12 text-center p-0">
                   <p class="text-primary">Become a mumber <a href="{{ route('register') }}" class="btn btn-primary btn-sm mt-auto">Register</a></p>
                   </div>      
              </div>
      </div>
 </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-4">
        <div class="card">
            <div class="thumb-container">
              <img class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Coworking Tetoaun" class="thumb-image">
              <div class="thumb-overlay">
              <a href="#" class="thumb-icon" title="Coworking Tetoaun" data-toggle="modal" data-target="#tetouan">
                <i class="fa fa-expand-arrows-alt"></i>
              </a>
              </div>
            </div>
            <div class="card-body bg-primary text-light text-center">
                <h1>Tetouan</h1>
            </div>
        </div>              
    </div>
    <div class="col-lg-5 mb-4">
        <div class="card">
            <div class="thumb-container">
              <img class="card-img-top" src="https://codecamp.ma/img/marrakech.jpg" alt="Coworking Marrakech" class="thumb-image">
            </div>
            <div class="card-body bg-dark text-light text-center">
                <h1>Marrakech (Soon)</h1>
            </div>
        </div>              
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-4">
        <div class="card">
            <div class="thumb-container">
              <img class="card-img-top" src="https://codecamp.ma/img/marrakech.jpg" alt="Coworking Marrakech" class="thumb-image">
            </div>
            <div class="card-body bg-dark text-light text-center">
                <h1>Marrakech (Soon)</h1>
            </div>
        </div>              
    </div>
    <div class="col-lg-5 mb-4">
        <div class="card">
            <div class="thumb-container">
              <img class="card-img-top" src="https://codecamp.ma/img/marrakech.jpg" alt="Coworking Marrakech" class="thumb-image">
            </div>
            <div class="card-body bg-dark text-light text-center">
                <h1>Marrakech (Soon)</h1>
            </div>
        </div>              
    </div>
</div>



@endsection


@section('title')
: Coworking
@endsection
