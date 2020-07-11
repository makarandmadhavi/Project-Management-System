<?php

include 'config.php';
error_reporting(E_ALL);

ini_set('display_errors', 1);
$year = $_GET['yr'];
$branch = $_GET['br'];
$division = $_GET['div'];


$stmt = $conn->prepare("select id, name, rollno, email, batch, phone from student where year = ? AND department = ? AND division = ?");
echo $conn->error;
$stmt->bind_param("sss",$year,$branch,$division);
$stmt->execute();
$result = $stmt->get_result();


echo '<table class="table table-hover table-bordered" id="student_list">';
echo '<thead>';
echo  '<tr>';
echo    '<th>Check</th>';
echo    '<th scope="col">#</th>';
echo    '<th scope="col">Name</th>';
echo    '<th scope="col">Roll No</th>';
echo    '<th scope="col">Batch</th>';
echo    '<th scope="col">Email</th>';
echo    '<th scope="col">Contact No.</th>';
echo  '</tr>';
echo'</thead>';
echo'<tbody id="page">';
while($row = $result->fetch_assoc()):
echo  '<tr class="single_row">';
echo    '<td><input type="checkbox"></td>';
echo    '<th scope="row">'. $row["id"].'</th>';
echo    '<td>'. $row["name"].'</td>';
echo    '<td>'. $row["rollno"].'</td>';
echo    '<td>'. $row["batch"].'</td>';
echo    '<td>'. $row["email"].'</td>';
echo    '<td>'. $row["phone"].'</td>';
echo  '</tr>';
echo '</tbody>';
endwhile;
echo '</table>';
echo '<button type="button" onclick="accept_group()" class="btn btn-secondary submit_group">Proceed with Selected Members</button>';
echo '<br>';
echo '<br>';

$conn->close();
?> 