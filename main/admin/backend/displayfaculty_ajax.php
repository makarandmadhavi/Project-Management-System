<?php
    include 'conn.php';
    
    $sql = "SELECT * FROM faculty";
    $result = $conn->query($sql);
   
    if($result){
        while($row= $result->fetch_assoc()){

?>

<tr>
    <th scope="row"><?=$row['id']?></th>
    <td><?=$row['name']?></td>
    <td><?=$row['email']?></td>
    <td><?=$row['department']?></td>
    <td><button onclick="edit_faculty(<?=$row['id']?>)" class="btn btn-sm btn-primary">Edit</button></td>
</tr>

<?php
        }
    } else {
        echo 'Error';
    }
?>