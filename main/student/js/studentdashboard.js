function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
  }

//password_validate
function password_validate(){

    var new_password = $("#new_password").val();
    var confirm_password = $("#confirm_password").val();

    var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if(new_password.match(decimal) && confirm_password.match(decimal))
    {
      if(new_password!=confirm_password){
        alert("Password and Confirm password should match!!!!!");
        return false;
      }
      else{
        alert("Your password has been successfully change");
        return true;
      }
    }
    else{
      alert("password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character");
      return false;
    }
    
  
}
