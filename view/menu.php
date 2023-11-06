<header class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
                    <nav class="hidden lg:block" >
                        <ul class="flex">

                        <?php
                
                foreach ($menusPc as $index => $value) { ?> 
                            
                            
                                    <li> <a class="<?php echo $value['class'];?>" href="<?php echo($direURI); ?>user/<?php echo $value['link']; ?>/<?php echo $userID; ?>">
                                    <span class="text-xl mb-1">
                                        <i class="<?php echo $value['icon']; ?>"></i>
                                    </span> <?php echo $value['text'];   ?> </a></li>
                <?php }  ?>


                            

 
                        </ul>
                    </nav>
 </header>