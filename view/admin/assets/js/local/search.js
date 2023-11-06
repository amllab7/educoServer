
/*
/////////////////////////////////////////////////////////////////////////////////////
CE KEYUP est plus ou moin bien et compatible avec tous navigateur avec js
interaction bien construite
*/
 

$("#theSearcher").keyup(debounce(makeSearch, 1000));
$(".selectTypeSearch").click(function(e){ 
    var thisAts = $(this).attr("tyepe");
    $("#searchType").val(thisAts);
    $("#textTypeSearch").text(thisAts);
    makeSearch()
  
   });


function selectType(thisAts) {
    alert(thisAts); 
}

 /*--------------------------------------------------*/
/* Recherche realtime*/
function makeSearch(){

         var type =  "username";   //$(".typeSearcher").val();
         var minimumTosearch = 3;
         var queryis = encodeURIComponent($("#theSearcher").val());
         var dataTper = type;
         if(queryis.length>=minimumTosearch){
             var url='../?paginate=search&data='+queryis+'&dataType='+dataTper;  
             rechercheRealtimes(url,'GET','#freeRetour');
                }
         else{
               swal("Action", 'Impossible de faire  cette recherche', "error");         
              }
                  
}



    var textArray;
	var textElem = $('.hacking-animation__text');
	let count = 0;
    function cle() {
       // alert('texte est fini');
       clearInterval(testAndre);
   }


















function write() {


    if(textArray[count] === "\n") {
        textElem.append("<br>");
       }
else {
        textElem.append(`<span class="hacking-animation__character">${textArray[count]}</span>`);
}



count++;
if (count === textArray.length) {
        count = 0;
        cle();
        
}





    
}



















function rechercheRealtimes(url,protocol,entityFor){
     
              $.ajax({
                  url :url,type : protocol,
                  success : function(respondObject,statut){

                     
                   
                  swal("Action", respondObject, "success");
                  // $(entityFor).html(respondObject);
                  // textArray = respondObject.split('');
                  // testAndre = setInterval(write , 50)
                   
                   
                   },
                   error : function(resultat,statut, erreur){ 

                    //$(entityFor).text(erreur+url); 
                   
                },
                  complete : function(resultat, statut){}
              });

    }



    
function debounce(callback, delay){
    var timer;
    return function(){
        var args = arguments;
        var context = this;
        clearTimeout(timer);
        timer = setTimeout(function(){
            callback.apply(context, args);
        }, delay)
    }
}