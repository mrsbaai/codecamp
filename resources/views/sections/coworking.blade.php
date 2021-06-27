@section('coworking')

<div class="container pt-4 mb-5">

    <div class="row justify-content-center mb-5">
      <div class="col-12"> 
          <div class="card">
             <div class="embed-responsive embed-responsive-16by9" style="border-top-right-radius: calc(0.25rem - 1px);border-top-left-radius: calc(0.25rem - 1px);">
                 <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen></iframe>
             </div>
                  <div class="card-body d-flex flex-column align-items-start">
                    <h4 class="card-title">What is CodeCamp Coworking?</h4>
                     <p class="card-text">Coworking is an arrangement in which workers of different companies share an office space, allowing cost savings and convenience through the use of common infrastructures, such as equipment, utilities, and receptionist and custodial services, and free refreshments.
                        <br/>CodeCamp Coworking is well adapted for web entrepreneur, looking for a productivity based work environment.
                    </p> 
                  </div>
    
                  <div class="card-footer justify-content-center text-center">
                    <div class="mt-3">
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
                                <button type="button" class="btn btn-dark btn-block">Request information</button>
                             </div>
        
                             
                         </div>
        
                    </div>
                </div>
          </div>
     </div>
    </div>
</div>
    

@endsection
