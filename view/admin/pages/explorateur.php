
<?php 
  
$dataExplorer = $dataExec['getAlluser']; 

 
  
 ?>

        <div class="mb-0" id="consoleDevADMINER" style="background-color: black;margin: 20px;border-radius:20px;height: 200px;padding: 20px;color: green; overflow-y: scroll; display:none">
                  CONSOLE 
                  <div id="realtime"></div>
                
                  <div class="hacking-animation">
                <pre class="hacking-animation__text">
                </pre>

                <div id="freeRetour"></div>
            </div>  
          </div>
           





          <div class="container-fluid py-4">
      <div class="row">
 

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['countedAll']); ?> <br>
                      <span class="text-danger text-sm font-weight-bolder">Contenus</span>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Actifs</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['countedAll_active']); ?> <br>
                      <span class="text-danger text-sm font-weight-bolder">Contenus</span>
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


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Banis</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['desactive']); ?> <br>
                      <span class="text-danger text-sm font-weight-bolder">Contenus</span>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Dernier Ajout </p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo($dataExec['stat_DATA']['lastEntry']); ?> <br>
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
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Infos</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTION</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTION</th>
                       
                    </tr>
                  </thead>
                  <tbody>


                  <?php   foreach ($dataExplorer as $index => $value) {  ?>
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo($direURI); ?>view/admin/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $value['titre'];   ?></h6>
                            <p class="text-xs text-secondary mb-0"> <?php echo $value['thedate'];   ?> </p>
                          </div> 
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"> <?php echo $value['keyword'];   ?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo ('ANDRE MAZI');   ?></p>
                      </td>

                      <td class="align-middle text-center text-sm">
                      <?php if ($value['id']==1) { ?>
                                 <span class="badge badge-sm bg-gradient-success" style="cursor: pointer" >ACTIF IS ON</span>
                        <?php } else{   ?> <span class="badge badge-sm bg-gradient-danger" style="cursor: pointer">DESACTIVE</span> <?php   }   ?>
                       

                      </td>

                      <td class="align-middle text-center text-sm" data-bs-toggle="modal" data-bs-target="#addDATA">
                        
                         <span class="badge badge-sm bg-gradient-success" style="cursor: pointer">Utiliser</span>
                       
                    </td>
                       

                      <td class="align-middle text-center text-sm"> 
                        
                          <a href="<?php echo($direURI); ?>admin/viewexplorer/<?php echo $value['id'];?>" class="inDever"  data-toggle="tooltip" data-original-title="Edit user" >
                          <span class="badge badge-sm bg-gradient-success">Voir plus</span>
                        </a>
                      </td>

                      

                       
                    </tr>


                    <?php   } ?>

                     
                  </tbody>
                </table>
                
              </div>
            </div>
          </div>
        </div>
       </div>
       

 
   <button type="button" class="btn btn-primary btn-lg w-20"  data-bs-toggle="modal" data-bs-target="#addUserModal">Ajouter</button>
  
    
<div class="col-md-4"> 
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
            


          
            
            
            <div class="card-header pb-0 text-left">
                    <h3 class="font-weight-bolder text-info text-gradient">Explorer</h3>
                    <p class="mb-0">Le contenu sera indiqué a votre nom</p>
                  </div>
              <div class="card-body">
                 <form id="adduserForm"> 
                    <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                    <input type="hidden" class="form-control" value="Explorer" id="controllers" name="datatype">
                    <input type="hidden" class="form-control" value="AddNewExplorer" id="AddNewExplorer" name="funcExec">
 
                  <label>Titre du contenu</label>
                  <div class="input-group mb-3">
                    <input required='require' type="text"id="mail" name="titre" class="form-control" placeholder="Email ou mot de pass" aria-label="Email" aria-describedby="email-addon">
                  </div>


                  <label>Description du contenu</label>
                  <div class="input-group mb-3">
                    <input required='require' type="text" id="pass" name="descr"  class="form-control" placeholder="Numero de telephone" aria-label="Password" aria-describedby="password-addon">
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
                    Le contenu sera jouté mais desactivé par defaut par manques d'informations
                    </p>
                </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>

 








 

    
       
    



  