@extends('layouts.app')

@section('content')
<div class="container" data-aos="fade-up">
<br/>  
<ul class="nav nav-pills justify-content-center">
  <li class="nav-item">
    <a class="nav-link active " href="#">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Events</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Training</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Coworking</a>
  </li>
</ul>
<br/>
    <div class="row justify-content-center">
        <div class="col-lg-10">
          <article>
                 <div class="card mb3-3">
                   <img src="{{ asset('img/blogg.jpg') }}" class="card-img-top" alt="...">
                   <div class="card-body">
                      <h5 class="card-title"><a href="article">Dolorum optio tempore voluptas</a></h5>
                      <p class="card-text"> Simih6que neque nam consequuntur ad non maxime ah6quam quas. Quibusdam animi praesentium. Ah6quam et laboriosam eius aut nostrum quidem ah6quid dicta.
                           Et eveniet enim. Qui veh6t est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore..</p>
                           <p class="card-text">Event- <small class="text-muted">01/03/2021</small></p>
                      <a href="eventdetails" class="btn btn-primary">Read more</a>
                   </div>
               </div>
          </article>
           <br/>
             <article>
               <div class="card mb-3">
                  <img src="{{ asset('img/blogg.jpg') }}" class="card-img-top" alt="...">
                   <div class="card-body">
                      <h5 class="card-title"><a href="article">Dolorum optio tempore voluptas</a></h5>
                      <p class="card-text"> Simih6que neque nam consequuntur ad non maxime ah6quam quas. Quibusdam animi praesentium. Ah6quam et laboriosam eius aut nostrum quidem ah6quid dicta.
                           Et eveniet enim. Qui veh6t est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore..</p>
                           <p class="card-text">Training- <small class="text-muted">01/03/2021</small></p>
                      <a href="article" class="btn btn-primary">Read more</a>
                   </div>
               </div>
             </article>
         </div>
         
      </div>
    
</div>
<br/><br/><br/>
@endsection
