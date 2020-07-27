<?php
    
    function getprojects(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM groups,project WHERE groups.groupname=project.groupname";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getevaluators(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM faculty";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getgroupevaluators($groupname){
        include 'conn.php';
        $data = array();
        $sql = "SELECT name FROM faculty,evalulators WHERE evalulators.groupname='$groupname' AND evalulators.facultyid = faculty.sdrn ";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }



?>