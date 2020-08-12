<?php
    include 'conn.php';
    
    $status = $_GET['status'];
    if($status == 'all'){
        $stmt = $conn->prepare("SELECT * FROM project");
    } else {
        $stmt = $conn->prepare("SELECT * FROM project WHERE status = ?");
        echo $conn->error;
        $stmt->bind_param("s",$status);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
   
    if($result){
        while($row= $result->fetch_assoc()){

?>

<tr>
    <th scope="row"><?=$row['id']?></th>
    <td><?=$row['groupname']?></td>
    <td><?=$row['project_name']?></td>
    <td><?=$row['domain']?></td>
    <td><?=$row['status']?></td>
    <td><?=$row['mentor']?></td>
    <td><button onclick="view_projectDetails(<?=$row['id']?>)" class="btn btn-sm btn-primary">View Details</button></td>
</tr>
<script>
    // alert(document.getElementById('head_text').innerHTML);
    var stat = "<?=$status?>";
    document.getElementById('head_text').innerHTML = stat[0].toUpperCase() + stat.slice(1) + " Projects";
</script>
<?php
        }
    ?>
    <script>$('#projects_list').dataTable();</script>
    <?php
    } else {
        echo 'Error';
    }
?>