
           <?php     
           
           
             function editprofileDESIGN($dataExec)  {
              $userData = $dataExec[0];
             
           
           
           ?>                 
                            
                            
                            
                     <form id='sendUserDATTAAA' >
                            <div class="row">
                            <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                            <input type="hidden" class="form-control" value="1" id="controller" name="userid"> 
                            <input type="hidden" class="form-control" value="newuser" id="controller" name="datatype">
                               
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control"  value="<?php echo $userData['username'];   ?>" id="nom" name="nom" placeholder = "Nom">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['prenom'];   ?>" id="postnom" name="postnom" placeholder = "Post Nom">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['usermail'];   ?>" id="mail" name="mail"  placeholder = "Mail">
                                </div>
                              </div>


                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['phone'];   ?>" id="phone" name="phone"  placeholder = "phone">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['jobprofile'];   ?>" id="jobprofile" name="jobprofile"  placeholder = "job profile">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['cityof'];   ?>" id="cityof" name="cityof"  placeholder = "Adress de residence">
                                </div>
                              </div>


                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['instagram'];   ?>" id="instagram" name="instagram"  placeholder = "instagram link">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['userange'];   ?>" id="userange" name="userange"  placeholder = "Taper votre age">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" class="form-control" value="<?php echo $userData['userpass'];   ?>" id="userpass" name="userpass"  placeholder = "Mot de pass">
                                </div>
                              </div>



                              
                               

                              <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 300px" id="aboutme" name="	aboutme"  placeholder = "Taper quelque chose sur vous"><?php echo $userData['aboutme'];   ?></textarea>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                              </div>

                                <div class="form-group">
                                     <a class="btn bg-gradient-primary col-md-10" href="" id="editProfile">Deconnexion</a>
                                     
                                     <button type="submit" class="btn bg-gradient-primary">Send messageXX</button>
                                </div> 
                                 
                              
                              </div>
                    </form>
                    <script> $("#sendUserDATTAAA").submit(function(e){ e.preventDefault(); tester(this); });   </script>





                          <?php   }  ?> 

              