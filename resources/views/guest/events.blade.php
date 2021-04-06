@extends('layouts.app')
@section('content')
<div class="container mb-5" data-aos="fade-up">
    <div class="text-center m-5">
         <h3>Upcoming Events</h3>
    </div>

    <div class="card">
        <img src="img/square.jpg" class="card-img-top" />
        <div class="card-body">
          <h5 class="card-title mt-2">2021 New Year Online Business Resolution</h5>
          <h6 class="card-subtitle mb-2 text-muted">
            <div class="row">
               <div class="col-12 mt-3">
                   <p class="card-text"><i class="fas fa-map-marker-alt"></i> <small class="text-muted"> Wilaya Center ET5 N°55 TETOUAN MOROCCO</small></p>
              </div>
              <div class="col-12 mt-3">
                   <p class="card-text"><i class="fas fa-calendar-alt "></i><small class="text-muted"> 01/03/2021 - 01/03/2021</small></p>
              </div>
              
              <div class="col-12 mt-3">
               <p class="card-text"><i class="fas fa-money-bill-wave"></i><small class="text-muted"> 190 DH</small></p>
               </div>
              </div>
          </h6>
          <p class="card-text mt-2 mb-2">
            We are organizing a professional gathering to discuss and exchange ideas about how can we make our online businesses more profitable in 2021. 
          </p>
          <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
        </div>
      </div>
       
</div>
@endsection
@section('title')
: Upcoming Events
@endsection
@section('head')
<style>
    .card {
      flex-direction: row;
      align-items: center;
    }
    .card-title {
      font-weight: bold;
    }
    .card img {
      width: 300px;
      border-top-right-radius: 0;
      border-bottom-left-radius: calc(0.25rem - 1px);
    }
    @media (max-width: 768px) {
      .card img {
        width: 100%;
    
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    
        border-top-right-radius: calc(0.25rem - 1px);
        border-top-left-radius: calc(0.25rem - 1px);
      
      }

    .card {
      flex-direction: column;
      align-items: left;
    }
     
      .card-body {
        padding: 0.5em 1.2em;
      }
      .card-body .card-text {
        margin: 0;
      }
    }
    


    </style>

@endsection

