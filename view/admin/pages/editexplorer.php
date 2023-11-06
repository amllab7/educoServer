
           <?php     
           
           
      
             
            $userData = $dataExec['userinfos'][0]; 
           
         
         
         ?>   

 
  

  <!-- End Navbar -->
  <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?php echo($direURI); ?>/view/assets/datas/images/profile_images/mini/<?php echo $userData['photocover'];   ?>'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">

          <div class="col-auto">

            <div class="avatar avatar-xl position-relative"  for="addIMAG">
            <label for="addIMAG">  <img src="<?php echo($direURI); ?>/view/assets/datas/images/profile_images/mini/<?php echo $userData['photocover'];   ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm" id="realshows" style="max-height:100px">
            </label></div>
          </div>

          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
               <?php echo $userData['titre'];   ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
              Cliquez sur la photo pour modifier le profil
              </p>
            </div>

          </div>
          
        </div>
      </div>
    </div>


 


      <section>

      
  <div class="col-12 mt-4"   id="bodyContainer">
          <div class="card mb-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">

                        <div class="col-md-8 d-flex align-items-center"> 
                        
                          <h6 class="mb-0">Profile Information</h6>
                </div>

                <div class="col-md-4 text-end">
                  <a href="javascript:;">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
               

            <form id='sendEdited' >
                            <div class="row">
                            <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                            <input type="hidden" class="form-control" value="<?php echo $userData['id'];   ?>" id="controller" name="userid"> 
                            <input type="hidden" class="form-control" value="explorer" id="controller" name="datatype">  
                            <input type="hidden" class="form-control" value="editexplorer" id="addnewuser" name="funcExec">


                            <div class="col-md-12">
                                <div class="form-group">
                                  <input type="text" class="form-control"  value="<?php echo $userData['titre'];   ?>" id="nom" name="titre" placeholder = "titre">
                                </div>
                              </div>
                               
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control"  value="<?php echo $userData['keyword'];   ?>" id="nom" name="keywordf" placeholder = "keyword">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['keyword'];   ?>" id="postnom" name="keyword" placeholder = "keyword">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['thedate'];   ?>" id="mail" name="mail"  placeholder = "Mail">
                                </div>
                              </div>


                             


                              
                               

                              <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 300px" id="aboutme" name="descr"  placeholder = "Taper quelque chose sur vous"><?php echo $userData['descriptions'];   ?></textarea>
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="text" class="form-control"  value="<?php echo $userData['redirect'];   ?>" id="nom" name="redirect" placeholder = "Liens de redirection">
                                </div>
                              </div>




                              <div id="editorer">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>

                              

                              

                                <div class="form-group">
                                   
                                     <br><br>
                                     <button type="submit" class="btn bg-gradient-primary">ENREGISTRER</button>
                                </div> 


                                 
                              
                              </div>
                    </form>
              <hr class="horizontal gray-light my-4">


                  <div id="formLoader"> 


                  </div>



              
            </div>
          </div>
         </div>
        </div>

 






<span data-bs-toggle="modal" data-bs-target="#thmodal" id="exss">bhgghj</span>


        
         

   <!-- Modal -->
   <div class="modal fade" id="thmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modifier la photo</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
             <div class="modal-body">
                <img src="<?php echo($direURI); ?>view/admin/assets/img/bruce-mars.jpg" alt="profile_image"
                class="w-100 border-radius-lg shadow-sm" id="realshow3">
                <form id="imagForm">  
                      <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                      <input type="hidden" class="form-control" value="newaccomplish" id="controller" name="datatype"> 
                      <input type="hidden" class="form-control" value="fileDATA" id="fileDATA" name="fileDATA">

                      
                      <input type="hidden" class="form-control" value="<?php echo $userData['id'];   ?>" id="controller" name="userid"> 
                      <div class="fallback" style="display: none">
                                              <input name="avatar" type="file" id="addIMAG"  onchange="readURL3(this)" />
                                      </div>

                      
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">ENREGISTRER</button>
                      </div>
                 </form>
             </div>
         </div>
      </div>
    </div>





</section>


 





  