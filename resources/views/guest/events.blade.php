@extends('layouts.app')
@section('content')
<div class="container mb-5" data-aos="fade-up">
    <div class="text-center m-5">
         <h3>Upcoming Events</h3>
    </div>

    <div class="card">
        <div class="thumb-container">
            <img class="card-img" src="img/square.jpg" alt="2021 New Year Online Business Resolution" class="thumb-image">
            <div class="thumb-overlay">
            <a href="#" class="thumb-icon" title="2021 New Year Online Business Resolution" data-toggle="modal" data-target="#events1">
              <i class="fa fa-info-circle"></i>
            </a>
            </div>
          </div>


        <div class="card-body bg-dark text-light">
          <h5 class="card-title mt-2">2021 New Year Online Business Resolution</h5>
          <h6 class="card-subtitle mb-2">
            <div class="row">
                <div class="col-12 mt-1">
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i><small> Wilaya Center ET5 N°55 TETOUAN MOROCCO</small></p>
                </div>
                <div class="col-12 mt-1">
                    <p class="card-text"><i class="fas fa-calendar-alt "></i><small> 01/03/2021 - 01/03/2021</small></p>
               </div>

              <div class="col-12 mt-1">
                   <p class="card-text"><i class="fas fa-clock "></i><small> 15:00 - 18:00</small></p>
              </div>
 
              <div class="col-12 mt-1">
               <p class="card-text"><i class="fas fa-money-bill-wave"></i><small> 190 DH</small></p>
               </div>


              
              </div>
          </h6>
          <p class="card-text mt-2 mb-2">
            We are organizing a professional gathering to discuss and exchange ideas about how can we make our online businesses more profitable in 2021. <a class="text-info" href="/blog/3334">More info...</a>
        </p>
        <div class="text-center">
        <button type="button" class="btn btn-sm btn-w mt-2"  data-toggle="modal" data-target="#events1" >Subscribe</button>
        </div>
        </div>
      </div>
       
</div>



<div class="modal fade" id="events1" tabindex="-1" role="dialog" aria-labelledby="episode title here" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

      <!--Content-->
      <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title">2021 New Year Online Business Resolution</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <!--Body-->
        <div class="modal-body">
            <div class="card-body">
                <h6 class="card-subtitle  mt-3">
                  <div class="row">
                      <div class="col-12 mt-1">
                          <p class="card-text"><i class="fas fa-map-marker-alt"></i><small> Wilaya Center ET5 N°55 TETOUAN MOROCCO</small></p>
                      </div>
                      <div class="col-12 mt-1">
                          <p class="card-text"><i class="fas fa-calendar-alt "></i><small> 01/03/2021 - 01/03/2021</small></p>
                     </div>
      
                    <div class="col-12 mt-1">
                         <p class="card-text"><i class="fas fa-clock "></i><small> 15:00 - 18:00</small></p>
                    </div>
       
                    <div class="col-12 mt-1">
                     <p class="card-text"><i class="fas fa-money-bill-wave"></i><small> 190 DH</small></p>
                     </div>
      
      
                    
                    </div>
                </h6>

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
                        <button type="button" class="btn btn-dark btn-block">Subscribe</button>
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

