$(document).on('click','#create',function(e){
    $.ajax({    
      type: "GET",
      url: "display.php",             
      dataType: "html",                  
      success: function(data){                    
          $("#table-container").html(data); 
         alert('Fill complete data');
      }
  });
});