<?php 
$getMyWORK = $dataExec['getMyWORK']; 
$userInfos = $dataExec['getInfosUSER']; 
$direURI = $dataExec['directoryURI'];

   
 ?>

<!-- blog   section start -->
<section class="bg-white lg:rounded-2xl dark:bg-[#111111]">
                    <div class="container px-4 sm:px-5 md:px-10 lg:px-[60px]">
                        
                     
 

                    <div ><br>

                    <p>Powered by fallax vision </p>
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="<?php echo($direURI); ?>view/assets/datas/images/assets/works.png"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>Classifié dans : </span>
                            <span class="dot-icon"><?php echo $getMyWORK['category']; ?></span> 
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">
                        <?php echo $getMyWORK['titre'];; ?> </h2>

                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> 
                        <?php echo $getMyWORK['descrption']; ?>
                            </p>
                    </div> 

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3" style="display:;">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[85px] rounded-xl" src="<?php echo($direURI); ?>view/assets/datas/images/assets/guarantee.png" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Admin</h3>
                                    <span class="dark:text-[#dedede] text-tiny">Instant</span>
                                </div>
                                <p class="dark:text-white md:pr-16"> Nous n'autorisons pas encore de commentaire sur les realisations de gens</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Repondre</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Partager sur:</h6>
                        <div class="flex space-x-3">
                            <a href="#"   rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="#"   rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="#"   rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="#"  rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Commenter</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                    </div>

                    <!-- footer section start -->
                    <footer class="overflow-hidden rounded-b-2xl bg-[#f8fbfb] dark:bg-[#212425]">
                        <p class="text-center py-6 text-gray-lite dark:text-color-910"> © 2023 All Rights Reserved by <a
                                class="hover:text-[#FA5252] duration-300 transition"
                                href="https://fallaxvision.com/" target="_blank"
                                rel="noopener noreferrer">Fallax vision</a>. </p>
                    </footer>
                    <!-- footer section end -->
                </section>
                <!-- blog section end -->










                <div class="bg-homeBg dark:bg-homeTwoBg-dark min-h-screen bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">




                
            <!-- modal  for item one start -->
            <div id="ex1" class="modal-container modal">
                <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="./images/blog_images/1.jpg"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>177 April</span>
                            <span class="dot-icon">Inspiration</span>
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">How to Own Your Audience by Creating an
                            Email List.</h2>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta
                            inventore dolorum consequuntur quo obcaecati rerum sit non. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit.
                            Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis
                            doloremque soluta inventore dolorum consequuntur. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo
                            obcaecati rerum sit non. </p>
                    </div>

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[125px] rounded-xl" src="./images/about/about.jpg" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Rafia Ana</h3>
                                    <span class="dark:text-[#dedede] text-tiny">15 min ago</span>
                                </div>
                                <p class="dark:text-white md:pr-16">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Sequi nam ad, unde vel aut soluta atque consequatur. Omnis, debitis nihil?</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Login with:</h6>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Leave a Reply</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>
            <!-- modal  for item one end -->


            
            <!-- modal  for item two start -->
            <div id="ex2" class="modal-container modal">
                
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>

            <!-- modal  for item two end -->

            <!-- modal  for item three start -->
            <div id="ex3" class="modal-container modal">
                <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="./images/blog_images/3.jpg"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>07 April</span>
                            <span class="dot-icon">Inspiration</span>
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">The window know to say beside you</h2>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta
                            inventore dolorum consequuntur quo obcaecati rerum sit non. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit.
                            Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis
                            doloremque soluta inventore dolorum consequuntur. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo
                            obcaecati rerum sit non. </p>
                    </div>

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[125px] rounded-xl" src="./images/about/about.jpg" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Rafia Ana</h3>
                                    <span class="dark:text-[#dedede] text-tiny">15 min ago</span>
                                </div>
                                <p class="dark:text-white md:pr-16">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Sequi nam ad, unde vel aut soluta atque consequatur. Omnis, debitis nihil?</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Login with:</h6>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Leave a Reply</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>
            <!-- modal  for item three end -->

            <!-- modal  for item four start -->
            <div id="ex4" class="modal-container modal">
                <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="./images/blog_images/4.jpg"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>177 April</span>
                            <span class="dot-icon">Inspiration</span>
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">Top 10 Toolkits for Deep Learning in
                            2021.</h2>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta
                            inventore dolorum consequuntur quo obcaecati rerum sit non. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit.
                            Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis
                            doloremque soluta inventore dolorum consequuntur. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo
                            obcaecati rerum sit non. </p>
                    </div>

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[125px] rounded-xl" src="./images/about/about.jpg" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Rafia Ana</h3>
                                    <span class="dark:text-[#dedede] text-tiny">15 min ago</span>
                                </div>
                                <p class="dark:text-white md:pr-16">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Sequi nam ad, unde vel aut soluta atque consequatur. Omnis, debitis nihil?</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Login with:</h6>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Commenter</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>

            <!-- modal  for item four end -->



            </div>