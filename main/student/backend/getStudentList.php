<?php

include 'conn.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$branch = $_GET['br'];


$stmt = $conn->prepare("select id, name, rollno, batch, division from student where department = ? AND isGrouped = 0");
echo $conn->error;
$stmt->bind_param("s",$branch);
$stmt->execute();
$result = $stmt->get_result();



echo '<table class="table table-hover table-bordered" id="student_list">';
echo '<thead>';
echo  '<tr>';
echo    '<th>Check</th>';
echo    '<th scope="col">#</th>';
echo    '<th scope="col">Name</th>';
echo    '<th scope="col">Roll No</th>';
echo    '<th scope="col">Div</th>';
echo    '<th scope="col">Batch</th>';
echo  '</tr>';
echo'</thead>';
echo'<tbody id="page">';
while($row = $result->fetch_assoc()):
echo  '<tr class="single_row">';
echo    '<td><input class="single_checkbox" name="chk" type="checkbox" onchange="onSelectStudent()"></td>';
echo    '<th scope="row">'. $row["id"].'</th>';
echo    '<td>'. $row["name"].'</td>';
echo    '<td>'. $row["rollno"].'</td>';
echo    '<td>'. $row["division"].'</td>';
echo    '<td>'. $row["batch"].'</td>';
echo  '</tr>';
endwhile;
echo '</tbody>';
echo '</table>';
echo '<center><button type="button" onclick="accept_group()" class="btn btn-secondary submit_group">Proceed with Selected Members</button></center>';
echo '<br>';
echo '<br>';

$conn->close();
?> 