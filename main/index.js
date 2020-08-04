function login() {
    username = $('#username').val();
    password = $('#password').val();
    //console.log(username);
    //console.log(password);

        $.ajax({
            type: "POST",
            url: "settings/login_ajax.php",
            data: {
                //data goes here
                username,
                password
            },
            success: function (data) {
                //data is returned here
                console.log(data);
                if (data == "incorrect" || data == "") {
                    alert("Incorrect username password!");
                } else {
                   window.location = data+'/';
                }
            }
        });
    return false;

}

//limit checkbox selection
function onSelectStudent(){
    $("input[name=chk]").change(function(){
        var max= 3;
        if( $("input[name=chk]:checked").length == max ){
            $("input[name=chk]").attr('disabled', 'disabled');
            $("input[name=chk]:checked").removeAttr('disabled');
        }else{
            $("input[name=chk]").removeAttr('disabled');
        }
    })
}

function accept_group() {
    var found = false;
    var count = 0;
    var members = [];
    $('#student_list').find('tr').each(function () {
        var row = $(this);
        if (row.find('input[type="checkbox"]').is(':checked')) {
            found = true;
            count = count + 1;
            members.push(document.getElementById('student_list').rows[this.rowIndex].cells[3]
                .innerHTML);
            
        } else {
            //alert "NOthing found"
            //found=false;
        };
    });
    if (!found) {
        alert("Nothing Found");
    } else {
        var queryString = "?para1=" + members[0] + "&para2=" + members[1] + "&para3=" + members[2];
        window.location.href = "student/groupDetails.php" + queryString;
    }
}


function getStudentList() {
    document.getElementById("student_table").style.paddingTop = "30px";
    var f = document.getElementById("branch");
    var branch = f.options[f.selectedIndex].value;

    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("student_table").innerHTML = this.responseText;
        }
    $('#student_list').dataTable();
    };
    xhttp.open("GET", "student/backend/getStudentList.php?br=" + branch, true);
    xhttp.send();

}