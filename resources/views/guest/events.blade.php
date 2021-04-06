@extends('layouts.app')
@section('content')
<div class="container mb-5" data-aos="fade-up">
    <div class="text-center m-5">
         <h3>Upcoming events</h3>
    </div>

    <div class="card">
        <img src="img/square.jpg" class="card-img-top" />
        <div class="card-body">
          <h5 class="card-title">Card Title</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
       
</div>
@endsection
@section('title')
: Events
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
  width: 30%;
  border-top-right-radius: 0;
  border-bottom-left-radius: calc(0.25rem - 1px);
}


<style>
.card {
  flex-direction: row;
  align-items: center;
}
.card-title {
  font-weight: bold;
}
.card img {
  width: 30%;
  border-top-right-radius: 0;
  border-bottom-left-radius: calc(0.25rem - 1px);
}

</style>


@endsection

