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
                            <h2 class="after-effect after:right-32 mt-12 lg:mt-0">Explorer-Rdc</h2>
                            <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-[30px] grid gap-x-10 gap-y-7 mb-6">


                            <?php 

                             
                            
                            

                         foreach ($discoverDATA as $index => $value) { 
                             
                            ?>  

                                <!-- blog items one start --> 

                                <div
                                    class="p-5 rounded-lg mb-2 h-full bg-[#eefbff] dark:bg-transparent dark:border-[#212425] dark:border-2">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="<?php echo($value['redirect']); ?>">
                                            <img style="object-fit:cover" class="rounded-lg w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110"
                                                src="<?php echo($direURI); ?>view/assets/datas/images/profile_images/mini/<?php echo $value['photocover'];   ?>" alt="blog image" />
                                        </a>
                                    </div> 
                                    <div class="flex mt-4 text-tiny text-gray-lite dark:text-[#A6A6A6]">
                                        <span><?php echo $value['thedate'];   ?></span>
                                        <span class="dot-icon"><?php echo $value['keyword'];   ?></span>
                                    </div>
                                    <h3
                                        class="text-lg font-medium dark:text-white duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] dark:hover:text-[#FA5252]">
                                        <a href="<?php echo($value['redirect']); ?>"  > <?php echo $value['titre'];   ?> </a>
                                    </h3>
                                </div>
                                <!-- blog items one end -->

                                <?php     
                            }
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

            