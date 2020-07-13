function display_faculty() {
    $.ajax({
        type: "POST",
        url: "backend/displayfaculty_ajax.php",
        data: {
            //data goes here
            
        },
        success: function (data) {
            //data is returned here
            $('tbody').html(data);
        }
    });
    
}