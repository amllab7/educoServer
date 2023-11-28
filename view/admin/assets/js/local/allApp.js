




function inDev() {
  
  swal("Action", 'Encours de devellopement', "error");
  
}

$(".inDever").click(function(e){ 
  e.preventDefault();
  inDev();
 });






  

$(".editableReal").dblclick(function(e){ 
  var tester = $(this).text().replace(/ /g,'');
  e.preventDefault(); 
  alert(tester);

 });

             $("#sendEdited").submit(function(e){ 
               
            
                                    e.preventDefault(); 
                                      
                                         
  

                                    $.ajax({
                                            url:"../../?paginate=apipost",
                                            method:"POST",
                                            data:new FormData(this),
                                            contentType:false,
                                            processData:false,
                                            success:function(data){  
                                              
                                              swal("Avec succes!", data, "success").then((value) => {
                                                                   // window.location="../../admin/adminer";
                                                                     
                                                                  });
                                            
                                            },
                                            error: function(){ alert('reesayer encore'); }
                                    });




                                    
            

              });









                    $("#fromd").submit(function(e){ 
                                     
                                    e.preventDefault();
                                    
                                    $.ajax({
                                                url:"controller/exe.php",
                                                method:"POST",
                                                data:new FormData(this),
                                                contentType:false,
                                                processData:false,
                                                success:function(data){ 
                                                                alert(data);
                                                                //$('.bsntForm')[0].reset();
                                                                location.reload();
                                                            },
                                                error: function(){ alert('reesayer encore'); }
                                        
                                            });
                
                    });
 

                  
 




                            $("#adduserForm").submit(function(e){ 
                
                                    e.preventDefault();
                                    addNEWuser(this); 
                             });




                             $("#addData").submit(function(e){ 
                
                              e.preventDefault();
                              sendForm(this); 
                       });

















                             $("#addaxeForm").submit(function(e){ 
                
                              e.preventDefault();
                              
                              addNEWaxe(this); 
                             });


                             




                              

                             $("#realisationsrForm").submit(function(e){ 
                
                                    e.preventDefault();
                                    postForm2(this);
                             });


                            $("#whatIDOForm").submit(function(e){ 
                
                                    e.preventDefault();
                                    postForm2(this);
                            });


                            $("#imagForm").submit(function(e){ 
                
                              e.preventDefault();
                              postPicture(this);
                            });

                 
                           


                             



 


 



           function postPicture(form) {


            $.ajax({
                url:"../../?paginate=apipost",  
                method:"POST",
                data:new FormData(form),
                contentType:false,
                processData:false,
                success:function(data){ 
                //alert(data);

                

                $("#consoleDevADMINER").html(data);
                //$('.bsntForm')[0].reset();
               //location.reload();
            },
               error: function(){ alert('reesayer encore'); }
        });
            
          }

          











          function sendForm(form) {
            $.ajax({
              url:"?paginate=apipost",  
              method:"POST",
              data:new FormData(form),
              contentType:false,
              processData:false,
              success:function(data){ 
  
               // $(".closeModal").click();
                //$("#consoleDevADMINER").html(data);
                 swal("Avec succes!", data, "success").then((value) => {
                   
                  //$('#realtime').html(data);
                  //location.reload();
                   
                });
                 
                
                },
                   error: function(){ alert('reesayer encore'); }
      });
          
        }


























                              


      function addNEWuser(form) {
          $.ajax({
            url:"?paginate=apipost",  
            method:"POST",
            data:new FormData(form),
            contentType:false,
            processData:false,
            success:function(data){ 

             // $(".closeModal").click();
              //$("#consoleDevADMINER").html(data);
               swal("Avec succes!", data, "success").then((value) => {
                 
                //$('#realtime').html(data);
                //location.reload();
                 
              });
               
              
              },
                 error: function(){ alert('reesayer encore'); }
    });
        
      }








      function addNEWaxe(form) {
        $.ajax({
          url:"?paginate=apipost",  
          method:"POST",
          data:new FormData(form),
          contentType:false,
          processData:false,
          success:function(data){ 

           // $(".closeModal").click();
            //$("#consoleDevADMINER").html(data);
             swal("Avec succes!", data, "success").then((value) => {
               
              //$('#realtime').html(data);
              //location.reload();
               
            });
             
            
            },
               error: function(){ alert('reesayer encore'); }
  });
      
    }














      

      function postForm2(form) {
 
        $.ajax({

          
            url:"../../?paginate=apipost",  
            method:"POST",
            data:new FormData(form),
            contentType:false,
            processData:false,
            success:function(data){ 
              
            //  swal("Avec succes!", data, "success");
 

              swal("Avec succes!", data, "success").then((value) => {
                location.reload();
                 
              });

 
              
        },
           error: function(){ alert('reesayer encore'); }
    });

        
      }








      function analyser() {
 
        $.ajax({ 
          url : '../?paginate=apipost&id=5&datatype=users&funcExec=analyserUser',
          type : 'GET',
           success : function(respondObject,statut){ 

                                  alert(respondObject);
                                  $('#retob').html(respondObject);



                                                   },
           error : function(resultat,statut, erreur){
                    alert('probleme de la connexion internet'+resultat); 
                           },
           complete : function(resultat, statut){}


                });

 
        
      }








 
      function activerThis(that) {

        var statutLocal =  $(that).attr("thestatut"); 
        var idlocal =  $(that).attr("userid");
    alert(idlocal);
        
 
          $.ajax({ 
          url : '../../?paginate=apipost&iduser='+idlocal+'&datatype=users&funcExec=activateUser&statut='+statutLocal,
          type : 'GET',
           success : function(respondObject,statut){ 

            

             
            if (statutLocal=='0') {
             
                $(that).attr("thestatut",1); 
                $('#retobVVV').html("Cette personne est activée");
            } else {
               $('#retobVVV').html("Cette personne est désactivée");
               $(that).attr("thestatut",0);


             
            }
        

           
                                  
                                  



                                                   },
           error : function(resultat,statut, erreur){
                    alert('probleme de la connexion internetgg'); 
                           },
           complete : function(resultat, statut){}


                });

 
        
      }












      function activeGuy(that) {

        
        var messager = $(that).attr('messager');
        swal({
          title: "Vous etes sure?",
          text: messager+" cette personne du systeme ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((accepted) => {
          if (accepted) {
 

          
                  var idrow = $(that).attr('idrow');
                  var idcol = $(that).attr('idcol');
                  var datatype = "Users";
                  var functionExec = $(that).attr('functionExec'); 
                  var urli = $(that).attr("dataval");
 


            var url = '../../?paginate=apipost&id=5&datatype='+datatype+'&funcExec='+functionExec+'&dataval='+urli+'&colonne='+idcol+'&idrow='+idrow;
             execthemodifier(url); 
    
            




               } else {
             $(that).prop("checked",false);
            
          }
        });
    
    
    
    
        
      }











      function readURL3(input) {
       // $('#realshow3').fadeIn();
        
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
        
                    reader.onload = function (e) {
                        $('#realshow3')
                            .attr('src', e.target.result)
                            .width(200)
                            
                    };
        
                    reader.readAsDataURL(input.files[0]);
                    
                      $('#bodyContainer').fadeToggle(0);
                      $('#exss').click();
                }
            }

 
            $(".clickModif").click(function(e){ 
               
                           themodifier(this)
               
              });

              $(".dblclickModif").dblclick(function(e){ 
                themodifier(this)
              });




 
              var idcol,reposit,idrow,datatype,funcExecuter;




              $("#editedSingleSMT").submit(function(e){ 
 
                e.preventDefault(); 
                var urli = $("#dataEdited").val();
                var url = reposit+'?paginate=apipost&idsession=5&datatype='+datatype+'&funcExec='+funcExecuter+'&dataval='+urli+'&colonne='+idcol+'&idrow='+idrow;
                 execthemodifier(url);

                
                });
  

                 

 
                $(".editActiv").click(function(e){ 
                 
                 var thtable = 'videos';
                
          
                 var idrow = $(this).attr('idrow');
                 var idcol = $(this).attr('idcol');
                 var datatype = $(this).attr('datatypeok');
                 var functionExec = $(this).attr('functionExec'); 
                 
                 var urli = $(this).attr('dataval');
            
                 var reposit= $(this).attr('repository'); //"../";
                

                  
                var url = reposit+'?paginate=apipost&id=5&datatype='+datatype+'&funcExec='+functionExec+'&dataval='+urli+'&colonne='+idcol+'&idrow='+idrow;
                
                execthemodifier(url);
  
                  });

            
 
 
             function themodifier(that) {
             


               var dataval =  $(that).attr('dataval');

               var datatitre =  $(that).attr('datatitre');
                thtable = $(that).attr('thtable');
                idcol = $(that).attr('idcol');
                funcExecuter = $(that).attr('functionExec');
                idrow = $(that).attr('idrow') ;
                repository = $(that).attr('repository') ;
                reposit = $(that).attr('repository') ;
                token= $(that).attr('token');
                  datatype = $(that).attr('datatypeok');
                  
             
              //$("#dataEdited").val(dataval);
              $("#editedTitle").text(datatitre);
              $("#themodifiermodal").click();
              $("#dataEditedText").text(dataval);


               
            
               


              
 
               
               
             }






             

      function execthemodifier(url) {

        
        alert(url); 
 
          $.ajax({ 
          url :  url,
          type : 'GET',
           success : function(respondObject,statut){ 

             $("#closeModal").click();
             //$('#realtime').html(respondObject); 


            swal("Avec succes!", respondObject, "success").then((value) => {
                 
              
             location.reload();
               
            });

             
            if (statutLocal=='0') {
             
              
            } else {
               
            }
        

           
                                  
                                  



                                                   },
           error : function(resultat,statut, erreur){
                    alert('probleme de la connexion internecccccct'+resultat); 
                           },
           complete : function(resultat, statut){}


                });

 
        
      }
            