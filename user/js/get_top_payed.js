$(document).ready(function(){
  $.ajax({
    url: '../php/get_top_payed.php',
    dataType: 'text',
    type: 'POST',
    success: function(data){
              console.log(data);
              data=JSON.parse(data);
              $("#nameL").html( data.ussername) ;
              // $("#surname").html( data.surname ) ;
              // $("#email").html( data.email ) ;
              // $("#address").html( data.address ) ;
              // $("#role").html( data.role ) ;
            // console.log(data);
            // document.getElementById("nameLabel")="Grisi";
    }
  })
});