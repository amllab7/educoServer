
<?php 
 
$allaxes = $dataExec['getAllaxes'];  

 
 
 ?>

        <div class="mb-0" id="consoleDevADMINER" style=" display:none; background-color: black;margin: 20px;border-radius:20px;height: 200px;padding: 20px;color: green; overflow-y: scroll; ">
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Totale Membres </p>
                    <h5 class="font-weight-bolder mb-0">
                         <?php echo($dataExec['stat_DATA']['countedAll']); ?>
                      <span class="text-success text-sm font-weight-bolder"><?php echo(date('h:i:s A')); ?></span>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Totale Axes</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['countedAll_active']); ?>
                      <span class="text-success text-sm font-weight-bolder">::::</span>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Axes Actives</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['desactive']); ?>
                      <span class="text-danger text-sm font-weight-bolder">Axes InActives</span>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Axes InActives</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['lastEntry']); ?>
                      <span class="text-success text-sm font-weight-bolder">::::</span>
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
              <h6>Liste des Axes</h6>

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


                  <?php   foreach ($allaxes as $index => $value) {  ?>
                    <tr>
                       <td> 
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo($direURI); ?>view/admin/assets/img/community.png" class="avatar avatar-sm me-3 clickModif" alt="user1"
                         
                          id=""   
                          repository="../" 
                          functionExec="externlePicture" 
                          dataval=""
                          datatitre= "Taper un liens sur internet"
                          thtable="user"
                          idcol="picture_link"
                          idrow=<?php echo $value['id']; ?> token="csjbhbsjc"
                          style="cursor:pointer"
                            
                            
                            >
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $value['nom'];   ?></h6>
                            <p class="text-xs text-secondary mb-0 dblclickModif"
                            id=""   
                          repository="../" 
                          functionExec="externlePicture" 
                          dataval="<?php echo $value['nom'];   ?>"
                          datatitre= "Taper un liens sur internet"
                          thtable="user"
                          idcol="usermail"
                          idrow=<?php echo $value['id']; ?> token="csjbhbsjc"
                            
                            > <?php echo $value['representant'];   ?> </p>
                           
                          </div> 
                        </div>
                      </td>


                      <td>
                        <p class="text-xs font-weight-bold mb-0"> <?php echo $value['addresse'];   ?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $value['numero'];   ?></p>
                         
                        
                      </td>

                      <td class="align-middle text-center text-sm">
                            <?php if ($value['statut']==1) { ?>
                                      <span class="badge badge-sm bg-gradient-success" style="cursor: " >EN FONCTION</span>
                                      <p class="text-xs font-weight-bold mb-0"> <?php echo $value['datecreation'];   ?></p>
                              <?php } else{   ?> <span class="badge badge-sm bg-gradient-danger" style="cursor: pointer">SUSPENDU :::</span> <?php   }   ?>
                            
                      </td>

                      <td class="align-middle text-center text-sm" data-bs-toggle="modal" data-bs-target="#addDATA">
                          <span class="badge badge-sm bg-gradient-success" style="cursor: pointer">VOIR LE PROFILE</span>
                      </td>
                      <td class="align-middle text-center text-sm"> 
                         <a href="<?php echo($direURI); ?>admin/profile/<?php echo $value['id'];?>"  data-toggle="tooltip" data-original-title="Edit user" >
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
                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter un utilisateur</h3>
                    <p class="mb-0">L'utilisateur sera indiqué a votre nom</p>
                  </div>
              <div class="card-body">
                 <form id="addaxeForm"> 
                    <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                    <input type="hidden" class="form-control" value="Users" id="controllers" name="datatype">
                    <input type="hidden" class="form-control" value="AddNewaxe" id="addnewuser" name="funcExec">
 
                  <label>Nom de l'Axe</label>
                  <div class="input-group mb-3">
                    <input required='require' type="text"id="mail" name="nomaxe" class="form-control" placeholder="Email ou mot de pass" aria-label="Email" aria-describedby="email-addon">
                  </div>


                  <label>Representant</label>
                  <div class="input-group mb-3">
                    <input required='require' type="text" id="pass" name="representant"  class="form-control" placeholder="Numero de telephone" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Acces direct</label>
                  </div>

                  

                   <div class="btn-group dropup  " style="display:none">
                      <button type="button" class="btn bg-gradient-danger  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Cathegorie du compte
                      </button>
                      <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">utlisateur</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Admistrateur</a></li>
                         
                      </ul>
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
                    <p class="mb-4 text-sm mx-auto">
                    L'utlisateur sera jouté mais desactivé par defaut par manques d'informations
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
            <h5 class="modal-title" id="exampleModalLabel">Ajouter une réalisations</h5>
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
                <button type="submit" class="btn bg-gradient-primary" onclick="analyser()">ENREGISTRER</button>
              </div>
            
          </div>
           
        </div>
      </div>
   </div>








 

    

     <!-- Modal -->
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
            <form id="editedSingleSMT">  
              <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
              <input type="hidden" class="form-control" value="Users" id="controller2" name="datatype">
              <input type="hidden" class="form-control" value="AddNewCompetence" id="funcExec" name="funcExec">
              <input type="hidden" class="form-control" value="<?php echo $userData['id'];   ?>" id="controller2" name="userid"> 

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


       
    



  