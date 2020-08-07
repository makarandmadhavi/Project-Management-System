function assign_evaluator(f,groupname) {
    $(f).prop("disabled",true);
    faculty = $('#select-'+groupname).val();
    //console.log(domain);
    $.ajax({
        type: "POST",
        url: "backend/assignevaluator_ajax.php",
        data: {
            //data goes here
            faculty,
            groupname
        },
        success: function (data) {
            //data is returned here
            if(data=='ERROR'){
                alert("ERROR");
                
            }
            else{
                alert("Evaluator Assigned");
                $('.eval'+groupname).html(data);
                //console.log('.eval'+groupname);
            }
            $(f).prop("disabled",false);
            
        }
    });
}

function searchproject(groupname) {
    //console.log(groupname);
    
    $.ajax({
        type: "POST",
        url: "backend/getprojects_ajax.php",
        data: {
            //data goes here
            groupname
        },
        success: function (data) {
            //data is returned here
            if(data=='ERROR'){
                alert("ERROR");
                
            }
            else{
                $("#accordionExample").html(data);
                
            }
        }
    });
}