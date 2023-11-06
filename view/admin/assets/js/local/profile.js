 


var fileUplodConfig = "";








$("#pdfForm").submit(function(e){ 

                                      
  e.preventDefault();
  $('.client_Process').css('display','none');
  $('.server_Process').css('display','inline');
  profile.postFile(this);
   

});




$(".addfile").click(function(e){ 
  e.preventDefault();
  fileUplodConfig = $(this).attr('keyval'); 
  $('#funcExec').val(fileUplodConfig);
     $('#addpdf').click();
  
});



$(".addfilePIC").click(function(e){ 
 e.preventDefault();
 fileUplodConfig = $(this).attr('keyval'); 
 $('#funcExec').val(fileUplodConfig);
    $('#addpdf').click();
 
});


$(".windowopen").click(function(e){ 
  e.preventDefault();
  var url = $(this).attr('href');
   window.open(url,'_blank','toolbar=no,location=no,status=no,menubar=no, width=500,height=500');
  
 
});













var profile = {


  postFile : function(form) {



                $.ajax({
                  url:"../../?paginate=apipost",  
                  method:"POST",
                  data:new FormData(form),
                  contentType:false,
                  processData:false,
                  success:function(data){ 
                    

                    $('#closePDF').click();
                    $('.client_Process').css('display','inline');
                    $('.server_Process').css('display','none');
                    $('#addpdf').val('');
                    
                            swal("Avec success!", data, "success").then((value) => {
                    location.reload();
                    });
                    
            
                             

                  
                                      },
                error: function(){ alert('reesayer encore'); }
            });


    
  }






}














 





 
 




function readURLpdf(input) {
              $('#showPdfMODAL').click();
        
           }




           