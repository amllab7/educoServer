 $("#loginNOW").submit(function(e){ 
               e.preventDefault();
               
               theLOGIN.initiate(this);
               
            });
 
$("#logoutNOW").click(function(e){ 
    e.preventDefault();
    var directo =  $(this).attr('directo');
    theLOGOUT.logout(directo+'logout');
});




var theLOGIN = {



    initiate : function(that){
       
 
               var mailORphone = $("#mailINPUT").val();
               var passWord = $("#passINPUT").val();
               var token = $("#tokenINPUT").val();
               var verif = this.verify_login_infos(mailORphone,passWord,token);

               
               if(verif.statut===true) { this.execute_login(that); } 

                 else{  swal("IMPOSSIBLE ","Verifier si vous aviez remplie vos informations"); }

    },






    verify_login_infos : function(mailORphone,passWord,token) {

        var retVal = { statut : null, value: [] };
        if (mailORphone!=""&passWord!="") { retVal.statut = true, retVal.value = '' } 
          else{  retVal.statut = false, retVal.value = 'error' }
          return retVal;
         


    },











 

 

    execute_login : function (form) {
      
                             
                        $.ajax({
                            url:"postlog",  
                            method:"POST",
                            data:new FormData(form),
                            contentType:false,
                            processData:false,
                            success:function(data){
                                
                                

                                    
                                            if (data==100) {

                                            

                                                swal("Connexion Etablie", "Cliquez sur OK pour continuer", "success").then((value) => {
                                                location.reload();
                                                });  
                                            
                                        } else{

                                            swal("Acces non Autorisé!", data, "error").then((value) => {
                                                $("#formIsload").fadeOut(0); 
                                                $("#forSubmit").fadeIn(0); 
                                                $("#passINPUT").val("");
                                                
                                            });  
                                        }
                                                    
                             
                            
                            },
                            error: function(){ swal("Attention!", "Impossible de terminer la requete", "error"); }


                        });
   
       },



  


   

 

}


 


 









var theLOGOUT = {

    logout: function (url) {


        
                $.ajax({
                    url : url,type : 'GET',
                    success : function(respondObject,statut){
                        
                        swal("Déconnecté", respondObject, "success").then((value) => {
                            location.reload();
                            
                        });
                    
                    },
                    error : function(resultat,statut,erreur){ swal("Attention!", "Impossible de terminer la requete", "error");  },
                    complete : function(resultat, statut){    }
                    
                });
      },


       




}

