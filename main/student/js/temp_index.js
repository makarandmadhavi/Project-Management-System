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
            members.push(document.getElementById('student_list').rows[this.rowIndex].cells[4]
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
        window.location.href = "./groupDetails.php" + queryString;
    }
}


function getStudentList() {
    var f = document.getElementById("branch");
    var branch = f.options[f.selectedIndex].value;

    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("student_table").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "./backend/getStudentList.php?br=" + branch, true);
    xhttp.send();

    document.getElementById("display_branch").innerHTML = branch;

    //Search Bar for table
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#page tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    var x = document.getElementById("search_branch");
    x.style.display = "block";

}