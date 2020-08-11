<?php
    
    function getprojects($name){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM groups,project WHERE groups.groupname=project.groupname AND (groups.groupname LIKE '%$name%' OR project.project_name LIKE '%$name%')";
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
        $sql = "SELECT * FROM faculty WHERE `isEvaluator`=1";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getmentors(){
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
            if($row = $result -> fetch_assoc()){
            array_push($data,$row);
            } else {
                $row['name'] = 'Not Assigned';
                array_push($data,$row);
            }
        }
    return $data;
    }

    function getgroupmentors($groupname){
        include 'conn.php';
        $data = array();
        $sql = "SELECT name FROM faculty,mentor WHERE mentor.groupname='$groupname' AND mentor.facultyid = faculty.sdrn ";
        $result = $conn->query($sql);
        if($result){     
            if($row = $result -> fetch_assoc()){
            array_push($data,$row);
            } else {
                $row['name'] = 'Not Assigned';
                array_push($data,$row);
            }
        }
    return $data;
    }



?>