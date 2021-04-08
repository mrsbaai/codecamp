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
              </div>

              <div class="card-footer justify-content-center text-center">
                <div class="mt-3">
                    <div class="form-row">
                        <div class="col-lg-3 form-group">
                             <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                             <div class="validate"></div>
                         </div>
                         <div class="col-lg-3 form-group">
                              <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" data-rule="minlen:8" data-msg="Please enter your realphone number" />
                              <div class="validate"></div>
                         </div>
                         <div class="col-lg-3 form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                         </div>
                         <div class="col-lg-3 form-group">
                            <button type="button" class="btn btn-dark btn-block">Request information</button>
                         </div>
    
                         
                     </div>
    
                </div>
            </div>
      </div>
 </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-4">
        <div class="card">
            <div class="thumb-container">
              <img class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Coworking Tetouan" class="thumb-image">
              <div class="thumb-overlay">
              <a href="#" class="thumb-icon" title="Coworking Tetouan" data-toggle="modal" data-target="#tetouan">
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




<div class="modal fade" id="tetouan" tabindex="-1" role="dialog" aria-labelledby="episode title here" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">
        <div class="modal-header pr-4 pl-4">
            <h4 class="modal-title text-muted"><i class="fas fa-map-marker-alt "></i><small> Wilaya Center N°55 Tetouan Morocco</small></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <!--Body-->
        <div class="modal-body mb-0 p-0">


              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
        
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="/construction/img/01.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/construction/img/02.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/construction/img/03.jpg">
                  </div>
         
                  
        
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/construction/img/07.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/construction/img/08.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/construction/img/09.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/construction/img/10.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/construction/img/11.jpg">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center text-center">
            <div class="mt-3 mb-3">
                <div class="form-row">
                    <div class="col-lg-3 form-group">
                         <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                         <div class="validate"></div>
                     </div>
                     <div class="col-lg-3 form-group">
                          <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" data-rule="minlen:8" data-msg="Please enter your realphone number" />
                          <div class="validate"></div>
                     </div>
                     <div class="col-lg-3 form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                          <div class="validate"></div>
                     </div>
                     <div class="col-lg-3 form-group">
                        <button type="button" class="btn btn-primary btn-block">Request A Key</button>
                     </div>

                     
                 </div>

            </div>
        </div>

      </div>
      <!--/.Content-->

    </div>
</div>



@endsection


@section('title')
: Coworking
@endsection
