
<?php 
 
$alluser = $dataExec['getAlluser'];  

 
 
 ?>

        <div class="mb-0" id="consoleDevADMINER" style=" display:; background-color: black;margin: 20px;border-radius:20px;height: 200px;padding: 20px;color: green; overflow-y: scroll; ">
                  CONSOLE 
                  <div id="realtime"></div>
                
                  <div class="hacking-animation">
                <pre class="hacking-animation__text">
                </pre>

                <div id="freeRetour"></div>
            </div>  
          </div>
          <br> 


  


          <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total users </p>
                    <h5 class="font-weight-bolder mb-0"> 
                         <?php  echo($dataExec['stat_DATA']['countedAll']); ?>
                      <span class="text-success text-sm font-weight-bolder"> <?php  echo(date('h:i:s A')); ?></span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"> users Actives</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['countedAll_active']); ?>
                      <span class="text-success text-sm font-weight-bolder"> ::::</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">users  InActives</p>
                    <h5 class="font-weight-bolder mb-0"> 
                    <?php  echo($dataExec['stat_DATA']['desactive']); ?>
                      <span class="text-danger text-sm font-weight-bolder">users</span>
                    </h5> 
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Denier Inscrit</p>
                    <h5 class="font-weight-bolder mb-0"> 
                    <?php echo date('d/m/Y H:i:s', $dataExec['stat_DATA']['lastEntry']); ?>
                      <span class="text-success text-sm font-weight-bolder"> </span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br> 
 
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Liste utilisateurs </h6>

                     <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                          <div class="input-group" style="z-index:50">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Recherche rapide..." id="theSearcher">
                             
                            
                          </div>
 
                    </div>


                        
                      
                 


            </div>




            

            





            


            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Infos</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ADHESION</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTION</th>
                        
                    </tr>
                  </thead>
                  <tbody>


                  <?php   foreach ($alluser as $index => $value) {  ?>
                    <tr>
                       <td> 
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo($direURI); ?>view/admin/assets/img/youtube.png" class="avatar avatar-sm me-3 clickModif" alt="user1"
                         
                          id=""    
                          repository="../" 
                          functionExec="updatevideo" 
                          dataval="<?php echo $value['hostid_vid'];   ?>"
                          datatypeok="videos"
                          datatitre= "Taper ID Youtube"
                          thtable="videos"
                          idcol="hostid_vid"
                          idrow=<?php echo $value['id_vid']; ?> token="csjbhbsjc"
                          style="cursor:pointer"
                                
                            >
                          </div>


                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm dblclickModif"
                            id=""   
                          repository="../"  
                          functionExec="updatevideo" 
                          dataval="<?php echo $value['titre_vid'];   ?>"
                          datatypeok="videos"
                          datatitre= "Taper le nom"
                          thtable="videos"
                          idcol="titre_vid"
                          idrow="<?php echo $value['id_vid']; ?>" token="csjbhbsjc" 
                          style="cursor:pointer"
                            
                            
                            >  <?php echo $value['titre_vid'];   ?>  </h6>

                            <p class="text-xs text-secondary mb-0 dblclickModif"
                            > <?php echo $value['hostid_vid'];   ?> </p>
                           <p class="text-xs text-secondary mb-0"><?php// echo $value['id_user'];   ?></p>
                          </div> 
                        </div>
                      </td>

 
                      <td> 
                        <p class="text-xs font-weight-bold mb-0"> Acceder</p>

                        <p class="text-xs text-secondary mb-0 clickModif"
                          id=""   
                          repository="../"  
                          functionExec="updatevideo" 
                          dataval="Description"
                          datatypeok="videos"
                          datatitre= "Taper la description"
                          thtable="videos"
                          idcol="description_vid"
                          idrow=<?php echo $value['id_vid']; ?> token="csjbhbsjc" 
                          style="cursor:pointer"
                        
                        
                        >  Pour modifier le liens  
                        <span class="badge badge-sm bg-gradient-success clickModif" style="cursor: pointer">Modifier</span></p>
                        
                      </td>

                      <td class="align-middle text-center text-sm">
                            <?php if ($value['isactive_vid']==1) { ?>
                                      <span idrow= <?php echo $value['id_vid'];?> functionExec="updatevideo" datatypeok="videos" idcol = 'isactive_vid' repository = "../" dataval=0 class="badge badge-sm bg-gradient-success editActiv" style="cursor: pointer" >DISPONIBLE...</span>

                              <?php } else{   ?> <span idrow= <?php echo $value['id_vid'];?> functionExec="updatevideo" datatypeok="videos" idcol = 'isactive_vid' repository = "../" dataval=1 class="badge badge-sm bg-gradient-danger editActiv" style="cursor: pointer">INDISPONIBLE</span> <?php   }   ?>
                            
                      </td>

                      <td class="align-middle text-center text-sm" data-bs-toggle="modalXX" data-bs-target="#addDATAXX">


                      <?php if ($value['islive_vid']==1) { ?>
                                      <span idrow= <?php echo $value['id_vid'];?> functionExec="updatevideo" datatypeok="videos" idcol = 'islive_vid' repository = "../" dataval=0 class="badge badge-sm bg-gradient-success editActiv" style="cursor: pointer" >EN LIVE...</span>

                              <?php } else{   ?> <span idrow= <?php echo $value['id_vid'];?> functionExec="updatevideo" datatypeok="videos" idcol = 'islive_vid' repository = "../" dataval=1 class="badge badge-sm bg-gradient-info editActiv" style="cursor: pointer">NORMAL</span> <?php   }   ?>
                          

                      </td>
                      <td class="align-middle text-center text-sm"> 
                         <a href="<?php echo($direURI); ?>admin/profile/<?php echo $value['id_vid'];?>"  data-toggle="tooltip" data-original-title="Edit user" class="inDever">
                          <span class="badge badge-sm bg-gradient-success">Gerer l'axe</span>
                        </a>
                      </td>
                 </tr>


                    <?php   } ?>












                     
                  </tbody>
                </table>
                <button style=" float: right;margin-right : 45px ;margin-top : 15px " type="button" class="btn btn-primary btn-lg w-20"  data-bs-toggle="modal" data-bs-target="#addUserModal">Ajouter</button>

              </div>

              
       
            </div>
          </div>
        </div>
       </div>
       

 

       <button style="display:none" datatest="scsjoj" class="btn bg-gradient-info  "  id="themodifiermodal" data-bs-toggle="modal" data-bs-target="#themodifier">Modifier</button>

 






       
       


    
       <div class="col-md-4"> 
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
            


          
            
            
            <div class="card-header pb-0 text-left">
                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter une vidéo</h3>
                    <p class="mb-0">La vidéo sera ajoutée à votre nom</p>
                  </div>
              <div class="card-body">
                 <form id="addData"> 
                    <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                    <input type="hidden" class="form-control" value="videos" id="controllers" name="datatype">
                    <input type="hidden" class="form-control" value="thenewvideo" id="thenewvideo" name="funcExec"> 
 
                  <label>Nom complet</label>
                  <div class="input-group mb-3">
                    <input required='require' type="text" id="titre" name="titrevideo" class="form-control" placeholder="Titre du livre" aria-label="Titre" aria-describedby="Titre-addon">
                  </div>


                  <label>Liens du livre</label>
                  <div class="input-group mb-3">
                    <input required='require' type="text" id="idYoutube" name="idYoutube"  class="form-control" placeholder="id Youtube" aria-label="Desciption" aria-describedby="password-addon">
                  </div>

                  <div class="form-group">
                      <label for="message-text" class="col-form-label">Message:</label>
                      <textarea class="form-control" id="aboutme" name="desc" placeholder="Decrivez votre réalisation" style="height : 150px"></textarea>
                    </div> 


                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" id="isCheck" name="isCheck">
                    <label class="form-check-label" for="rememberMe">Rendre privé</label>
                  </div>

                  

                    
                   
                    <div class="modal-footer">
                      <button type="button" class="btn bg-gradient-secondary closeModal" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn bg-gradient-primary">ENREGISTRER</button>
                    </div>
                  </form>
               </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                     Pour plus d'infos : 
                      <a href="javascript:;" class="text-info text-gradient font-weight-bold">Documentation</a>
                    </p>
                     
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>














<div class="modal fade" id="addDATA" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apercu</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <div id="retob">
           
          </div>
             
         

          <div class="text-center">
            Loading...<br>
              <div class="spinner-border" role="status">
                           <span class="sr-only"></span>
             </div>
             </div>
 
              <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" onclick="analyserf()">ENREGISTRER</button>
              </div>
            
          </div>
           
        </div>
      </div>
   </div>








 

    

     <!-- Modal 
     ce modal sert a modifier de donnees unique
     execute la fonction dans un fichier JS
    
    
    --> 
     <div class="modal fade" id="themodifier" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editedTitle">Edit</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <p id="dataEditedText"></p>
            <form id="editedSingleSMT">    
              <input type="text" class="form-control" id="dataEdited" name="dataEdited" placeholder = "Taper..."><br> 
              <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal" id="closeModal">Close</button>
                <button type="submit" class="btn bg-gradient-primary">ENREGISTRER</button>
              </div>
            </form>
          </div>
           
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    </div>
 </div>


       
    



  