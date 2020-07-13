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
        <div class="chip">
            <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
            Nikhil Ingale
        </div>
    </div>
    <nav class="navbar navbar-expand-lg primary_color navbar-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 search_btn" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--Head and Navbar Ends-->

    <!--Filter start-->
    <div class="filter_box">
        <div class="list_filters">
            <p class="instruction">To form the group select your Branch : </p>
            <form action="">
                <select name="Branch" class="custom-select mb-3 filter" id="branch">
                    <option selected>Select Branch</option>
                    <option value="Computer">Computer Science</option>
                    <option value="IT">Information Technology</option>
                    <option value="EXTC">EXTC</option>
                    <option value="ETRX">Electronics</option>
                    <option value="Instrumentation">Instrumentation</option>
                </select>
                <button type="button" class="btn btn-secondary view_list" onclick="getStudentList()">View List</button>
            </form>
        </div>
    </div>

    <!--Table-->
    <div class="container">
        <div id="search_branch">
            <div class="row">
                <h5>Search in branch <span id="display_branch"></span> : &nbsp;&nbsp;</h5>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="myInput">
            </div>
        </div>
    </div>
    <div class="container table-responsive" id="student_table">

    </div>
    <!--Table Ends Here-->


    <!--Footer-->
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p class="footer-data">Footer</p>
    </div>
    <!--Footer Ends-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="../assets/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>

</body>
</html>