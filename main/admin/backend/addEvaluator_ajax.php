<?php  
 include 'conn.php';
 if(isset($_GET['sdrn'])){
     $sdrn = str_replace(' ',',',$_GET['sdrn']);
     $result = $conn->query("UPDATE faculty SET isEvaluator=1 where sdrn in ($sdrn)");
     
     

      
      
 }
 else{
     $output="";
     $status = array(0=>"Project Supervisor", 1=>"Evaluator and Project Supervisor");
     $checkbox = array(0=>"", 1=>"Disabled");  
     $query = "SELECT * FROM faculty";  
     $result = mysqli_query($conn, $query);  
     $output .= "  
     
     <table class='table table-hover table-bordered' id='pagination'>  
     <thead class='thead-dark'>
    
                   

                      <th> Name</th>
                      <th> Domain</th>
                      <th>Status</th>
                      <th class='text-center'>Add</th>
    
    
              </thead> 
     ";  
     while($row = mysqli_fetch_array($result))  
     {  
          $output .= '  
               <tr> 
                     
                   <td>'.$row["name"].'</td>
                   
                   <td>'.$row["domain"].'</td>
                   <td>'.$status[$row["isEvaluator"]].'</td>
                   <td class="text-center"><input type="checkbox" class="checkitem" value='.$row["sdrn"].' '.$checkbox[$row["isEvaluator"]].' ></td>
               </tr>
          ';  
     }  
     $output .= '</table><br /><div align="center">';  
    
     echo $output;  
 }

 ?> 

<script>
  $('#pagination').dataTable();
</script>