<?php 
 
$userData = $dataExec['userinfos'];
$abilitations = $dataExec['abilitations'];
 $realisations = array(); 
$myAbilitatyFiltered = $dataExec['myAbilitaty'];
 
 ?>

 



 

    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" 
      style="background-image: url('<?php echo($direURI); ?>/view/assets/datas/images/profile_images/mini/<?php echo $userData['picture_link'];   ?>'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">

          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php echo($direURI); ?>/view/assets/datas/images/profile_images/mini/<?php echo $userData['picture_link'];   ?>" 
              alt="profile_image" class="w-100 border-radius-lg shadow-sm" style="object-fit:cover;">
            </div>
          </div> 

          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1 editableReal">
               <?php echo $userData['FullName'];   ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm"> Representé par : 
              <?php echo $userData['FullName'];   ?>
              </p>

              <div class="form-check form-switch">

              <?php 

              if($userData['is_active']==1){

                $text= "Activée";
                $state = 'checked';
                $dataValer = '0';
                $messager = ' De desactiver ';
               
                
              } else{   $text= "Désactivé";$state ='';  $dataValer = "1"; $messager = "d'Activer"; }
              
              
              ?>
                    <input  functionExec="modifyInfos" datatypeok="Users"  idcol = 'is_active' dataval= <?php echo $dataValer;   ?> 
                    idrow= <?php echo $userData['id_user'];?>  thestatut=<?php echo $userData['is_active'];   ?> 
                    userid=<?php echo $userData['id_user'];   ?>  messager=<?php echo $messager ;   ?> class="form-check-input" type="checkbox" id="rememberMes"
                     onchange="activeGuy(this);" <?php echo $state;   ?> >

                    <label class="form-check-label" for="rememberMe" id="retobVVV">Cette personne est <?php echo $text;   ?></label>
              </div>
          </div> 

          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                              </path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1">Appercu</span>
                  </a>
                </li>
     
                <li class="nav-item" id="editorSDE" valueis="1">
                  <a class="nav-link mb-0 px-0 py-1 "  href="<?php echo($direURI); ?>admin/editprofil/<?php echo $userData['id_user'];   ?>" role="tab" aria-selected="false">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>document</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(154.000000, 300.000000)">
                              <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                              <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                              </path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1">Edition</span>
                  </a>
                </li>
                <li class="nav-item inDeverXX">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>settings</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                              </polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                              </path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1 clickModif" 



                          id=""   
                          repository="../../" 
                          functionExec="modifyInfos" 
                          dataval=""
                          datatitre= "Taper le nouveau mot de passe"
                          thtable="user"
                          datatypeok="Users" 
                          idcol="user_password"
                          idrow=<?php echo $userData['id_user']; ?> token="csjbhbsjc"
                          style="cursor:pointer" >Change pass</span>
                  </a>
                </li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




 




 <!-- SECTION 2 PROFILE VIEW -->
    
 

    <div class="container-fluid py-4" style="display: ">
      <div class="row">
         <div class="col-12 col-xl-4">
           <div class="card h-100">

             <div class="card card-profile card-plain">
                  <div class="card-body  text-center bg-white shadowXX border-radius-lg p-3">
                    <a class="addfile" keyval="AddCv" href="javascript:;">
                      <img class="w-100 border-radius-md" 
                      src="<?php echo($direURI); ?>/view/assets/datas/images/profile_images/mini/<?php echo $userData['picture_link'];   ?>" 
                      style="height:300px; object-fit:cover">
                    </a>
                    <h5 class="mt-3 mb-1 d-md-block d-none"> </h5></br>
                      
                    <button class="btn bg-gradient-success " data-bs-toggle="modal" data-bs-target="#loader">Changer Categorie</button> 
                    <button class="btn bg-gradient-info addfile"  id="" keyval="AddCv">Modifier la photo</button>
                    
                    
                    
                     
                    <div class="card-body p-3">
                        <ul class="list-group">

                         
                          <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="avatar me-3">
                              <img src="<?php echo($direURI); ?>view/admin/assets/img/quality.png" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Abilitations</h6>
                              <p class="mb-0 text-xs">pour donner Acces </p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">
                                 <span type="button" class="btn btn-outline-primary btn-sm mb-0 addfileFF" data-bs-toggle="modal" data-bs-target="#addDATA2">Ajouter .+</span>
                            </a>
                          </li>


                          <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="avatar me-3">
                              <img src="<?php echo($direURI); ?>view/admin/assets/img/thefolder.png" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Les Abilitations</h6>
                              <p class="mb-0 text-xs">Voir tout les acces</p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">
                                 <span type="button" class="btn btn-outline-primary btn-sm mb-0" 
                                 data-bs-toggle="modal" data-bs-target="#addDATAxxxxx">Voir tout</span>

                            </a>
                          </li>
                          


                       
                        </ul>

                        
               </div>


               
                  </div>
             </div>
           </div>
        </div>







         
 
 
 
 
 
 
 
 
<div class="col-12 col-xl-8">
<div class="card h-100">
 <table class="table align-items-center mb-0">
<tbody>
<?php 
 
                    $toDisplay = array(

                    array("Nom",$userData['FullName'],'FullName'),
                    array("Numero ",$userData['username'],'username'),
                    array("	picture_link ",$userData['picture_link'],'picture_link'),
                    array("Description ",$userData['FullName'],'phone'),
                     
                    

                    );


                    foreach ($toDisplay as $key => $value) {
   
 
                     ?>
                    <tr >
                      <td> 
                        <div class="d-flex px-2 py-1" style="margin: 10px;">
                          <div>
                            <img src="<?php echo($direURI); ?>view/assets/datas/images/icons/infos.png" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center" >
                            <h6 class="mb-0"><?php echo $value[0];   ?></h6> 
                            <p class="text-xs text-secondary mb-0" > <?php echo $value[1];   ?> </p>
                          </div> 
                        </div> 
                      </td>

                     <td class="align-middle text-center text-sm">
                      <button 
                      repository="../../"  
                      datatest="scsjoj" class="btn bg-gradient-info clickModif"  id="" 
                      dataval= "<?php echo $value[1];?>"
                      datatitre="<?php echo $value[0];?>"
                      thtable="user"
                      functionExec ="modifyInfos"
                      datatypeok="Users"
                      idcol="<?php echo $value[2];?>"
                      idrow="<?php echo $userData['id_user']; ?>" token="csjbhbsjc">Modifier</button>
                      </td>
                 </tr> 
              <?php   } ?>


              

             





             </tbody>
          </table>
 </div>
</div>
</div>
</div>
<br> 


<button style="display:none" datatest="scsjoj" class="btn bg-gradient-info  "  
id="themodifiermodal" data-bs-toggle="modal" data-bs-target="#themodifier">Modifier</button>
 
   <!-- END SECTION 2 TABLE LISTE -->





  <!-- SECTION 3 TABLE LISTE -->
          
    <div class="container-fluid py-4">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Liste des réalisations</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edition</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Afficher</th> 
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Afficher</th> 
                       
                    </tr>
                  </thead>
                  <tbody>
  

                  <?php 
                  
                  
                  $realisations = array();
                  foreach ($realisations as $key => $value) {
                     ?>
                    <tr >
                      <td> 
                        <div class="d-flex px-2 py-1" style="margin: 10px;">
                          <div>
                            <img src="<?php echo($direURI); ?>view/admin/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>

                          <div class="d-flex flex-column justify-content-center" >

                            <h6 class="mb-0"><?php echo $value['titre']; ?></h6>
                            <p class="text-xs text-secondary mb-0"> <?php  echo $value['category'];    ?> </p>
                          </div> 
                        </div>

                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          <span type="button" class="btn btn-outline-primary btn-sm mb-0">Editer</span>
                        </p>

                        
                      </td>

                      <td class="align-middle text-center text-sm" data-bs-toggle="modal" data-bs-target="#addDATA">
                        
                                    <div class="d-flex flex-column justify-content-center" >

              <h6 class="mb-0"><?php echo $value['titre']; ?></h6>
              <p class="text-xs text-secondary mb-0"> <?php  echo $value['category'];    ?> </p>
              </div> 
                       </td>

                       <td class="align-middle text-center text-sm" data-bs-toggle="modal" data-bs-target="#addDATA">
                        
                        <div class="d-flex flex-column justify-content-center" >

                            <h6 class="mb-0"><?php echo $value['titre']; ?></h6>
                            <p class="text-xs text-secondary mb-0"> <?php  echo $value['category'];    ?> </p>
                          </div> 
                      </td>
                       

                      

                      

                       
                    </tr>


                    <?php   } ?>

                     
                  </tbody>
                </table>

                </br></br></br></br>
                <button style=" float: right;margin-right : 20px ;margin-top : -10px " type="button" class="btn btn-primary" 
       data-bs-toggle="modal" data-bs-target="#addDATA2">Ajouter une activite</button>


       <button  style="display:" type="button" class="btn bg-gradient-secondary" data-bs-toggle="modal" data-bs-target="#pdfModal" id="showPdfMODAL">Close</button> 
 

                
              </div>
            </div>
          </div>
        </div>
       </div></br></br></br></br>
  

<!-- END SECTION 3 TABLE LISTE -->





  














    



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
          <p id="dataEditedText"></p>
            <form id="editedSingleSMT">  
              <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
              <input type="hidden" class="form-control" value="user" id="controller2" name="datatype">
              <input type="hidden" class="form-control" value="AddNewCompetence" id="funcExec" name="funcExec">
              <input type="hidden" class="form-control" value="<?php echo $userData['id_user'];   ?>" id="controller2" name="userid"> 

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


      






















 <!-- Modal -->
   <div class="modal fade" id="addDATAxxxxx" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">

               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ajouter une réalisations</h5>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>



                

                <div class="modal-body">
                  <form id="realisationsrForm"> 
                    <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                    <input type="hidden" class="form-control" value="Users" id="controller2" name="datatype">
                    <input type="hidden" class="form-control" value="newaccomplish" id="funcExec" name="funcExec"> 
                    <input type="hidden" class="form-control" value="<?php echo $userData['id_user'];   ?>" id="controller2" name="userid"> 
                    <input type="text" class="form-control" id="thtitle" name="titre" placeholder = "Titre..."><br> 
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Message:</label>
                      <textarea class="form-control" id="aboutme" name="desc" placeholder="Decrivez votre réalisation"></textarea>
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



 <!-- Modal -->
     <div class="modal fade" id="addDATA2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">


                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une Competence</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form id="whatIDOForm">  
                      <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                      <input type="hidden" class="form-control" value="Users" id="controller2" name="datatype">
                      <input type="hidden" class="form-control" value="AddNewCompetence" id="funcExec" name="funcExec">
                      <input type="hidden" class="form-control" value="<?php echo $userData['id_user'];   ?>" id="controller2" name="userid"> 

                      <input type="text" class="form-control" id="thtitle2" name="titre" placeholder = "Titre..."><br> 
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="aboutme2" name="desc" placeholder="Decrivez votre réalisation"></textarea>
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

          


























 <!-- Modal -->
 <div class="modal fade" id="loader" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">


                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter à</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>


 <div class="modal-body">
  <div class="card">
    <div class="table-responsive" style="max-height: 500px;overflow-y: scroll">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">titre</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Statut</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>


      <div >

      <?php  
    foreach ($abilitations as $key => $value) {
             $img = (in_array($value['id_ability'],$myAbilitatyFiltered)) ? "quality.png" : "lock.png" ;
       


      
        ?>


        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="<?php echo($direURI); ?>view/admin/assets/img/<?php echo $img; ?>" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs"><?php echo $value['nom_ability']; ?></h6>
                <p class="text-xs text-secondary mb-0"> <?php echo $value['nom_ability']; ?> </p>
              </div>
            </div>
          </td>
         
        
          <td class="align-middle text-center">

          <?php if ($value['active_ability']==1) { ?>
                   <span idrow= <?php echo $value['id_ability'];?> functionExec="updatelivre" repository = "../../" datatypeok="livres" idcol = 'isactive_book' dataval=0 class="badge badge-sm bg-gradient-success editActiv" style="cursor: pointer" >EN FONCTION</span>
          <?php } else{   ?> <span idrow= <?php echo $value['id_ability'];?> functionExec="updatelivre" repository = "../../" datatypeok="livres" idcol = 'isactive_book' dataval=1 class="badge badge-sm bg-gradient-danger editActiv" style="cursor: pointer">SUSPENDU :::</span> <?php   }   ?>
                            
           
          
          </td>
          <td class="align-middle">
          
          
          
          
          
          <?php 
          
           if(in_array($value['id_ability'],$myAbilitatyFiltered)) {
  ?>
  <button 
          idrow= <?php echo $userData['id_user'];?> functionExec="updateAbilitation" datatypeok="Users" idcol = 'isValid_abilitation' 
          dataval="<?php echo $value['id_ability']; ?>" repository = "../../" 
          reposit class="btn bg-gradient-danger  editActiv" style="cursor: pointer" > Le Retirer  </button>


 
          <?php     
         
} else{

  ?>

       


  <button 
  idrow= <?php echo $userData['id_user'];?> functionExec="setAbilitation" datatypeok="Users" idcol = 'isValid_abilitation' 
  dataval= "<?php echo  $value['id_ability'];?>"  repository = "../../" reposit class="btn bg-gradient-info  editActiv" style="cursor: pointer" > Accorder </button>



  <?php




} ?>

  </td>
        </tr>



        <?php    } ?>


</div>
  </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>

 </div>         



























      



<!-- Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">


              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
          <div class="modal-body">
                    <!-- 
                                <img src="<?php //echo($direURI); ?>view/admin/assets/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm" id="filePreview">

                    -->           

           <h5 class="card-body text-center "> Voulez-vous apporter cette modification ? </h5>
           <img src="<?php echo($direURI); ?>view/admin/assets/img/illustrations/QM.png" alt="profile_image"
                class="w-100 border-radius-lg shadow-sm" id="realshow3" style="height:400px">

             <form id="pdfForm"> 
                   <input type="hidden" class="form-control" value="apipost" id="controller" name="paginate">
                   <input type="hidden" class="form-control" value="Users" id="controller" name="datatype">
                   <input type="hidden" class="form-control" value="fileDATA" id="fileDATA" name="fileDATA"> 
                   <input type="hidden" class="form-control" value="postProfile" id="funcExec" name="funcExec"> 
                   <input type="hidden" class="form-control" value="<?php echo $userData['id_user'];   ?>" id="dataID" name="dataID">  

                   <input type="hidden" class="form-control" value="<?php echo $userData['id_user'];   ?>" id="controller" name="userid"> 
                   <div class="fallback" style="display: none">  
                           <input name="thefile" type="file" id="addpdf"  onchange="readURLpdf(this)" />
                    </div>

                    
                   <div class="modal-footer"> 
                        <button type="button" class="btn bg-gradient-secondary client_Process" data-bs-dismiss="modal" id="closePDF">Close</button>
                        <button type="submit" class="btn bg-gradient-primary client_Process" id="smtpdfs">ENREGISTRER</button>
                        <button class="btn btn-primary  w-100 mt-4 mb-0 server_Process" type="button" disabled style="display: none" id="formIsload">
                               <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                               <span class="sr-only">Loading...</span>
                       </button>
                   </div>

              </form>
          </div>


      </div>
   </div>
 </div>










 








  