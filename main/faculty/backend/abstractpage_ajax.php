<?php  
 include 'conn.php';
 $comment=$_POST['comment'];
 $status=$_POST['status'];
 $groupname= $_POST['groupname'];
 $sql="UPDATE `project` SET `status`='$status',`comment`='$comment' WHERE `groupname`='$groupname'";
 $result=$conn->query($sql);
 if($result){
     echo "done!";
 }
 else{
     echo $conn->error;
 }
 ?>