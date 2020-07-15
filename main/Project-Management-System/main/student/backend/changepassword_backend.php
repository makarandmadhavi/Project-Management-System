<?php  
    include 'conn.php';
    echo $_POST['new_password'];

    if(isset($_POST["submit"]))
    {

        if($_POST['new_password']!=$_POST['confirm_password'])
        {
            
            header("Location: ../studentdashboard.php");
        }
        else
        {
            $newpassword = ($_POST['new_password']); 
            $confirmpassword = ($_POST['confirm_password']);  
        
            $check_database_query = $conn->query("UPDATE `login` SET `password`='$newpassword',`change_password`=1  WHERE `username`='s_1' AND `type`='student' ");
            
            
            echo '<div class="alert alert-warning alert-dismissible fade show">
            <strong>Warning!</strong> Please enter a valid value in all the required fields before proceeding.
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>';
            header("Location: ../studentdashboard.php");
        
        }
        
        
    }
    

  

	
    
	
	
		





?>