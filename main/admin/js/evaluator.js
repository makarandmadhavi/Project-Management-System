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
            if(data=='SUCCESS'){
                alert("Evaluator assigned");
            }
            else{
                alert("Error");
            }
            $(f).prop("disabled",false);
            
        }
    });
}