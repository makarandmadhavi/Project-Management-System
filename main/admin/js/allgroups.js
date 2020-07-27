function display_allgroups() {
    $.ajax({
        type: "POST",
        url: "backend/displaygroups_ajax.php",
        data: {
            //data goes here
            
        },
        success: function (data) {
            //data is returned here
            $('tbody').html(data);
        }
    });
}