@extends('layouts.app')

@section('content')
<div class="container mb-5">

<ul class="nav nav-pills justify-content-center mt-5 mb-5">
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

    
         
<div class="card">
    <div class="thumb-container">
        <img class="card-img" src="img/square.jpg" alt="2021 New Year Online Business Resolution" class="thumb-image">
        <div class="thumb-overlay">
        <a href="/blog/3334" class="thumb-icon" title="2021 New Year Online Business Resolution">
          <i class="fa fa-info-circle"></i>
        </a>
        </div>
    </div>


    <div class="card-body ml-3">
      <h5 class="card-title mt-2">2021 New Year Online Business Resolution</h5>

      <p class="card-text mt-2 mb-2">
        We are organizing a professional gathering to discuss and exchange ideas about how can we make our online businesses more profitable in 2021. <a class="text-info" href="/blog/3334">More info...</a>
    </p>

    <div class="col-6 text-left p-0">
        <small class="text-muted">Posted at 01/03/2021</small>
    </div>

    <div class="col-6 text-right p-0">
        <a href="/blog" class="btn btn-dark btn-sm mt-auto">Read More</a>
    </div>

    </div>
  </div>
    
</div>

@section('title')
: Blog
@endsection
@endsection
