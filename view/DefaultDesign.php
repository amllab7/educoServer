<?php
//renderDesign($page,$dataGeted,$getInfosIDO,$type,$getInfosUSER)

function renderDesign($dataExec){
    
    $direURIs = (isset($dataExec['directoryURI'])) ? $dataExec['directoryURI'] : '';
    global $direURI; 
    $direURI = $direURIs;

    
    ?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- commom meta tag -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo($direURI); ?>view/assets/images/logo/faveicon.jpg" type="image/x-icon">
    <!--=== fontaswesome ===-->
    <link rel="stylesheet" href="<?php echo($direURI); ?>view/assets/assets/fontaswesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo($direURI); ?>view/assets/assets/fontaswesome/css/fontawesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Roboto+Slab:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />


    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="<?php echo($direURI); ?>view/assets/css/vendor/slick.css" />
    <!--=== main css ===-->
    <link rel="stylesheet" href="<?php echo($direURI); ?>view/assets/css/tailwind.css" />
    <link rel="stylesheet" href="<?php echo($direURI); ?>view/assets/css/custom.css" />

    <link rel="stylesheet" href="<?php echo($direURI); ?>view/assets/css/vendor/jquery.modal.min.css" />
    <title>Freelanco | Plateforme </title>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>



</head>

<body>
 
    <!-- PRELOADER -->
   
    <!-- /PRELOADER -->


<!-- start bgHomeBg -->

    <div class="bg-homeBg dark:bg-homeTwoBg-dark min-h-screen bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">  
        <?php  
        
          if($dataExec['type']){

                require "view/autoload.php"; 
                ///autoloaderThis($page,$dataGeted,$getInfosIDO,$getInfosUSER); 
                autoloaderThis($dataExec);
            
            }

                
                else{   
                    
                    require "view/pages/".$dataExec['page'].".php";
                
                }
           ?>
    </div>
    <!-- End bgHomeBg -->



    <!--==== js =====-->
    <script src="<?php echo($direURI); ?>view/assets/js/vendor/jquary.min.js"></script>
    <script src="<?php echo($direURI); ?>view/assets/js/vendor/slick.js"></script>
    <script src="<?php echo($direURI); ?>view/assets/js/vendor/jquery.modal.min.js"></script>
    <!-- main js -->
    <script src="<?php echo($direURI); ?>view/assets/js/main.js"></script> 


    
 





</body>

</html>




<?php
}
?>

