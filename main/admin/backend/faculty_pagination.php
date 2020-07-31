<?php  
 include 'conn.php';
 $output=""; 
 $query = "SELECT * FROM faculty";  
 $result = mysqli_query($conn, $query);  
 $output .= "  
 <table class='table table-hover table-bordered' id='pagination'>  
 <thead class='thead-dark'>

                  <th>SDRN</th>
                  <th> Name</th>
                  <th> Emaik</th>
                  <th> Domain</th>
                  


          </thead> 
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr> 
               <td>'.$row["sdrn"].'</td>   
               <td>'.$row["name"].'</td>
               <td>'.$row["emailid"].'</td>
               <td>'.$row["domain"].'</td>
               
           </tr>
      ';  
 }  
 $output .= '</table><br /><div align="center">';  

 echo $output;  
 ?> 

<script>
  $('#pagination').dataTable();
</script>