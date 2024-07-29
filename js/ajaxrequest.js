
$(document).ready(function(){

    $("#stuemail").on("keypress blur", function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: "Student/addstudent.php",
            method: "POST",
            data: {
                checkemail: "checkmail",
                stuemail: stuemail,
            },
            success: function(data){
                //console.log(data);
                if(data != 0)
                { 
                    $("#statusMsg2").html('<small style="color: red;">E-Mail ID Already Existed. Please Enter New E-mail ID !</small>');
                    $("#signup").attr("disabled",true);
                }else if (data == 0 && reg.test(stuemail))
                {
                    $("#statusMsg2").html('<small style="color: green;">Now you can go !</small>');
                    $("#signup").attr("disabled",false);
                }else if(!reg.test(stuemail)){
                    $("#statusMsg2").html('<small style="color: red;">Please Enter Valid E-Mail e.g abc@mail.com !</small>');
                    $("#signup").attr("disabled",true);
                }
                if(stuemail == ""){
                    $("#statusMsg2").html('<small style="color: red;">Please Enter E-Mail !</small>');
                }
            },
        });
    });
});




function addStu()
{
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

    if(stuname.trim() == "")
    {
        $("#statusMsg1").html('<small style="color: red;">Please Enter Name !</small>');
        $("#stuname").focus();
        return false;
    }else if(stuemail.trim() == "")
    {
        $("#statusMsg2").html('<small style="color: red;">Please Enter E-Mail !</small>');
        $("#stuemail").focus();
        return false;
    }else if(stuemail.trim() != "" && !reg.test(stuemail))
    {
        $("#statusMsg2").html('<small style="color: red;">Please Enter Valid E-Mail e.g abc@mail.com !</small>');
        $("#stuemail").focus();
        return false;
    }
    else if(stupass.trim() == "")
    {
        $("#statusMsg3").html('<small style="color: red;">Please Enter Password !</small>');
        $("#stupass").focus();
        return false;
    } else{
        $.ajax({
            url:"Student/addstudent.php",
            method: "POST",
            dataType: "json",
            data: {
                stusignup: "stusignup",
                stuname: stuname,
                stuemail: stuemail,
                stupass: stupass,
            },
    
            success: function(data){
                console.log(data);
                if(data == "OK")
                {
                    $("#successMsg").html("<span class='alert alert-success'>Registration Successfully !</span>");
                    clearStuRegField();
                }
                else if(data == "Failed")
                {
                    $("#successMsg").html("<span class='alert alert-danger'>Unable to Register !</span>");
                }
            },
    
        });
    }

    
}

//Empty All Fields

function clearStuRegField()
{
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}


//Login

function checkStuLogin(){
    var studentLogEmail = $("#stuLogemail").val();
    var studentLogPass = $("#stuLogpass").val();

    $.ajax({
        url:"Student/addstudent.php",
        method: "POST",
        // dataType: "json",
        data: {
            checkLogemail: "checkLogmail",
            studentLogEmail:  studentLogEmail,
            studentLogPass: studentLogPass,
        },
        success: function(data) {
            console.log(data);

            if(data == 0)
            {
                $("#statusLogMsg").html('<small class=" alert alert-danger">Invalid E-Mail ID or Password !</small>');
                clearStuLogField();
            }
            else if(data == 1)
            {
                $("#statusLogMsg").html('<div class=" spinner-border text-success" role="status"></div>');
                setTimeout(()=>
                {
                    window.location.href = "index.php";
                }, 1000);
                clearStuLogField();
            }
        },
    });
}
function clearStuLogField()
{
    $("#stuLoginForm").trigger("reset");
    $("#statusLogMsg1").html(" ");
    $("#statusLogMsg2").html(" ");
}