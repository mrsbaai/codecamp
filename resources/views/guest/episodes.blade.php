@extends('layouts.app')

@section('content')
<div class="container">
</br>
<ul class="nav nav-pills justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">E-commerce</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Development</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Design</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Database</a>
  </li>
</ul>
</br>
<div class="row">
     <div class="col-lg-3 ">
       <div class="list-group ">
         <a href="#" class="list-group-item list-group-item-action ">
           <div class="d-flex w-100 justify-content-between">
             <div class="col">
               <div class="text-left">
                  <h1 class="text-primary"><i class="fas fa-play-circle"></i> </h1>
                </div>
             </div>
             <div class="col-9">
                <div class="row">
                  <h5 class="text-primary">DataBases deep dive</h5>
                </div>
                <div class="row">
                   <p class="card-text"><small class="text-muted">02:12:38 | 01/03/2021</small></p>
                 </div>
              </div>
           </div>   
          </a>

          <a href="#" class="list-group-item list-group-item-action">
           <div class="d-flex w-100 justify-content-between">
             <div class="col">
               <div class="text-left">
                  <h1 class="text-primary"><i class="fas fa-play-circle"></i> </h1>
                </div>
             </div>
             <div class="col-9">
                <div class="row">
                  <h5 class="text-primary">PHP</h5>
                </div>
                <div class="row">
                   <p class="card-text"><small class="text-muted">02:12:38 | 01/03/2021</small></p>
                 </div>
              </div>
           </div>   
          </a>

          <a href="#" class="list-group-item list-group-item-action">
           <div class="d-flex w-100 justify-content-between">
             <div class="col">
               <div class="text-left">
                  <h1 class="text-primary"><i class="fas fa-play-circle"></i> </h1>
                </div>
             </div>
             <div class="col-9">
                <div class="row">
                  <h5 class="text-primary">E-commerce</h5>
                </div>
                <div class="row">
                   <p class="card-text"><small class="text-muted">02:12:38 | 01/03/2021</small></p>
                 </div>
              </div>
           </div>   
          </a>
       </div>
     </div>


   <div class="col-lg-9">

     <div class="card" >
       <div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen></iframe>
       </div>
       <div class="card-body">
          <div class="text-right">
              <p class="card-text"><small class="text-muted">01/03/2021</small></p>
          </div>
          <h3 class="card-title text-primary">DataBases deep dive</h3>
          <hr></hr>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <h5>Guests</h5>
          <hr></hr>
          <p><a href="#">ALI</a></p>
          <p><a href="#">ANASS</a></p>
          <p><a href="#">ADAM</a></p>
          <h5>Notes</h5>
          <hr></hr>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <h5>Links</h5>
          <hr></hr>
          <p><a href="#">Advice about Performance Optimization</a></p>
          <p><a href="#">Advice about Performance Optimization</a></p>
          <h5>Prepared and Presented by</h5>
          <hr></hr>
          <h6><a href="#">ALI</a></h6>
         <h6><a href="#">ANASS</a></h6>
        </div>
      </div>

   </div>
</div>
</div>
<br/><br/><br/>
@section('title')
: Episodes
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
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
      border-bottom-left-radius: calc(0.25rem - 1px);
    }
    .thumb-container{
        width: 300px;

    }



    @media (max-width: 992px) {
      .card img {
        width: 100%;
    
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    
        border-top-right-radius: calc(0.25rem - 1px);
        border-top-left-radius: calc(0.25rem - 1px);
      
      }
      .thumb-container{
        width: 100%;

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
