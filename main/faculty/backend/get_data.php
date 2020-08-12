<?php

    function isEvaluator($sdrn){
        include 'conn.php';
        $evaluator_query=$conn->query("SELECT id FROM  evalulators WHERE facultyid=$sdrn"); 
        $evaluator = $evaluator_query->fetch_assoc();
        if($evaluator){     
           return true;
        }
    return false;
    }

    
    function getgroups($sdrn){
        include 'conn.php';
        $data = array();
        $sql = "SELECT groupname FROM mentor INNER JOIN faculty ON mentor.facultyid = faculty.sdrn WHERE faculty.sdrn=$sdrn";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row['groupname']);
            }
        }
    return $data;
    }

    function getEvaluatorgroups($sdrn){
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
        $sql = "SELECT * FROM `project`  WHERE `groupname` ='$groupname'";
        $result = $conn->query($sql);
        if($result){     
            return $result->fetch_assoc();
        }
        return $data;
    }

    function getstudentnames($groupname){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM `groups`  WHERE `groupname` ='$groupname'";
        $result = $conn->query($sql);
        if($result){     
            return $result->fetch_assoc();
        }
        return $data;
    }

    function getfacultydetails($sdrn){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM `faculty` WHERE `sdrn`=$sdrn";
        $result = $conn->query($sql);
        if($result){     
            return $result->fetch_assoc();
        }
        return $data;
    }

    





?>