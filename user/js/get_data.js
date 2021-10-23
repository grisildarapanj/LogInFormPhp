 $(document).ready(function(){
  $.ajax({
    url: '../php/user.php',
    dataType: 'text',
    type: 'POST',
    success: function(data){
              console.log(data);
              data=JSON.parse(data);
              $("#nameLabel").html( data.ussername ) ;
              $("#surname").html( data.surname ) ;
              $("#email").html( data.email ) ;
              $("#address").html( data.address ) ;
              $('#photo').attr('src', "../../uploads/"+data.photo);
            // console.log(data);
            // document.getElementById("nameLabel")="Grisi";
    }
  })
});