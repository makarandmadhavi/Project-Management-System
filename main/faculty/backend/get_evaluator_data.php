<?php
    
    function getgroups($sdrn){
        include 'conn.php';
        $data = array();
        $sql = "SELECT groupname FROM evalulators INNER JOIN faculty ON evalulators.facultyid = faculty.sdrn WHERE faculty.sdrn=$sdrn";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row['groupname']);
            }
        }
    return $data;
    }

    function getprojects($groupname){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM project  WHERE groupname = $groupname";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    





?>