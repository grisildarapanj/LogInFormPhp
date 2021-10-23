$(document).ready(function(){
  $.ajax({
    url: '../../register/php/after_logout_admin.php',
    dataType: 'text',
    type: 'POST',
    success: function(data){
               console.log(data);
              if(data=='err'){
                window.location.href = "../../register/html/logimi2.html";
              }
           
            }
  })
});