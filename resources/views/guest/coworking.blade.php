@extends('layouts.app')

@section('content')
<div class="container" data-aos="fade-up">
    <div class="text-center">
          <h3> </br> Coworking</h3>
    </div>
<div class="row justify-content-center">
  <div class="col-lg-10"> 
      <div class="card bg-light h-100">
         <div class="embed-responsive embed-responsive-16by9" >
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen></iframe>
         </div>
              <div class="card-body d-flex flex-column align-items-start">
                <h4 class="card-title text-center text-primary">What is Coworking?</h4>
                 <p class="card-text">In Moroccan Success Story episodes, we invite a Moroccan icon in the IT and related fields, to share their experiences, lessons learned and knowledge with the Moroccan community.</p>
                 <p class="card-text">In Moroccan Success Story episodes, we invite a Moroccan icon in the IT and related fields, to share their experiences, lessons learned and knowledge with the Moroccan community.</p>
                 <p class="card-text">In Moroccan Success Story episodes, we invite a Moroccan icon in the IT and related fields, to share their experiences, lessons learned and knowledge with the Moroccan community.</p>
                   <div class="col-12 text-center p-0">
                   <p class="text-primary">Become a mumber <a href="{{ route('register') }}" class="btn btn-primary btn-sm mt-auto">Register</a></p>
                   </div>      
              </div>
      </div>
 </div>
</div>

<div class="row justify-content-center">
   <div class="col-lg-10"> 
         <div class="text-center">
             <h3> </br> Find us in</h3>
         </div>
            
             <div class="row">
                 <div class="col-lg-4">
                     <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h4 class="card-text text-primary"><a href="Tetouan">Tetouan</a></h4>
                          <p class="card-text">Wilaya Center ET5 N°55 TETOUAN MOROCCO</p>
                        </div>
                    </div>
                 </div>
                 <div class="col-lg-4 offset-lg-4">
                     <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                           <h4 class="card-text text-primary">Tangier</h4>
                           <p class="card-text">COMMING SOON</p>
                           <p class="card-text"></p>
                        </div>
                    </div>
                 </div>
                 <div class="w-100"></div>
                 <div class="col-lg-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h4 class="card-text text-primary">Marrakche</h4>
                        <p class="card-text">COMMING SOON</p>
                        <p class="card-text"></p>
                        </div>
                    </div>
                 </div>
                 <div class="col-lg-4 offset-lg-4">
                    <div class="card h-100" >
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text text-primary">Agadir</h4>
                            <p class="card-text">COMMING SOON</p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                 </div>
            </div>
   </div>
</div>



</div>
@endsection


@section('title')
: Coworking
@endsection
