$(document).ready(function() {
    $('#submitbtn').click(function(event) {

        event.preventDefault();
        let resident_id = $("#name").val();
        let resident_password = $("#email").val();

        $.ajax("backend/login.php", {
                type: "POST",
                data: {
                    residentID: resident_id,
                    residentPass: resident_password,
                },
            })
            .done(function(response) {
                console.log("worked");
                console.log(response);

                if (response === "<script> alert('User not found');</script>") {
                    alert("User Not found");
                }
                if (response === "<script>alert('Logged in successfully!');</script>") {
                    alert("Logged in successfully!");
                    window.location.replace("confirmation.php");
                }
                if (response === "<script>alert('Username or password incorrect!');</script>") {
                    alert("User or password incorrect!");
                }
            })
            .fail(function() {
                alert("Something went wrong with a request to the server");
            });
    });

    $("#admin-subbtn").click(function(event) {

        event.preventDefault();
        let admin_id = $("#name").val();
        let admin_password = $("#email").val();
        //console.log('hello');
        $.ajax("backend/login-admin.php", {
                type: "POST",
                data: {
                    adminID: admin_id,
                    adminPass: admin_password,
                },
            })
            .done(function(response) {

                console.log(response);
                if (response === "<script> alert('User not found');</script>") {
                    alert("User Not found");
                }
                if (response === "<script>alert('Logged in successfully!');</script>") {
                    alert("Logged in successfully!");
                    window.location.replace("admin.php");
                }
                if (response === "<script>alert('Username or password incorrect!');</script>") {
                    alert("User or password incorrect!");
                }
            })
            .fail(function() {
                alert("Something went wrong with a request to the server");
            });
    });

    $("#load-feedback").click(function(event) {
        event.preventDefault();
        let IssueNum = $("#feedb-load").val();
        //console.log('hello');
        $.ajax("old-home1.php", {
                type: "POST",
                data: {
                    issueID: IssueNum,

                },
            })
            .done(function(response) {
                console.log(response);
                alert("Feedback Loaded!");
                $("body").html(response);
            })
            .fail(function() {
                alert("Something went wrong with a request to the server");
            });
    });










});