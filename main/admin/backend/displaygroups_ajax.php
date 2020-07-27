<?php
    include 'conn.php';
    
    $sql = "SELECT * FROM groups";
    $result = $conn->query($sql);
   
    if($result){
        while($row= $result->fetch_assoc()){

?>

<tr>
    <th scope="row"><?=$row['id']?></th>
    <td><?=$row['groupname']?></td>
    <td><?=$row['member1']?></td>
    <td><?=$row['member2']?></td>
    <td><?=$row['member3']?></td>
    <td><button onclick="edit_faculty(<?=$row['id']?>)" class="btn btn-sm btn-primary">Edit</button></td>
</tr>

<?php
        }
    ?>
    <script>$('#allgroups_list').dataTable();</script>
    <?php
    } else {
        echo 'Error';
    }
?>