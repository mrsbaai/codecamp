@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">

<ul class="nav nav-pills justify-content-center pb-4 ">
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

<div class="row">
     


   <div class="col-lg-8">

     <div class="card" >
       <div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen></iframe>
       </div>
       <div class="card-body">
          <div class="text-right">
              <p class="card-text"><small class="text-muted">01/03/2021</small></p>
          </div>
          <h3 class="card-title text-primary">DataBases deep dive</h3>
          <hr>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <h5>Guests</h5>
          <hr>
          <p><a href="#">ALI</a></p>
          <p><a href="#">ANASS</a></p>
          <p><a href="#">ADAM</a></p>
          <h5>Notes</h5>
          <hr>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <p><a href="#">1:56</a> - Advice about Performance Optimization.</p>
          <h5>Links</h5>
          <hr>
          <p><a href="#">Advice about Performance Optimization</a></p>
          <p><a href="#">Advice about Performance Optimization</a></p>
          <h5>Prepared and Presented by</h5>
          <hr>
          <p><a href="#">ALI</a></p>
          <p><a href="#">ANASS</a></p>
          <p><a href="#">ADAM</a></p>
        </div>
      </div>

   </div>

   <div class="col-lg-4 ">
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
               <h6>DataBases deep dive</h6>
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
               <h6>PHP</h6>
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
               <h6>A tasty test to test this test</h6>
             </div>
             <div class="row">
                <p class="card-text"><small class="text-muted">02:12:38 | 01/03/2021</small></p>
              </div>
           </div>
        </div>   
       </a>

  
    </div>
  </div>
</div>
</div>

@section('title')
: Episodes
@endsection


@section('head')

@endsection
