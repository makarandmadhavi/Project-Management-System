function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}

function add_faculty(f) {
    $('#submit').prop("disabled",true);
    name = f.name.value;
    email = f.email.value;
    phone = f.phone.value;
    domain = JSON.stringify($(f.domain).val());
    department = f.department.value;
    //console.log(domain);
    $.ajax({
        type: "POST",
        url: "backend/addfaculty_ajax.php",
        data: {
            //data goes here
            name,
            email,
            phone,
            domain,
            department
        },
        success: function (data) {
            //data is returned here
            $('#submit').prop("disabled",false);
            $(f).html(data);
        }
    });
    return false;
}


function changetab(tabname) {
    $("#main-content").load(tabname+".php");
    $("li").removeClass("active");
    $("#"+id).addClass("active");
}


function changetabforgroups(tabname, proj_status) {
    if(proj_status == 'groups'){
        $("#main-content").load(tabname+".php");
    } else {
        $("#main-content").load(tabname+".php?project_status="+proj_status);
    }
    
    $("li").removeClass("active");
    $("#"+id).addClass("active");
}