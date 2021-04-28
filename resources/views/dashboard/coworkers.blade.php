
@extends('layouts.dashboard')

@section('content')
<style>
   .thumb-icon {
     color: #CACACA;
     opacity: 0;

   }

   .user-image {
      object-fit: cover;
      position: absolute;
      top: 0;
      height: 100%;
   }

   .thumb-container {
      position: relative;
      width: 100%;
      padding-top: 100%;
   }


 </style>

<div class="container pt-4">
 <div class="row ">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
         <div class="card">
               <div class="thumb-container">
                  <a href="/link" alt="Abdelilah: Full stack developer">
                     <img src="https://i.imgur.com/KmeTFmn.jpg" class="card-img-top user-image">
                  </a>
               <div class="thumb-overlay">
                  <a href="/link" class="thumb-icon">
                  <i class="fas fa-link"></i>
                  </a>
                  </div>
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
