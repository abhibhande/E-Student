



function checkAdminLogin(){
    var adminLogEmail = $("#adminLogemail").val();
    var adminLogPass = $("#adminLogpass").val();
    $.ajax({
        url: "admin/admin.php",
        method: "POST",
        data:{
            checkLogemail: "checklogmail",
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass,
        },
        success: function(data){
            if(data == 0)
            {
                $("#statusAdminLogMsg").html('<small class=" alert alert-danger">Invalid E-Mail ID or Password !</small>');
                clearAdminLogField();
            }
            else if(data == 1)
            {
                $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading ...</small>');
                setTimeout(()=>
                {
                    window.location.href = "admin/adminDashboard.php";
                }, 1000);
                clearadminLogField();
            }
        },
    });
}
function clearAdminLogField()
{
    $("#adminLoginForm").trigger("reset");
    $("#statusAdminLogMsg1").html(" ");
    $("#statusAdminLogMsg2").html(" ");
}