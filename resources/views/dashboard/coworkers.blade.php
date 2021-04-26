
@extends('layouts.dashboard')

@section('content')
<style>
   .thumb-icon {
     color: #CACACA;
   }
 </style>
 
<div class="container">
 <div class="row ">
        <div class="col-lg-3 mb-3">
         <div class="card">
            <div class="thumb-container">
            <img src="https://i.imgur.com/i4uauqV.jpg" class="card-img-top" alt="Abdelilah: Full stack developer">
            </div>
            <div class="card-body">
                    <h5 class="card-title">Abdelilah</h5>
              <h6 class="card-subtitle mb-2 text-muted">Full stack developer</h6>
              <p class="card-text">
                  <span class="badge badge-warning">PHP</span>
                  <span class="badge badge-warning">Javascript</span>
                  <span class="badge badge-warning">Bootsrap</span>
                  <span class="badge badge-warning">CSS</span>
                  <span class="badge badge-warning">HTML</span>
                  <span class="badge badge-warning">NodeJS</span>
                  <span class="badge badge-warning">Mysql</span>
                  <span class="badge badge-warning">CPA</span>
                  <span class="badge badge-warning">Facebook Ads</span>
              </p>
            </div>
          </div>          
        </div>

        
  </div>
  
</div>
@endsection

@section('title')
Coworkers
@endsection
