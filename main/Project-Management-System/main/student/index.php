<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="css/starter.css">
    <link rel="stylesheet" href="css/index.css">

    <title>PMS</title>
    
    <style>
    </style>
</head>

<body>
    <!--Head and Navbar-->
    <div>
        <img src="../assets/images/Rait_new_logo_png.png" class="top_logo">
        <a href="../index.php"><button class="login_btn">Login</button></a>
    </div>

    <nav class="navbar navbar-expand-lg primary_color navbar-dark nav_heading">
        <h4>Welcome to Project Management System.</h4>
    </nav>
    <!--Head and Navbar Ends-->

    <!--Filter start-->
    
    <div class="container filter_box">
        <div class="list_filters">
            <form action="">
                <center><p class="instruction">To form the group select your Branch : </p></center>
                <center>
                <select name="Branch" class="custom-select mb-3 filter" id="branch">
                    <option selected>Select Branch</option>
                    <option value="Computer">Computer Science</option>
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
        <div id="search_branch">
            <div class="row">
                <h5>Search in branch <span id="display_branch"></span> : &nbsp;&nbsp;</h5>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="myInput">
            </div>
        </div>
    
        <div class="container table-responsive" id="student_table">

        </div>
    </div>
    <!--Table Ends Here-->


    <!--Footer-->
    <!-- <div class="jumbotron text-center" style="margin-bottom:0">
        <p class="footer-data">Footer</p>
    </div> -->
    <!--Footer Ends-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="../assets/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>

</body>
</html>