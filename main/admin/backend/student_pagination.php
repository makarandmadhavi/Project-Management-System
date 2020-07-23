<?php  
 include 'conn.php';
 $output=""; 
 $query = "SELECT * FROM student";  
 $result = mysqli_query($conn, $query);  
 $output .= "  
 <table class='table table-hover table-bordered' id='pagination'>  
 <thead class='thead-dark'>

                  
                  <th> Roll No</th>
                  <th> Name</th>
                  <th> Email</th>
                  <th> Division</th>
                  <th> isGrouped</th>


          </thead> 
 ";  
 while($row = mysqli_fetch_array($result))  
 {    $flag="Yes";
      if($row["isGrouped"]==0)
      {
          $flag="No";
      }  
      $output .= '  
           <tr>  
                <td>'.$row["rollno"].'</td>  
                <td>'.$row["name"].'</td>
                <td>'.$row["email"].'</td>   
                <td>'.$row["division"].'</td>
                <td>'.$flag.'</td>

           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  

 echo $output;  
 ?> 

<script>
  $('#pagination').dataTable();
</script>