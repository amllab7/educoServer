$(document).ready(function() {

    
	const textArray = textString2.split('');
	const textElem = $('.hacking-animation__text');

	let count = 0;











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




 
 var testAndre;











    function cle() {
         alert('texte est fini');
        clearInterval(testAndre);
    }
});




 

 

var textString = `.
.
///IDENTIFICATION DE LA PERSONNE///
    ANDRE MAZI


        AGE : 28 ans  ANDRE MAZI
 
 
        AGE : 28 ans ANDRE MAZI
 
 
        AGE : 28 ans
 `





 var tbl = {

  test1: ['hdhuhifhdhd fdhihiudg dfughiuhgidfg dghudhgdihihdg dghuihuihdg','ndbjdjbjdkjdbkdvbkjdbfvbjvbkjdbvdbkvbd'],
  test3: ['hdhuhifhdhd fdhihiudg dfughiuhgidfg dghudhgdihihdg dghuihuihdg','ndbjdjbjdkjdbkdvbkjdbfvbjvbkjdbvdbkvbd'],
  test4: ['hdhuhifhdhd fdhihiudg dfughiuhgidfg dghudhgdihihdg dghuihuihdg','ndbjdjbjdkjdbkdvbkjdbfvbjvbkjdbvdbkvbd'],
  test5: ['hdhuhifhdhd fdhihiudg dfughiuhgidfg dghudhgdihihdg dghuihuihdg','ndbjdjbjdkjdbkdvbkjdbfvbjvbkjdbvdbkvbd'],
   



 }





 var textString2 = `.
 .
 
    `