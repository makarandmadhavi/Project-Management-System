<?php
session_start();
include 'config.php';
//add login_header include '';
// Uploads files
include '../header.php';
if (isset($_POST['submit'])) 
{ // if save button on the form is clicked
  $user = $_SESSION["user"];
  $result = $conn->query("Select groupname from project WHERE groupname='$user'");
  $check_login_query = $result->num_rows;
  if($check_login_query>0){
    echo'<script>alert("for resubmission go to update abstract page");</script>';
    header("Location: ../update_abstract.php");
  }



  $title = $_POST["projectname"];
  $domain = $_POST["domain"];

  // name of the uploaded file
  $abstract = $_POST["abstract"];
  //ppt
  $filename1 = $_FILES['ppt']['name'];
  $filename1 = explode(" ",$filename1);
  $filename1 = join("_",$filename1);

  // destination of the file on the server
  $destination1 = "../uploads/". uniqid() . basename($filename1);;

  // get the file extension
  $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file1 = $_FILES['ppt']['tmp_name'];
  $size1 = $_FILES['ppt']['size'];

  //research paper1
  $filename2 = $_FILES['researchpaper_1']['name'];
  $filename2 = explode(" ",$filename2);
  $filename2 = join("_",$filename2);

  // destination of the file on the server
  $destination2 = "../uploads/". uniqid() . basename($filename2);;

  // get the file extension
  $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file2 = $_FILES['researchpaper_1']['tmp_name'];
  $size2 = $_FILES['researchpaper_1']['size'];

  //research paper2
  $filename3 = $_FILES['researchpaper_2']['name'];
  $filename3 = explode(" ",$filename3);
  $filename3 = join("_",$filename3);

  // destination of the file on the server
  $destination3 = "../uploads/". uniqid() . basename($filename3);;

  // get the file extension
  $extension3 = pathinfo($filename3, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file3 = $_FILES['researchpaper_2']['tmp_name'];
  $size3 = $_FILES['researchpaper_2']['size'];

  //research paper3
  $filename4 = $_FILES['researchpaper_3']['name'];
  $filename4 = explode(" ",$filename4);
  $filename4 = join("_",$filename4);
  
  // destination of the file on the server
  $destination4 = "../uploads/". uniqid() . basename($filename4);;

  // get the file extension
  $extension4 = pathinfo($filename4, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file4 = $_FILES['researchpaper_3']['tmp_name'];
  $size4 = $_FILES['researchpaper_3']['size'];
  $status = "pending";
      // move the uploaded (temporary) file to the specified destination
      if (move_uploaded_file($file1, $destination1) && move_uploaded_file($file2, $destination2) && move_uploaded_file($file3, $destination3) && move_uploaded_file($file4, $destination4) )
      {
          $sql = "INSERT INTO `project`(`groupname`, `project_name`,`domain`, `abstract`, `ppt`, `research_paper_1`, `research_paper_2`, `research_paper_3`,`status`) VALUES ('$user','$title','$domain','$abstract','".$destination1."','".$destination2."','".$destination3."','".$destination4."','$status')";
          if ($conn->query($sql)) 
          {
              
              header("Location: ../../logout.php");        
          }
       else
        {?><script></script>
        <?php
          echo "$conn->error";
        }
      }
}

?>