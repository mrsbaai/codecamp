@extends('layouts.dashboard')
@section('content')
<div class="container pt-4">

   <div class="row">
      <div class="col-12 pb-5">
         <div class="card h-100">
            <div class="card-header">
               About
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-xl-4  d-flex align-items-center justify-content-center">
                     <div class="text-center">
                        <div class="picture-container">
                           <div class="picture">
                               <img src="https://i.imgur.com/iQbRJoq.jpg" class="picture-src masthead mb-4 rounded-circle" id="wizardPicturePreview" title="">
                               <input type="file" id="wizard-picture" name="picture" accept="image"   class="">
                           </div>
                            <h6 class="p-3">Choose Photo</h6>
                       </div>
                        @error('picture')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>   

                  </div>
                  <div class="col-xl-8">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text">https://codecamp.ma/</span>
                        </div>
                        <input id="username" type="text" class="form-control" name="username" placeholder="youssef123" required>
                     </div>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text">{{ __('I\'m') }}</span>
                        </div>
                        <input id="title" type="text" class="form-control" name="title" placeholder="A Full Stack Developer" required>
                     </div>
                     @error('title')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                     @error('username')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                     <div class="input-group mb-3">
                        <textarea id="title" type="text" class="form-control" name="title" placeholder="I love coding, camping and traveling. I'm looking for parteners to work on innovative ideas....."></textarea>
                     </div>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text">youtube.com/watch?v=</span>
                        </div>
                        <input id="video" type="text" class="form-control" name="video" placeholder="Ex: rF5dtpTLqkY" required>
                     </div>
                     @error('video')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror

                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



   <div class="row">
      <div class="col-12 pb-5">
         <div class="card">
            <div class="card-header">
               Skills 
            </div>
            <div class="card-body p-0">
               <div class="input-group input-group-lg">
                  <input id="skills" style="border:0px;" type="text" class="form-control" name="skills" placeholder="Please type  your skills here" required>
               </div>
               @error('skills')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror


            </div>
         </div>
      </div>
 </div>

 <div class="row">
  <div class="col-xl-6 pb-5">
     <div class="card">
      <div class="card-header">Projects 
         <button style="float:right" type="button" class="btn btn-info add-new btn-sm m-0 pt-0 pb-0"  data-toggle="modal" data-target="#add_project"><i class="fa fa-plus"></i> Add a project</button>
      </div>
        <div class="card-body p-0">
         <div class="amsify-suggestags-input-area form-control" style="border:0px;">
         <span class="amsify-select-tag col-bg" data-val="this is">this is <span class="fa fa-times amsify-remove-tag"></span></span>
         <span class="amsify-select-tag col-bg" data-val="this is">this is <span class="fa fa-times amsify-remove-tag"></span></span>
         <span class="amsify-select-tag col-bg" data-val="this is">this is <span class="fa fa-times amsify-remove-tag"></span></span>
         <span class="amsify-select-tag col-bg" data-val="this is">this is <span class="fa fa-times amsify-remove-tag"></span></span>
         </div>


        </div>
     </div>
  </div>
  <div class="col-xl-6 pb-5">
   <div class="card">
     <div class="card-header">Education
        <button style="float:right" type="button" class="btn btn-info add-new btn-sm m-0 pt-0 pb-0"  data-toggle="modal" data-target="#add_education"><i class="fa fa-plus"></i> Add A Diploma/Degree/Certificate</button>
     </div>
      <div class="card-body">
        table
      </div>
   </div>
</div>


</div>


</div>



<div class="modal fade" id="add_project" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">

     <!--Content-->
     <div class="modal-content">
       <div class="modal-header pr-4 pl-4">
           <h4 class="modal-title text-muted"><i class="fas fa-plus "></i><small>Add A project</small></h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

       <!--Body-->
       <div class="modal-body mb-0 p-0">
          feilds here
             
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center text-center">
          
         <div class="row justify-content-center ">
            <div class="col-lg-4">
                <div class="text-center ">
                    <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-edit"></i> Add</a> 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center ">
                    <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Cancel</a> 
                </div>
            </div>
            </div>

       </div>

     </div>

     <div class="modal fade" id="add_education" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
   
        <!--Content-->
        <div class="modal-content">
          <div class="modal-header pr-4 pl-4">
              <h4 class="modal-title text-muted"><i class="fas fa-plus "></i><small>Add Education</small></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
   
          <!--Body-->
          <div class="modal-body mb-0 p-0">
             feilds here
                
          </div>
   
          <!--Footer-->
          <div class="modal-footer justify-content-center text-center">
             
            <div class="row justify-content-center ">
               <div class="col-lg-4">
                   <div class="text-center ">
                       <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-edit"></i> Add</a> 
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="text-center ">
                       <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Cancel</a> 
                   </div>
               </div>
               </div>
   
          </div>
   
        </div>
     <!--/.Content-->

   </div>
</div>
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('css/edit-portfolio.css') }}" />
<link rel="stylesheet" href="{{ asset('css/amsify.suggestags.css') }}" />

<style>
   /*Profile Pic Start*/
.picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 13rem;
    height: 13rem;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.picture:hover{
    border-color: #1ABC9C;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
/*Profile Pic End*/
</style>
@endsection


@section('footer')
<script src="{{ asset('js/edit-portfolio.js') }}" ></script>
<script src="{{ asset('js/jquery.amsify.suggestags.js') }}" ></script>
<script type="text/javascript">


	$('input[name="skills"]').amsifySuggestags({
		suggestions: ['Laravel', 'Symfony', 'CodeIgniter', 'Zend Framework', 'Yii Framework', 'CakePHP', 'Slim', 'Phalcon', 'FuelPHP', 'Apache', 'Linux', 'Nginx', 'PHP', 'MongoDB', 'Express', 'AngularJS', 'Nodejs', 'Python', 'Django', 'MySQL', 'JavaScript', 'Ruby', 'SQLite', 'Rails']
	});
	
   $(document).ready(function(){
   // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
   });
   function readURL(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
               $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
         }
         reader.readAsDataURL(input.files[0]);
      }
   }

</script>
@endsection


@section('title')
Edit Portfolio
@endsection

