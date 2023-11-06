       <!-- 
                        <div class="container position-sticky z-index-sticky top-0">
                          <div class="row">
                            <div class="col-12">
                                Navbar 
                              <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                                <div class="container-fluid pe-0">
                                  <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                                  Freelanco
                                  </a>
                                  <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon mt-2">
                                      <span class="navbar-toggler-bar bar1"></span>
                                      <span class="navbar-toggler-bar bar2"></span>
                                      <span class="navbar-toggler-bar bar3"></span>
                                    </span>
                                  </button>
                                  <div class="collapse navbar-collapse" id="navigation">
                                    <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                                      
                                    </ul>
                                    
                                    < ul class="navbar-nav d-lg-block d-none">
                                      <li class="nav-item">
                                        <a href="https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">EXPLORER</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </nav>
                              End Navbar  
                            </div>
                          </div>
                        </div>
      -->

 
  
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient" style="display: none">Bienvenu dans <b> politica </b></h3>
                  <img src="<?php echo($direURI); ?>view/admin/assets/img/theLOGO.png" class="navbar-brand-img h-150" alt=" logo" style="max-height:150px" >
        
                  <p class="mb-0">Entrez vos informations pour vous connecter</p>

                  
 
                   
                </div>
                <div class="card-body">
                  <form role="form" id="loginNOW">
                    <label>Email</label>
                    <div class="mb-3">
                      <input id="mailINPUT" type="phone" name="mailIS" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input id="passINPUT" type="Password" name="passIS" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" name="checkIS" type="checkbox" id="rememberMe" NOchecke>
                      <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" id="forSubmit" >CONNEXION</button>

  
                      <button class="btn btn-primary  w-100 mt-4 mb-0" type="button" disabled style="display: none" id="formIsload">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span class="sr-only">Loading...</span>
                       </button>


                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                   Vous n'avez pas de compte?
                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-toggle="modal" data-bs-target="#exampleModal" >Inscrivez-vous</a>
                  </p>
                </div>
              </div>
            </div>

            


            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('view/admin/assets/img/curved-images/CONGO.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>










 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">S'Inscrire </h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Pour obtenir l'acces à ce systeme vous devez acheter un abonnement; utilisez ce numero pour plus d'infos : 
      0992281934
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bg-gradient-primary" data-bs-dismiss="modal" style="display:none">Save changes</button>
      </div>
    </div>
  </div>
</div>

  




 


  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">

          <div class="mb-0" id="consoleDevLOGIN" style="background-color: black;margin: 50px;border-radius:20px;min-height: 100px;padding: 20px;color: green;display:none ">
          CONSOLE </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center" style="display:none">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
             Université
          </a>
           
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Politique
          </a>
           
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Confidentilité
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Fallax vision
          </p>
        </div>
      </div>
    </div>
  </footer> 

 
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   --> 