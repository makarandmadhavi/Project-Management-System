function display_projects(status){
    $.ajax({
        type: "POST",
        url: "backend/displayprojects.php?status="+status,
        data: {
            //data goes here
            
        },
        success: function (data) {
            //data is returned here
            $('tbody').html(data);
        }
    });
}

function view_projectDetails(id){
    $.ajax({
        type: "POST",
        url: "backend/view_details.php?id="+id,
        data: {
            //data goes here
            
        },
        success: function (data) {
            //data is returned here
            $('.card').html(data);
        }
    });
}