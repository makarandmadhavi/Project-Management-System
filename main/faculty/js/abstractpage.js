function submitabstract(groupname)  
{   var data = $("form").serialize()+'&groupname='+groupname;

     $.ajax({  
          url:"backend/abstractpage_ajax.php",  
          method:"POST", 
          data: data, 
          success:function(data){  
              $("#myForm").trigger('reset');
              $(".submit").hide();
            $(".alert").addClass("show"); 

                       
               }  
          })  
}