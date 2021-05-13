$(document).ready(function() {
    // alert("hello");
    $("#phoneLoginBtn").click(function() {
        $('#phoneLogin').show();
        $('#mailLogin').hide();
    });
    $("#mailLoginBtn").click(function() {
        $('#phoneLogin').hide();
        $('#mailLogin').show();
    });
    $(".sendOtp").click(function() {
        sendOtp();
        $('#phoneLogin').hide();
        $('#mailLogin').hide();
        $('#otoVerify').show();
    });
    $(".close").click(function() {
        $('#phoneLogin').hide();
        $('#mailLogin').show();
        $('#otoVerify').hide();
    });

    
   
    $("#rbtn").prop('disabled', true);

    $('#scPass').on('focusout',function() {
        var scpass=$('#scPass').val();
        var pass=$('#sPass').val();
        if(scpass!=pass){
            $("#rbtn").prop('disabled', true);
            alert('Password Missmatch'); 
        }
        else{
            $("#rbtn").prop('disabled', false);   
        }
     });  
   
});
$(document).ready(function() {
    // alert("hello");
})


function sendOtp(){
    // alert("otp send")
    var email = $("#email").val();
    
}

$("#close").click(function() {
    $("#chatBox").css('display', 'none');;
})
$("#chatBtn").click(function() {
    $("#chatBox").css('display', 'block');;
})