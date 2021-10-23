$(document).ready(function(){
  $.ajax({
    url: '../php/get_data_from_salary.php',
    dataType: 'text',
    type: 'POST',
    success: function(data){
              console.log(data);

              data=JSON.parse(data);
              console.log(data.length);
              

              var table=document.getElementById("employee_data");
              for(var i=0;i<data.length;i++){
              var row = table.insertRow(1);
              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);
              var cell3 = row.insertCell(2);
              var cell4 = row.insertCell(3);
              var cell5 = row.insertCell(4);
              cell1.innerHTML = data[i].ussername;
              cell2.innerHTML = data[i].surname; 
              cell3.innerHTML = data[i].email;
              cell4.innerHTML = data[i].address;
              cell5.innerHTML = data[i].salary;
            }
    }
  })
});