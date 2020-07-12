$(document).ready(function(){
  $("#submit").click(function(){
  var user_id = $("#user_id").val();
  var group_password = $("#group_password").val();
  var user_type = $("#user_type").val();
  
 
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'user_id='+ user_id + '&group_password='+ group_password + '&user_type='+ user_type;
  // AJAX Code To Submit Form.
  $.ajax({
  type: "POST",
  url:"backend/login_handler.php",
  data: dataString,
  
  success: function(response){
    console.log(typeof(response),response );
    if (response==1) {
      //console.log("hello");
      window.location.href = './studentdashboard.php';
    }
    else {
      
      alert('Invalid Credentials');
    }
    
  }
  });
  });
  });


