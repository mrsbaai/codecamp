
@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">
     <div class="col-lg-8 m-3">
         <div class="card">
            <div class="card-header">{{ __('Personal Info') }}</div>
              <div class="card-body">
                <form method="POST" action="">
                    @csrf

                    <div class="form-group row ">
                        <div class="col-md-12">
                            <label class="font-weight-bold">I'm interested in:</label><br/>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Hiring</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Getting Hired</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Finding partners</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Coworking</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Learning</label>
                              </div>

                       </div>
                    </div>


                    <div class="form-group row ">
                        <div class="col-md-6 my-1">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">{{ __('First Name') }}</span>
                                </div>
                                <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                            </div>
                              

                           
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         <div class="col-md-6 my-1">
                            <div for="last_name" class="input-group-text">
                                <div class="input-group-text">{{ __('Last Name') }}</div>
                              </div>
                            <input id="last_name" type="text"  class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-md-6 my-1 ">
                            <div for="email" class="input-group-text">
                                <div class="input-group-text">{{ __('Email') }}</div>
                              </div>
                              <input id="email" type="email" class="form-control " name="email" required autocomplete="email">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <div for="phone" class="input-group-text">
                                <div class="input-group-text">{{ __('Phone') }}</div>
                              </div>
                            
                            <input id="phone" type="tel" class="form-control @error('') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <div for="city" class="input-group-text">
                                <div class="input-group-text">{{ __('I currently live in') }}:</div>
                              </div>
                            <select class="custom-select" id="city" name="city" data-rule="required" required="required" data-msg="Please select your current city" >                    
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
                                
                          </select>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
              
          </div>
     </div>
  </div>

    <div class="row h-100 justify-content-center align-items-center pt-4" role="centred-form">
         <div class="col-md-8 m-5">
             <div class="card">
                 <div class="card-header">Change Password</div>
                 <div class="card-body">
                     <form method="POST" action="#">
                         @csrf 
                          @foreach ($errors->all() as $error)
                             <p class="text-danger">{{ $error }}</p>
                          @endforeach 
                         <div class="form-group row">
                            <div for="password" class="input-group-text">
                                <div class="input-group-text">{{ __('Current Password') }}:</div>
                              </div>
                             <div class="col-md-6">
                                 <input id="password" type="password" class="form-control" name="current_password">
                             </div>
                         </div>
                         <div class="form-group row">
                            <div for="new_password" class="input-group-text">
                                <div class="input-group-text">{{ __('New Password') }}:</div>
                              </div>
                             <div class="col-md-6">
                                 <input id="new_password" type="password" class="form-control" name="new_password">
                             </div>
                         </div>
                         <div class="form-group row">
                            <div for="confirm_password" class="input-group-text">
                                <div class="input-group-text">{{ __('Confirm New Password') }}:</div>
                              </div>
                             <div class="col-md-6">
                                 <input id="confirm_password" type="password" class="form-control" name="confirm_password">
                             </div>
                         </div>
                         <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4 text-right">
                                 <button type="submit" class="btn btn-dark">
                                     Update
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endsection

@section('title')
Personal Info
@endsection
