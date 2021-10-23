 $(document).ready(function(){
  $.ajax({
    url: 'fetch_Message.php',
    dataType: 'text',
    type: 'POST',
    success: function(data){
              console.log(data);
              data=JSON.parse(data);
              // $("#1").html( data[0].ussername) ;
              // $("#1").append( ": ") ;
              // $("#1").append( data.message) ;

            // for(var i=0;i<data.length;i++){
            //   $("#1").html( data[i].ussername) ;
            //   $("#1").append( ": ") ;
            //   $("#1").append( data[i].message) ;
            // }
            for(var i=0;i<data.length;i++){
                  $("#1").append( "<div>"+data[i].ussername+": "+data[i].message+"</div>") ;
                  // $("#1").html( data[i].ussername) ;
                  // $("#1").html( ": ") ;
                  // $("#1").html( data[i].message) ;
                  // $("#1").html('\n');
            }      
    }
  })
});