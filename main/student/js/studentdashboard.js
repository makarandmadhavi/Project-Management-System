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
  var user_id = $("#new_password").val();
  var group_password = $("#confirm_password").val();
  
  if(user_id!=group_password){
    alert("Password and Confirm password should match!");
    window.href.location='';
  }
}