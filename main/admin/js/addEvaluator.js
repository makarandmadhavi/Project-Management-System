//pagination

load_data();
function load_data()  
{   
     $.ajax({  
          url:"backend/addEvaluator_ajax.php",  
          method:"POST",   
          success:function(data){  
               $('#pagination_data').html(data);  
                       
               }  
          })  
}     
    
function checkall(){
     $('.checkitem').each(function() { this.checked = true; });     
          
}

$('#assign').click(function(){ 
     var sdrn = $('.checkitem:checked').map(function(){
          return $(this).val()
     }).get().join(' ');

     get_data();
     function get_data()  
     {   
          $.ajax({  
               url:'backend/addEvaluator_ajax.php?sdrn='+sdrn,  
               method:"POST",   
               success:function(data){  
                    load_data(); 
                       
               }  
          })  
     } 
               
               
     })     
   
   

 
    

 
 
  
