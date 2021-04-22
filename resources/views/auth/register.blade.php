@extends('layouts.app')

@section('content')
<div class="container vh-100">
    <div class="row h-100 justify-content-center align-items-center" role="centred-form">
        <div class="col-md-8">
        <br/><br/><br/>
            <div class="card mb-3">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row ">
                            <div class="col-md-12">
                               <div class="button-group">
                                  <button type="button" class="custom-select text-left" data-toggle="dropdown">I'm interested in</button>
                                  <ul class="dropdown-menu p-2">
                                      <li><input type="checkbox"  value="hiring" name="interest"/>&nbsp;Hiring</li>
                                      <li><input type="checkbox" value="paid" name="interest"/>&nbsp;Getting paid for work</a></li>
                                      <li><input type="checkbox" value="partner" name="interest"/>&nbsp;Partnering</li>
                                      <li><input type="checkbox" value="coworking" name="interest"/>&nbsp;Coworking</li>
                                      <li><input type="checkbox" value="learning" name="interest"/>&nbsp;Online learning</li>
                                      <li><input type="checkbox" value="events" name="interest"/>&nbsp;Live events</li>
                                  </ul>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 my-1">
                                <input id="first_name" type="text" placeholder="{{ __('First Name') }}" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-md-6 my-1">
                                <input id="last_name" type="text" placeholder="{{ __('Last Name') }}" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 my-1 ">
                                <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-1">
                                <input id="phone" type="tel" placeholder="{{ __('Phone') }}" class="form-control @error('') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <select class="custom-select" id="gender" name="gender">
                                    <option >Please select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                               </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-12">
                                  <select class="custom-select" id="city" name="city">
                                       <option >Please select your city</option>
                                       <option value="Tetouan">Tetouan</option>
                                       <option value="Rabat"  >Rabat</option>
                                       <option value="Agadir"  >Agadir</option>
                                       <option value="Casablanca"  >Casablanca</option>
                                       <option value="Fes"  >Fes</option>
                                       <option value="Marrakech"  >Marrakech</option>
                                       <option value="Tanger"  >Tanger</option>
                                       <option value="Meknes"  >Meknes</option>
                                       <option value="Salé"  >Salé</option>
                                 </select>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 my-2">
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
