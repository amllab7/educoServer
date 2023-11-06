<?php
//renderDesign($page,$dataGeted,$getInfosIDO,$type,$getInfosUSER)




  function generateFooter() {    ?>

                            <footer class="overflow-hidden rounded-b-2xl bg-[#f8fbfb] dark:bg-[#212425]">
                            <p class="text-center py-6 text-gray-lite dark:text-color-910"> © 2023 All Rights Reserved by <a
                                    class="hover:text-[#FA5252] duration-300 transition"
                                    href="https://fallaxvision.com/" target="_blank"
                                    rel="noopener noreferrer">Fallax vision </a>. </p>
                            </footer>


                            <?php
                            
}














function generateMENUS(){
    
    ?>
                    <div class="flex justify-between w-full px-4 lg:px-0 bg-[#F3F6F6] lg:bg-transparent dark:bg-black">
                        <div class="flex justify-between w-full items-center space-x-4 lg:my-8 my-5">
                            <!-- website logo -->
                            <a class="text-5xl font-semibold" href="home">
                                <img class="h-[26px] lg:h-[32px]" src="view/assets/datas/images/logo/logo.png" alt="logo" />
                            </a>
                            <div class="flex items-center">
                                <!-- light and dark mode button -->
                                <button id="theme-toggle-mobile" type="button"
                                    class="dark-light-btn lg:hidden w-[44px] h-[44px] ml-2">
                                    <i id="theme-toggle-dark-icon-mobile" class="fa-solid text-xl fa-moon hidden"></i>
                                    <i id="theme-toggle-light-icon-mobile" class="fa-solid fa-sun text-xl hidden"></i>
                                </button>
                                <!-- mobile toggle button -->
                                <button id="menu-toggle" type="button" class="menu-toggle-btn">
                                    <i id="menu-toggle-open-icon" class="fa-solid fa-bars text-xl "></i>
                                    <i id="menu-toggle-close-icon" class="fa-solid fa-xmark text-xl hidden  "></i>
                                </button>
                            </div>
                        </div>
                      </div>




                     <!-- header items two for large screens -->
                     <nav class="hidden lg:block">
                        <ul class="flex my-12">
                            <li>
                                <a class="menu-item-two" href="home">
                                    <span class="mr-2 text-base">
                                        <i class="fa-solid fa-house"></i>
                                    </span> Home </a>
                            </li>
                            <li>
                                <a class="menu-item-two" href="explorer">
                                    <span class="mr-2 text-base">
                                        <i class="fa-regular fa-user"></i>
                                    </span> Explorer </a>
                            </li>
                            
                            <li>
                                <a class="menu-item-two" href="abouts">
                                    <span class="mr-2 text-base">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Apropos </a>
                            </li>
                            
                            <li>
                                <a class="menu-item-two" href="inscription">
                                    <span class="mr-2 text-base">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> S'Inscrire </a>
                            </li>
                            <li>
                                <!-- light and dark mode button -->
                                <button id="theme-toggle" type="button" class="dark-light-btn w-[44px] h-[44px] ml-2">
                                    <i id="theme-toggle-dark-icon" class="fa-solid text-xl fa-moon hidden"></i>
                                    <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>
                                </button>
                            </li>
                        </ul>
                    </nav>

                    <!-- mobile menu start -->
                    <nav id="navbar" class="hidden lg:hidden">
                        <ul
                            class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                            <li>
                                <a class="mobile-menu-items" href="">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-solid fa-house"></i>
                                    </span> Home </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items" href="">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-regular fa-user"></i>
                                    </span> Explorer </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items" href="">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Apropos </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items" href="">
                                    <span class="mr-2 text-xl">
                                        <i class="fas fa-briefcase"></i>
                                    </span> S'inscrire </a>
                            </li>



                            
                        </ul>
                    </nav>
                    <!-- mobile menu end -->




<?php
}
?>





