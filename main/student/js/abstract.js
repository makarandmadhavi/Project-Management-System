function fileValidation() { 
    var fileInput =  
    document.getElementsByClassName('file')[0]; 
      
    var filePath = fileInput.value; 
  
    // Allowing file type 
    var allowedExtensions =  
            /(\.pdf)$/i; 
      
    if (!allowedExtensions.exec(filePath)) { 

        alert('Upload file in pdf format only'); 
        fileInput.value = ''; 
        return false; 
    } 
  } 

// changing file name in input
  $('.custom-file-input').on('change', function() { 
    let fileName = $(this).val().split('\\').pop(); 
    $(this).next('.custom-file-label').addClass("selected").html(fileName); 
 });


//check other domain
 function Checkdomain(val){
   
  var element=document.getElementById('otherdomain');
  if(val=='others')  
    element.style.display='block';
  else{
    element.value = val;
    element.style.display='none';
  }
 }
 