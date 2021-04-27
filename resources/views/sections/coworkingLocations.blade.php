@section('locations')

<style>
  .thumb-icon {
    color: #CACACA;
  }
</style>
<div class="text-center m-5">
  <h1 class="display-4">Pricing</h1>
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
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name (ex Youssef)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                </div>
                <div class="col-lg-3 form-group">
                     <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number (ex 06xxxxxxxx)" data-rule="minlen:8" data-msg="Please enter your realphone number" />
                     <div class="validate"></div>
                </div>
                <div class="col-lg-3 form-group">
                   <select class="custom-select" id="city" name="city" data-rule="required" required="required" data-msg="Please select your current city" >                    
                       <option>I Currently Live In:</option>
                       <option value="Casablanca">Casablanca</option>
                        <option value="Fez">Fez</option>
                        <option value="Tangier">Tangier</option>
                        <option value="Marrakesh">Marrakesh</option>
                        <option value="Salé">Salé</option>
                        <option value="Meknes">Meknes</option>
                        <option value="Rabat">Rabat</option>
                        <option value="Oujda">Oujda</option>
                        <option value="Kenitra">Kenitra</option>
                        <option value="Agadir">Agadir</option>
                        <option value="Tetouan">Tetouan</option>
                        <option value="Temara">Temara</option>
                        <option value="Safi">Safi</option>
                        <option value="Mohammedia">Mohammedia</option>
                        <option value="Khouribga">Khouribga</option>
                        <option value="El Jadida">El Jadida</option>
                        <option value="Beni Mellal">Beni Mellal</option>
                        <option value="Aït Melloul">Aït Melloul</option>
                        <option value="Nador">Nador</option>
                        <option value="Dar Bouazza">Dar Bouazza</option>
                        <option value="Taza">Taza</option>
                        <option value="Settat">Settat</option>
                        <option value="Berrechid">Berrechid</option>
                        <option value="Khemisset">Khemisset</option>
                        <option value="Inezgane">Inezgane</option>
                        <option value="Ksar El Kebir">Ksar El Kebir</option>
                        <option value="Larache">Larache</option>
                        <option value="Guelmim">Guelmim</option>
                        <option value="Khenifra">Khenifra</option>
                        <option value="Berkane">Berkane</option>
                        <option value="Taourirt">Taourirt</option>
                        <option value="Bouskoura">Bouskoura</option>
                        <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                        <option value="Dcheira El Jihadia">Dcheira El Jihadia</option>
                        <option value="Oued Zem">Oued Zem</option>
                        <option value="El Kelaa Des Sraghna">El Kelaa Des Sraghna</option>
                        <option value="Sidi Slimane">Sidi Slimane</option>
                        <option value="Errachidia">Errachidia</option>
                        <option value="Guercif">Guercif</option>
                        <option value="Oulad Teima">Oulad Teima</option>
                        <option value="Ben Guerir">Ben Guerir</option>
                        <option value="Tifelt">Tifelt</option>
                        <option value="Lqliaa">Lqliaa</option>
                        <option value="Taroudant">Taroudant</option>
                        <option value="Sefrou">Sefrou</option>
                        <option value="Essaouira">Essaouira</option>
                        <option value="Fnideq">Fnideq</option>
                        <option value="Sidi Kacem">Sidi Kacem</option>
                        <option value="Tiznit">Tiznit</option>
                        <option value="Tan-Tan">Tan-Tan</option>
                        <option value="Ouarzazate">Ouarzazate</option>
                        <option value="Souk El Arbaa">Souk El Arbaa</option>
                        <option value="Youssoufia">Youssoufia</option>
                        <option value="Lahraouyine">Lahraouyine</option>
                        <option value="Martil">Martil</option>
                        <option value="Ain Harrouda">Ain Harrouda</option>
                        <option value="Suq as-Sabt Awlad an-Nama">Suq as-Sabt Awlad an-Nama</option>
                        <option value="Skhirat">Skhirat</option>
                        <option value="Ouazzane">Ouazzane</option>
                        <option value="Benslimane">Benslimane</option>
                        <option value="Al Hoceima">Al Hoceima</option>
                        <option value="Beni Ansar">Beni Ansar</option>
                        <option value="M'diq">M"diq</option>
                        <option value="Sidi Bennour">Sidi Bennour</option>
                        <option value="Midelt">Midelt</option>
                        <option value="Azrou">Azrou</option>
                       
                 </select><div class="validate"></div>
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
