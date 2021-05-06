@extends('layouts.dashboard')
@section('content')
<div class="container pt-4">

   


   <div class="card mb-5">
      <div class="card-header">
         Face photo
      </div>
      <div class="card-body face-photo-card">
         <div class="row">
         <div class="col-xl-4 pb-5">
            <div class="text-center">
               <img src="https://i.imgur.com/KmeTFmn.jpg" class="masthead mb-4 rounded-circle">
            </div>

         </div>
         <div class="col-xl-8 pb-5">
            <div class="custom-file  mb-3">
               <input type="file" accept="image" class="custom-file-input" id="photo" name="photo" required>
               <label class="custom-file-label" for="photo">Choose photo...</label>
               @error('photo')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
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




   
   <div class="row">
      <div class="col-12 pb-5">
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
        <div class="card-body p-0">
         <table class="table table-striped m-0">
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="name" id="name" placeholder="Project name (Ex CodeCamp.ma)" value="CodeCamp.ma"></td>
                    <td><textarea type="text" class="form-control" name="description" id="description" placeholder="Decription (Ex Moroccan web experts community. An Initiative to highlight porductivity tools for entroponeurs, moroccan success stories, modern carer paths and informational technologies.)">Moroccan web experts community. An Initiative to highlight porductivity tools for entroponeurs, moroccan success stories, modern carer paths and informational technologies."</textarea></td>
                    <td><input type="text" class="form-control" name="link" id="link" placeholder="Link (Ex https://www.codecamp.ma or FB.com/CodeCamp.ma)" value="https://codecamp.ma"></td>
                    <td><input type="text" class="form-control" name="release" id="release" placeholder="Release Year (Ex 2020)" value="2020"></td>
                    <td>
                       <a class="add" title="Add" data-toggle="tooltip"><i class="fa fa-thumbs-up"></i></a>
                       <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                     
            </tbody>
        </table>
        </div>
     </div>
  </div>
  <div class="col-xl-6 pb-5">
   <div class="card">
     <div class="card-header">Education
        <button style="float:right" type="button" class="btn btn-info add-new btn-sm m-0 pt-0 pb-0"><i class="fa fa-plus"></i> Add A Diploma/Degree/Certificate</button>
     </div>
      <div class="card-body">
        table
      </div>
   </div>
</div>


</div>


</div>
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('css/edit-portfolio.css') }}" />
@endsection


@section('footer')
<script src="{{ asset('js/edit-portfolio.js') }}" ></script>
@endsection


@section('title')
Edit Portfolio
@endsection

