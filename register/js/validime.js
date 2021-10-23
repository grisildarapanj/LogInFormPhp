
$(document).ready(function(){
  $("#login_button").on('click', (function(e){
   e.preventDefault();
   console.log('erdhi');
    $.ajax({
      url: '../php/data.php',
      dataType: 'text',
      type: 'POST',
      success: function getdata(data){
                console.log(data);
                
                if(data=="There was a problem with your credentials!"){
                   $('#username_info').html( data );

                }
                else if(data=="admin"){
                  window.location.href = "../../admin/html/admin.html";
                }
                else if(data=="worker"){
                  window.location.href = "../../user/html/worker.html";
                }
                
      }
    })
  }));
});