<?php
//renderDesign($page,$dataGeted,$getInfosIDO,$type,$getInfosUSER)

function renderDesign($dataExec){
  $direURIs = (isset($dataExec['directoryURI'])) ? $dataExec['directoryURI'] : '';
  global $direURI; 
  $direURI = $direURIs;
  ?>



 <!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo($direURI); ?>view/admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo($direURI); ?>/view/admin/assets/img/favicon.png">
  <title>
    Admin - Educo
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo($direURI); ?>view/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo($direURI); ?>view/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo($direURI); ?>view/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo($direURI); ?>view/admin/assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
</head>

<body class="g-sidenav-show bg-gray-100" >
  


 
<?php  

        
        if($dataExec['type']){

              require "view/admin/autoload.php"; 
             
              autoloaderThis($dataExec,$direURI);
          
          }
          else{  
                require "view/admin/pages/login.php";
              
              }
         ?>







  <!--   Core JS Files   -->
  <script src="<?php echo($direURI); ?>view/admin/assets/js/core/popper.min.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/plugins/jquery-3.2.1.min.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/plugins/sweetalert.min.js"></script>
 
  <script src="<?php echo($direURI); ?>view/admin/assets/js/plugins/chartjs.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo($direURI); ?>view/admin/assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/local/allApp.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/local/loader.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/local/login.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/local/helper.js"></script>
  <script src="<?php echo($direURI); ?>view/admin/assets/js/local/search.js"></script>
  
  <script src="<?php echo($direURI); ?>view/admin/assets/js/local/profile.js"></script>
  

  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
   

 





  <script>
    

    var ctx2 = document.getElementById("chart-liness").getContext("2d");
   
   var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
   
   gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.3)');
   gradientStroke1.addColorStop(0.1, 'rgba(72,72,176,0.2)');
   gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors
   
   var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
   
   gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
   gradientStroke2.addColorStop(0.1, 'rgba(72,72,176,0.0)');
   gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
   
   new Chart(ctx2, {
     type: "line",
     data: {
       labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
       datasets: [{
           label: "Mobile apps",
           tension: 0.4,
           borderWidth: 0,
           pointRadius: 0,
           borderColor: "#cb0c9f",
           borderWidth: 6,
           backgroundColor: gradientStroke1,
           fill: true,
           data: [50, 40, 170, 220, 500, 250, 400, 550, 100],
           maxBarThickness: 6
   
         },
   
   
   
   
   
         {
           label: "Websites",
           tension: 0.4,
           borderWidth: 0,
           pointRadius: 0,
           borderColor: "#064b94",
           borderWidth: 3,
           backgroundColor: gradientStroke2,
           fill: true,
           data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
           maxBarThickness: 6
         },
   
   
   
   
         {
           label: "Websites",
           tension: 0.4,
           borderWidth: 0,
           pointRadius: 0,
           borderColor: "#169111",
           borderWidth: 3,
           backgroundColor: gradientStroke2,
           fill: true,
           data: [30, 90, 40, 10, 290, 290, 30, 230, 40],
           maxBarThickness: 6
         },
   
   
   
   
   
   
   
       ],
     },
     options: {
       responsive: true,
       maintainAspectRatio: false,
       plugins: {
         legend: {
           display: false,
         }
       },
       interaction: {
         intersect: false,
         mode: 'index',
       },
       scales: {
         y: {
           grid: {
             drawBorder: false,
             display: true,
             drawOnChartArea: true,
             drawTicks: false,
             borderDash: [5, 5]
           },
           ticks: {
             display: true,
             padding: 10,
             color: '#b2b9bf',
             font: {
               size: 11,
               family: "Open Sans",
               style: 'normal',
               lineHeight: 2
             },
           }
         },
         x: {
           grid: {
             drawBorder: false,
             display: false,
             drawOnChartArea: false,
             drawTicks: false,
             borderDash: [5, 5]
           },
           ticks: {
             display: true,
             color: '#b2b9bf',
             padding: 20,
             font: {
               size: 11,
               family: "Open Sans",
               style: 'normal',
               lineHeight: 2
             },
           }
         },
       },
     },
   });
   </script>
     














  <script>
    


    var quill = new Quill('#editorer', {
  theme: 'snow' // Specify theme in configuration
});

 





   
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>

</body>

</html>


<?php
}
?>

