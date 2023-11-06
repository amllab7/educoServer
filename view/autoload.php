<?php
//dataExec
//autoloaderThis($page,$datas,$getInfosIDO,$getInfosUSERe)
function autoloaderThis($dataExec){


 
   // $getInfosUSER = $dataExec['getInfosUSER'];
   // $getInfosIDO = $dataExec['getInfosIDO'];
     require "configs/menusConfigs.php";
     $page = $dataExec['page'];
     $user = $dataExec['getInfosUSER'];
     $userID = $user['id'];


      

    $menusPc[$page]['class']='menu-active';
    
    $menusMobile[$page]['class']='mobile-menu-items-active';
    $direURI = $dataExec['directoryURI'];
 
?>



        <div class="section-bg">
            <div class="w-full flex justify-between px-4">
                <!-- website Logo -->
                <a href="<?php echo($direURI); ?>home">

                    <img class=" " src="<?php echo($direURI); ?>view/assets/datas/images/logo/logo.png" alt="logo" style="width: 150px;"/>
                </a>
                <div class="flex items-center">
                    <!-- dark and light mode toggle -->
                    <button id="theme-toggle" type="button" class="dark-light-btn">
                        <i id="theme-toggle-dark-icon" class="fa-solid text-xl fa-moon hidden"></i>
                        <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>
                    </button>
                    <!-- mobile toggle button -->
                    <button id="menu-toggle" type="button" class="menu-toggle-btn">
                        <i id="menu-toggle-open-icon" class="fa-solid fa-bars text-xl "></i>
                        <i id="menu-toggle-close-icon" class="fa-solid fa-xmark text-xl hidden  "></i>
                    </button>
                </div>
            </div>
        </div>




 
        <!-- mobile menu start -->
        <nav id="navbar" class="hidden lg:hidden">
            <ul
                class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">


                <?php
                
                foreach ($menusMobile as $index => $value) { ?>
                             <li>
                                <a class="<?php echo $value['class']; ?>" href="./aboutOne.html">
                                    <span class="mr-2 text-xl">
                                        <i class="<?php echo $value['icon']; ?>"></i>
                                    </span><?php echo $value['text'];   ?> </a>
                             </li>
                <?php }  ?>


            </ul>
        </nav>
        <!-- mobile menu end -->



        

        <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
            <!-- sidber personal info -->
             <?php
             //$infosUser = $datas[0];
             require "view/profilSide.php";
             generateSIdeUser($dataExec);
              ?>


              <!-- sidber personal info END-->
            
            
             <!-- MAIN DATA START-->
            <div class="col-span-12 lg:col-span-8">



                <!-- header for mobile devices start -->
                 <?php require "view/menu.php"; ?>   
                <!-- header for mobile devices end -->


                <!-- about me section start -->
                <?php
                
                 require "view/pages/".$page.".php"; 

               
                ?>

                <!-- about me section start -->


            </div>

             <!-- MAIN DATA END-->
        </div>


        
<?php
}
?>
