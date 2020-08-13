<?php 

session_start();
if(isset($_SESSION['logintype'])){
    print($_SESSION['logintype']);
    if($_SESSION['logintype'] == 'student'){
        header('Location: student/');
    }
    elseif ($_SESSION['logintype'] == 'admin') {
        header('Location: admin/');
    }
    elseif ($_SESSION['logintype'] == 'faculty') {
        header('Location: faculty/');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/jquery.dataTables.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">

    <title>RAIT</title>
</head>

<body>

    <div class="jumbotron ">
        <div class="row">
            <div class="col-sm-6">
                <div class="logodiv">
                    <img id="logo" src="assets/images/rait.png" alt="logo">
                </div>
                <h1 class="display-4">Project Management</h1>

                <hr class="my-4">

                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#registration" role="button">Group Registration</a>
                </p>
            </div>
            <div class="col-sm-6">
                <div style="max-width: 500px;" class="login-box container" id="enter">
                    <div class="login-text">
                        <h1 class="text-center"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</h1>
                    </div>
                    <div class="container">
                        <form onsubmit="login(); return false;" action="#">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="username" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password" required>
                        </div>
                        <center>
                            <button type="submit" onclick="login()" class="btn btn-success">login</button>
                        </center>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="registration" class="jumbotron">
        <center><h1>Group Registration</h1></center>
         <!--Filter start-->
    
    <div class="container filter_box">
        <div class="list_filters">
            <form action="">
                <center><p class="instruction">To form the group select your Branch : </p></center>
                <center>
                <select name="Branch" class="custom-select mb-3 filter" id="branch">
                    <option selected>Select Branch</option>
                    <option value="COMPUTER SCIENCE">Computer Science</option>
                    <option value="IT">Information Technology</option>
                    <option value="EXTC">EXTC</option>
                    <option value="ETRX">Electronics</option>
                    <option value="Instrumentation">Instrumentation</option>
                </select>
                <button type="button" class="btn btn-secondary view_list" onclick="getStudentList()">View List</button>
                </center>
            </form>
        </div>
    </div>

    <!--Table-->
    <div class="container table_box">
        <div class="container table-responsive" id="student_table">

        </div>
    </div>
    <!--Table Ends Here-->

    </div>
    <script src="assets/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/jquery.dataTables.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="student/js/index.js"></script>
    <script src="index.js"></script>

</body>

</html>