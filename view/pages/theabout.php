 
<?php  
 
$discoverDATA = $dataExec['getAlluser']; 
$direURI = $dataExec['directoryURI'];

 
 ?>  
  
  <div class="z-50">
            <!-- container start -->
            <div class="container">
                <!-- header start for large screens -->
                 <header class="flex justify-between items-center fixed top-0 left-0 w-full lg:static z-[1111111111]">
                     <?php   generateMENUS();  ?>
                  </header>
                <!-- header  end -->

                <!-- blog   section start -->
                <div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
                    <div class="container px-4 sm:px-5 md:px-10 lg:px-[60px]">
                        <div class="py-12">
                            <h2 class="after-effect after:left-82 mt-12 lg:mt-0">Apropos</h2>
                            <div class="">

                                bbbbbbbbbbbbbbbbbbbbbbbbbbb vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
                                vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
                            <?php 

                             
                            echo $discoverDATA;
                            
 
                              ?>
 

                            </div>
                        </div>
                    </div>
                    <!-- footer start -->
                    <?php   generateFooter();  ?>
                    <!-- footer ends -->
                </div>
                <!-- blog section start -->
            </div>
 

   