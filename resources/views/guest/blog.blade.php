@extends('layouts.app')

@section('content')
<div class="container" data-aos="fade-up">

<ul class="nav nav-pills justify-content-center m-5">
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

    <div class="row justify-content-center">
        <div class="col-lg-10">
          <article>
                 <div class="card mb-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="/img/square.jpg" class="card-img rounded-left" alt="Dolorum optio tempore voluptas">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge badge-pill badge-dark mr-3">Training</span><a href="article">Dolorum optio tempore voluptas</a></h5>
                                <p class="card-text"> Simih6que neque nam consequuntur ad non maxime ah6quam quas. Quibusdam animi praesentium. Ah6quam et laboriosam eius aut nostrum quidem ah6quid dicta.
                                    Et eveniet enim. Qui veh6t est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore..</p>
                                <p class="card-text"><small class="text-muted">Posted at 01/03/2021</small></p>

                                    <div class="col-12 text-right p-0">
                                        <a href="/blog" class="btn btn-primary btn-sm mt-auto">Read More</a>
                                    </div> 
                            </div>
                        </div>
                    </div>
               </div>
          </article>
          
          <article>
            <div class="card mb-3">
               <div class="row no-gutters">
                   <div class="col-md-4">
                     <img src="/img/square.jpg" class="card-img rounded-left" alt="Dolorum optio tempore voluptas">
                   </div>
                   <div class="col-md-8">
                       <div class="card-body">
                           <h5 class="card-title"><span class="badge badge-pill badge-dark mr-3">Training</span><a href="article">Dolorum optio tempore voluptas</a></h5>
                           <p class="card-text"> Simih6que neque nam consequuntur ad non maxime ah6quam quas. Quibusdam animi praesentium. Ah6quam et laboriosam eius aut nostrum quidem ah6quid dicta.
                               Et eveniet enim. Qui veh6t est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore..</p>
                           <p class="card-text"><small class="text-muted">Posted at 01/03/2021</small></p>

                               <div class="col-12 text-right p-0">
                                   <a href="/blog" class="btn btn-primary btn-sm mt-auto">Read More</a>
                               </div> 
                       </div>
                   </div>
               </div>
          </div>
     </article>


             
         </div>
         
      </div>
    
</div>

@section('title')
: Blog
@endsection
@endsection
