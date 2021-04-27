@section('locations')

<style>
  .thumb-icon {
    color: #CACACA;
  }
  .link {
    color: #343a40;
  }
</style>
<div class="container">
<div class="text-center m-5">
  <h1 class="display-4">CodeCamp Coworking Project</h1>
</div>
<div class="row justify-content-center">

    <div class="col-lg-5 mb-4">
        <div class="card">
            <div class="thumb-container">
              <img class="card-img-top" src="https://codecamp.ma/img/tetouan.jpg" alt="Coworking Tetouan" class="thumb-image">
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
              <img class="card-img-top" src="https://codecamp.ma/img/agadir.jpg" alt="Coworking Agadir" class="thumb-image">
            </div>
            <div class="card-body bg-dark text-light text-center">
                <h1>Agadir (Soon)</h1>
            </div>
        </div>              
    </div>
    <div class="col-lg-5 mb-4">
        <div class="card">
            <div class="thumb-container">
              <img class="card-img-top" src="https://codecamp.ma/img/tangier.jpg" alt="Coworking Tangier" class="thumb-image">
            </div>
            <div class="card-body bg-dark text-light text-center">
                <h1>Tangier (Soon)</h1>
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
                  <div class="carousel-item">
                    <iframe class="d-block w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.9578190821044!2d-5.343286648783591!3d35.58446565764064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b43c5fe9f6dff%3A0x675d4b0dd9382c!2sCodeCamp.ma!5e0!3m2!1sen!2sma!4v1619489361384!5m2!1sen!2sma" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
          <h6 class="mt-3 mb-3">
            Google Maps: <a class="link" title="Coworking CodeCamp Tetouan Directions" href="https://goo.gl/maps/AHCUk4BKrwS1tJ9VA"><u>https://goo.gl/maps/AHCUk4BKrwS1tJ9VA</u></a>
          </h6>
         

        </div>

      </div>
      <!--/.Content-->

    </div>
</div>

</div>

@endsection
