<?php
//session_start();
include 'conn.php';
//add login_header include '';
// Uploads files
include '../student_header.php';
$user = $_SESSION["username"];
if (isset($_POST['submit'])) 
{ // if save button on the form is clicked
  
  $result = $conn->query("Select groupname from project WHERE groupname='$user'");
  $check_login_query = $result->num_rows;
  if($check_login_query>0){
    echo'<script>alert("for resubmission go to update abstract page");</script>';
    //header("Location: ../update_abstract.php");
  }


  mkdir("../uploads/".$user);
  $title = $_POST["projectname"];
  $domain = $_POST["domain"];

  // name of the uploaded file
  $abstract = $_POST["abstract"];
  //ppt
  $filename1 = $_FILES['ppt']['name'];
  $filename1 = explode(" ",$filename1);
  $filename1 = join("_",$filename1);

  // destination of the file on the server
  $unique1=uniqid();
  $destination1 = "../uploads/".$user."/". $unique1 . basename($filename1);;

  // get the file extension
  $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file1 = $_FILES['ppt']['tmp_name'];
  $size1 = $_FILES['ppt']['size'];



  //research paper1
  $unique2=uniqid();
  $filename2 = $_FILES['researchpaper_1']['name'];
  $filename2 = explode(" ",$filename2);
  $filename2 = join("_",$filename2);

  // destination of the file on the server
  $destination2 = "../uploads/".$user."/". $unique2 . basename($filename2);;

  // get the file extension
  $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file2 = $_FILES['researchpaper_1']['tmp_name'];
  $size2 = $_FILES['researchpaper_1']['size'];

  //research paper2
  $unique3=uniqid();
  $filename3 = $_FILES['researchpaper_2']['name'];
  $filename3 = explode(" ",$filename3);
  $filename3 = join("_",$filename3);

  // destination of the file on the server
  $destination3 = "../uploads/".$user."/". $unique3 . basename($filename3);;

  // get the file extension
  $extension3 = pathinfo($filename3, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file3 = $_FILES['researchpaper_2']['tmp_name'];
  $size3 = $_FILES['researchpaper_2']['size'];
//research paper3
  //echo $_FILES['researchpaper_3']['name']; 
  if( $_FILES['researchpaper_3']['name']!=""){
    $unique4=uniqid();
  $filename4 = $_FILES['researchpaper_3']['name'];
  $filename4 = explode(" ",$filename4);
  $filename4 = join("_",$filename4);
  
  // destination of the file on the server
  $destination4 = "../uploads/".$user."/". $unique4 . basename($filename4);;

  // get the file extension
  $extension4 = pathinfo($filename4, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file4 = $_FILES['researchpaper_3']['tmp_name'];
  $size4 = $_FILES['researchpaper_3']['size'];
  $status = "pending";
  //mkdir("../uploads/".$user);
      // move the uploaded (temporary) file to the specified destination
      if (move_uploaded_file($file1, $destination1) && move_uploaded_file($file2, $destination2) && move_uploaded_file($file3, $destination3))
      {
        $sql = "INSERT INTO `project`(`groupname`, `project_name`,`domain`, `abstract`, `ppt`, `research_paper_1`, `research_paper_2`, `research_paper_3`,`status`) VALUES ('$user','$title','$domain','$abstract','".$unique1.$filename1."','".$unique2.$filename2."','".$unique3.$filename3."','".$unique4.$filename4."','$status')";

          if ($conn->query($sql)) 
          {
              
              header("Location: ../index.php");        
          }
       else
        {?><script></script>
        <?php
          echo "$conn->error";
        }
      }
    

  }
  else{
    $status = "pending";
    //mkdir("../uploads/".$user);
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file1, $destination1) && move_uploaded_file($file2, $destination2) && move_uploaded_file($file3, $destination3))
        {
          $sql = "INSERT INTO `project`(`groupname`, `project_name`,`domain`, `abstract`, `ppt`, `research_paper_1`, `research_paper_2`,`status`) VALUES ('$user','$title','$domain','$abstract','".$unique1.$filename1."','".$unique2.$filename2."','".$unique3.$filename3."','$status')";
            if ($conn->query($sql)) 
            {
                
                header("Location: ../index.php");        
            }
         else
          {?><script></script>
          <?php
            echo "$conn->error";
          }
        }
  }
}


//update_abstract
if (isset($_POST['update_submit'])) {
  $title = $_POST["projectname"];
  $domain = $_POST["domain"];

  // name of the uploaded file
  $abstract = ($_POST["abstract"]);
  //ppt
  $filename1 = $_FILES['ppt']['name'];
  $filename1 = explode(" ",$filename1);
  $filename1 = join("_",$filename1);

  // destination of the file on the server
  $unique1=uniqid();
  $destination1 = "../uploads/".$user."/". $unique1 . basename($filename1);;

  // get the file extension
  $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file1 = $_FILES['ppt']['tmp_name'];
  $size1 = $_FILES['ppt']['size'];



  //research paper1
  $unique2=uniqid();
  $filename2 = $_FILES['researchpaper_1']['name'];
  $filename2 = explode(" ",$filename2);
  $filename2 = join("_",$filename2);

  // destination of the file on the server
  $destination2 = "../uploads/".$user."/". $unique2 . basename($filename2);;

  // get the file extension
  $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file2 = $_FILES['researchpaper_1']['tmp_name'];
  $size2 = $_FILES['researchpaper_1']['size'];

  //research paper2
  $unique3=uniqid();
  $filename3 = $_FILES['researchpaper_2']['name'];
  $filename3 = explode(" ",$filename3);
  $filename3 = join("_",$filename3);

  // destination of the file on the server
  $destination3 = "../uploads/".$user."/". $unique3 . basename($filename3);;

  // get the file extension
  $extension3 = pathinfo($filename3, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file3 = $_FILES['researchpaper_2']['tmp_name'];
  $size3 = $_FILES['researchpaper_2']['size'];

  //research paper3
  //echo $_FILES['researchpaper_3']['name']; 
  if( $_FILES['researchpaper_3']['name']!=""){
    $unique4=uniqid();
  $filename4 = $_FILES['researchpaper_3']['name'];
  $filename4 = explode(" ",$filename4);
  $filename4 = join("_",$filename4);
  
  // destination of the file on the server
  $destination4 = "../uploads/".$user."/". $unique4 . basename($filename4);;

  // get the file extension
  $extension4 = pathinfo($filename4, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file4 = $_FILES['researchpaper_3']['tmp_name'];
  $size4 = $_FILES['researchpaper_3']['size'];
  $status = "pending";
  //mkdir("../uploads/".$user);
      // move the uploaded (temporary) file to the specified destination
      if (move_uploaded_file($file1, $destination1) && move_uploaded_file($file2, $destination2) && move_uploaded_file($file3, $destination3))
      {
        $sql = "UPDATE `project` SET `project_name`='$title',`domain`='$domain',`abstract`='$abstract',`ppt`='$unique1$filename1',`research_paper_1`='$unique2$filename2',`research_paper_2`= '$unique3$filename3' ,`research_paper_3`='$unique4$filename4'  WHERE `groupname`='$user'";
          if ($conn->query($sql)) 
          {
              
              header("Location: ../index.php");        
          }
       else
        {?><script></script>
        <?php
          echo "$conn->error";
        }
      }
    

  }
  else{
    $status = "pending";
    //mkdir("../uploads/".$user);
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file1, $destination1) && move_uploaded_file($file2, $destination2) && move_uploaded_file($file3, $destination3))
        {
          $sql = "UPDATE `project` SET `project_name`='$title',`domain`='$domain',`abstract`='$abstract',`ppt`='$unique1$filename1',`research_paper_1`='$unique2$filename2',`research_paper_2`= '$unique3$filename3' ,`research_paper_3`=''  WHERE `groupname`='$user'";
            if ($conn->query($sql)) 
            {
                
                header("Location: ../index.php");        
            }
         else
          {?><script></script>
          <?php
            echo "$conn->error";
          }
        }

  }
  
























      
  




}

?>