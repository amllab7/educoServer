
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
 