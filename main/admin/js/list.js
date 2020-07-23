function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}


function changetab(tabname) {
    $("#main-content").load(tabname+".php");
    $("li").removeClass("active");
    //$("#"+id).addClass("active");
}


//pagination
$(document).ready(function(){
    if($('div').hasClass('facultylist')){

      load_data();
          function load_data()  
          {   
               $.ajax({  
                    url:"backend/faculty_pagination.php",  
                    method:"POST",   
                    success:function(data){  
                         $('#pagination_data').html(data);  
                       
                    }  
               })  
          }     
    }
    else{
      load_data();
      function load_data()  
          {   
               
               $.ajax({  
                    url:"backend/student_pagination.php",  
                    method:"POST",   
                    success:function(data){  
                         
                         $('#pagination_data').html(data);  
                       
                    }  
               })  
          }
 
    }
   
  });   
 
  
