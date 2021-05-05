@extends('layouts.dashboard')
@section('content')
<div class="container pt-4">
   <div class="row">
      <div class="col-xl-6 pb-5">
         <div class="card">
            <div class="card-header">
               Who are you?
            </div>
            <div class="card-body">
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

             <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text">https://codecamp.ma/</span>
               </div>
               <input id="username" type="text" class="form-control" name="username" placeholder="youssef123" required>
            </div>
            @error('username')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
         </div>
      </div>
      <div class="col-xl-6 pb-5">
        <div class="card">
           <div class="card-header">
             Face photo
           </div>
           <div class="card-body">
            <div class="custom-file">
               <input type="file" accept="image" class="custom-file-input" id="photo" name="photo" required>
               <label class="custom-file-label" for="photo">Choose photo...</label>
               @error('photo')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
               @enderror
             </div>
              
           </div>
        </div>
     </div>
   </div>
   <div class="row">
    <div class="col-xl-6 pb-5">
       <div class="card">
          <div class="card-header">
            About
          </div>
          <div class="card-body">
            <div class="input-group mb-3">

               <textarea id="title" type="text" class="form-control" name="title" placeholder="I love coding, camping and traveling. I'm looking for parteners to work on innovative ideas....." required>
               </textarea>
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text">https://www.youtube.com/watch?v=</span>
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
    <div class="col-xl-6 pb-5">
      <div class="card">
         <div class="card-header">Skills 
            <button style="float:right" type="button" class="btn btn-info add-new btn-sm m-0 pt-0 pb-0"><i class="fa fa-plus"></i> Add a skill</button>
         </div>
         <div class="card-body">
            table

         </div>
      </div>
   </div>
 </div>
 <div class="row">
  <div class="col-xl-6 pb-5">
     <div class="card">
      <div class="card-header">Projects 
         <button style="float:right" type="button" class="btn btn-info add-new btn-sm m-0 pt-0 pb-0"><i class="fa fa-plus"></i> Add a project</button>
      </div>
        <div class="card-body">
           table
        </div>
     </div>
  </div>
  <div class="col-xl-6 pb-5">
    <div class="card">
      <div class="card-header">Education
         <button style="float:right" type="button" class="btn btn-info add-new btn-sm m-0 pt-0 pb-0"><i class="fa fa-plus"></i> Add A Diploma/Degree/Certificate <button>
      </div>
       <div class="card-body">
         table
       </div>
    </div>
 </div>
</div>

</div>
@endsection
@section('title')
Edit Portfolio
@endsection

