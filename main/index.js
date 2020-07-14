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
                if (data == "incorrect") {
                    alert("Incorrect username password!");
                } else {
                   window.location = data;
                }
            }
        });
        alert("words");
    return false;

}