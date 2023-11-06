 
  $(document).ready(function(){ 




$("#editorSIDE").click(function(e){ 

    var thisAts = $(this).attr("valueis");
    loadPAGEdata("apiget/loader/editprofile/"+thisAts); });
 
 
    function loadPAGEdata(url) {
 
                     
                        $.ajax({
                            url : url,
                            type : 'GET',
                            success : function(respondObject,statut){
                              

                             
                            $("#formLoader").html(respondObject);
                            //location.reload();
                        },
                            error : function(resultat,statut, erreur){
                                    alert('error est survenu');      },
                            complete : function(resultat, statut){ }
                            });

    
}



















   });