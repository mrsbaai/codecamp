@extends('layouts.app')
@section('content')
<div class="container" data-aos="fade-up">
            <div class="text-center m-5">
                <h3> Upcoming events</h3>
            </div>
       <div class="row justify-content-center">
          <div class="col-lg-10">
               <table class="table table-bordered">
                  
                 <tbody>
                    <tr>
                        <th scope="col" class="col-4 p-0 d-none d-sm-table-cell">
                            <img alt="Dolorum optio tempore" src="img/square.jpg" class="card-img rounded-0">
                        </th>
 
                      <td>
                         <div>
                            <div class="card-body">
                                <h4 class="card-title mb-1">2021 New Year Online Business Resolution</h4>
                               <h6 class="card-subtitle mb-2 text-muted">
                                 <div class="row">
                                    <div class="col-12 mt-3">
                                        <p class="card-text"><i class="fas fa-map-marker-alt text-primary"></i> <small class="text-muted"> Wilaya Center ET5 N°55 TETOUAN MOROCCO</small></p>
                                   </div>
                                   <div class="col-8 col-sm-12 mt-3">
                                        <p class="card-text"><i class="fas fa-calendar-alt text-primary"></i><small class="text-muted"> 01/03/2021 - 01/03/2021</small></p>
                                   </div>
                                   
                                   <div class="col-4 col-sm-12 mt-3">
                                    <p class="card-text"><i class="fas fa-money-bill-wave text-primary"></i><small class="text-muted"> 190 DH</small></p>
                                    </div>



                                   </div>
                               </h6>
                               <p class="card-text">We are organizing a professional gathering to discuss and exchange ideas about how can we make our online businesses more profitable in 2021. </p>
                               <div class="text-right">
                                <a href="eventdetails" class="card-link">More info</a>
                                <button type="button" class="btn btn-md btn-primary"  data-toggle="modal" data-target="#events1" >Subscribe</button>

                                  
                                </div>
                              </div>
                          </div>
                      </td>
                    </tr>
                    
                 </tbody>
               </table>
            </div>
               <div class="modal fade" id="events1" tabindex="-1" role="dialog" aria-labelledby="episode title here" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          
                      <!--Content-->
                      <div class="modal-content">
          
                        <!--Body-->
                        <div class="modal-body">
                           <div class="card-body">
                                <h5 class="card-title text-primary"><span class="badge badge-pill badge-dark mr-3">190 Dh</span> Dolorum optio tempore </h5>
                               <h6 class="card-subtitle mb-2 text-muted">
                                   <div class="row">
                                     <div class="col-6 col-md-3 mt-2 ">
                                         <p class="card-text"><i class="fas fa-calendar-alt text-primary"></i><small class="text-muted"> 01/03/2021</small></p>
                                     </div>
                                      <div class="col-6 col-md-3  mt-2">
                                         <p class="card-text"><i class="fas fa-clock text-primary"></i> <small class="text-muted"> 03:00-5:00</small></p>
                                       </div>
                                     <div class="col-6 col-md-6  mt-2">
                                          <p class="card-text"><i class="fas fa-map-marker-alt text-primary"></i> <small class="text-muted"> Wilaya Center ET5 N°55 TETOUAN MOROCCO</small></p>
                                     </div>
                                   </div>

                               </h6>
                               <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             </div>
                             <div class="form-row">
                                <div class="col-lg-4 form-group">
                                     <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                     <div class="validate"></div>
                                 </div>
                                 <div class="col-lg-4 form-group">
                                      <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" data-rule="minlen:8" data-msg="Please enter your realphone number" />
                                      <div class="validate"></div>
                                 </div>
                                 <div class="col-lg-4 form-group">
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                      <div class="validate"></div>
                                 </div>
                                 
                             </div>
                        </div>
          
                        <!--Footer-->
                         <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Submit</button>
                         </div>
          
                      </div>
                      <!--/.Content-->
          
                    </div>
            </div>
      </div>
</div>
</br></br></br>
@endsection
@section('title')
: Events
@endsection
