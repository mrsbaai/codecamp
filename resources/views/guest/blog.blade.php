@extends('layouts.app')

@section('content')
<div class="container pt-5 mb-5">

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
        We are organizing a professional gathering to discuss and exchange ideas about how can we make our online businesses more profitable in 2021. <a class="text-info" href="/blog/3334">Read more...</a>
    </p>

    <div class="text-right p-0">
        <small class="text-muted">Posted at 01/03/2021</small>
    </div>


    </div>
  </div>
    
</div>

@section('title')
: Blog
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
