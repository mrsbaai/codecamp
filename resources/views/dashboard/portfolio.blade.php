@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">  
      <div class="col-lg-12 ">
        <div class="card">
          <div class="card-header ">
            Edit portfolio
         </div>
           <div class="card-body">
             <div class="row">
               <div class="col-md-4">
                 <img src="https://codecamp.ma/img/blog.jpg" alt="" class="img-thumbnail">
               </div>
               <div class="col-md-8">
                 <div class="form-row">
                   <div class="form-group col-md-6">
                     <label for="title"><strong>Title</strong></label>
                     <input type="text" class="form-control" id="title" name="title">    
                   </div>
                   <div class="form-group col-md-6">
                     <label for="picture"><strong>Picture</strong></label>
                     <input type="file" class="form-control-file" id="picture" name="picture">   
                  </div>
                 </div>
                 <div class="form-row">
                   <div class="form-group col-md-12">
                     <label for="about_me"><strong>About me</strong></label>
                     <textarea class="form-control" name="about_me" id="about_me" rows="3"></textarea>
                   </div>
                 </div>
               </div>
             </div>
             <div class="form-row">
               <div class="form-group col-md-12">
                   <div class="row">
                      <div class="col-sm-8"><strong>Skills</strong></div>
                  </div>
                  <table class="table table-bordered">
                      <thead>
                       <tr class="table-secondary">
                          <th class="text-center">Title</th>
                          <th class="text-center">Actions</th>
                       </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Laravel</td>
                          <td class=" text-center" >
                             <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-edit"></i> Edit </a> 
                             <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Delete</a> 
                          </td>
                       </tr>
                     </tbody>
                   </table>
                </div>
                <div class="form-group col-md-4 offset-md-8 text-right">
                 <h3><a href="#"><i class="fas fa-plus-square"></i></a></h3>  
               </div>
             </div>
             <div class="form-row">
               <div class="form-group col-md-12">
                   <div class="row">
                      <div class="col-sm-8"><strong>Education</strong></div>
                  </div>
                  <table class="table table-bordered">
                      <thead>
                       <tr class="table-secondary">
                          <th class="text-center">Diploma</th>
                          <th class="text-center">Establishment</th>
                          <th class="text-center">Graduation</th>
                          <th class="text-center">Actions</th>
                       </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Master</td>
                          <td>ENSIAS</td>
                          <td>2019</td>
                          <td class=" text-center" >
                             <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-edit"></i> Edit </a> 
                             <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Delete</a> 
                          </td>
                       </tr>
                     </tbody>
                   </table>
                </div>
                <div class="form-group col-md-4 offset-md-8 text-right">
                 <h3><a href="#"><i class="fas fa-plus-square"></i></a></h3>  
               </div>
             </div>
             <div class="form-row">
               <div class="form-group col-md-12">
                   <div class="row">
                      <div class="col-sm-8"><strong>Projects</strong></div>
                  </div>
                  <table class="table table-bordered">
                      <thead>
                       <tr class="table-secondary">
                          <th class="text-center">Title</th>
                          <th class="text-center">Date of creation</th>
                          <th class="text-center">Link</th>
                          <th class="text-center">Description</th>
                          <th class="text-center">Actions</th>
                       </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Website</td>
                          <td>2021</td>
                          <td>https://codecamp.ma/</td>
                          <td>Project by laravel....</td>
                          <td class=" text-center" >
                             <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-edit"></i> Edit </a> 
                             <a class="btn btn-outline-dark" href="#" role="button"><i class="fas fa-trash-alt"></i> Delete</a> 
                          </td>
                       </tr>
                     </tbody>
                   </table>
                </div>
                <div class="form-group col-md-4 offset-md-8 text-right">
                 <h3><a href="#"><i class="fas fa-plus-square"></i></a></h3>  
               </div>
             </div>
             <div class="form-row">
               <div class="form-group col-md-12">
                 <label for="links"><strong>Social links</strong></label>
               </div>
             </div>
             <div class="form-row">
                <div class="form-group col-lg-1 text-center">
                 <h3><i class="fab fa-facebook-square "></i></h3>                             
                 <h3><i class="fab fa-linkedin "></i></h3>                            
                 <h3><i class="fab fa-twitter-square "></i></h3>
                 <h3><i class="fab fa-github-square "></i></h3>
                 <h3><i class="fad fa-window "></i></h3>
                </div>
                <div class="form-group col-lg-11">
                  <input type="url" class="form-control m-1" id="links" name="links">  
                  <input type="url" class="form-control m-1" id="links" name="links"> 
                  <input type="url" class="form-control m-1" id="links" name="links"> 
                  <input type="url" class="form-control m-1" id="links" name="links"> 
                  <input type="url" class="form-control m-1" id="links" name="links"> 
                </div>
             </div>
              <div class="text-right"><button  class="btn btn-dark" type="submit">Submit</button></div>
            </div>
          </div>
       </div>
    </div>
  </div>
@endsection


@section('title')
Edit Portfolio
@endsection
