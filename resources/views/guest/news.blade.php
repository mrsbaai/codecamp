@extends('layouts.app')

@include('sections.news')

@section('content')
  @yield('newsTable')
@endsection

@section('title')
: News
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
