<?php 

if(isset($_SESSION['mail'])){
    header("location:connect.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login with registration - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style type="text/css">
        body {
            background-image: url("images/ubuntu.jpg");
    padding-top: 200px;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="SignUp-form-link">SignUp</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                        <form name="myform" id="login-form" action="login.php" method="post" role="form" style="display: block;" onsubmit="return validateForm()">
                                    <div class="form-group">
                    <input type="email" name="email" id="Email" tabindex="1" class="form-control" placeholder="Email" value="" >
                                    </div>
                                <div class="form-group">
                <input type="password" name="password" id="passwordlogin" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <!--<div class="form-group text-center">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>-->
                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
        <input type="submit" name="loginsubmit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" >
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="form-group">
                                            <div class="row">
                                               <div class="col-lg-12">
                                                <div class="text-center">
                                         <a href="forget.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </form>
                        <form id="SignUp-form" action="signup.php" method="POST" role="form" style="display: none;" enctype="multipart/form-data" onsubmit="return checkDOB();">
                                    <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="">
                                    </div>
                                    <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Minimum 6 Lenght" minlength="6" id="pass">
                                    </div>                                    
                            
                                    <div class="form-group">
                <input type="address" name="addr" id="address" class="form-control" placeholder="Address">
                                    </div>  
                                <div class="form-group">
                <input type="number" name="mobile" id="number" class="form-control" placeholder="Mobile No." value="91+" minlength="10" required>
                                    </div>
                                    <div class="form-group">
                <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" placeholder="D.O.B - yyyy/mm/dd" >
                                    </div>
                                     <div class="form-group">
            <input type="text" name="description" id="description" class="form-control" placeholder="Description" value="">
                                     </div>
                                      <div class="form-group">
            <input type="text" name="gender" id="gender-0" tabindex="1" class="form-control" placeholder="Your Gender(M/F)" value="" required>
                                     </div>
                                    <div class="form-group">
            <input type="file" name="image" id="gender-0" tabindex="1" class="form-control" required>
                                     </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
<input type="submit" name="btn_upload" id="SignUp-submit" tabindex="4" class="form-control btn btn-SignUp" value="SignUp Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
         $("#SignUp-form").fadeOut(100);
        $('#SignUp-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#SignUp-form-link').click(function(e) {
        $("#SignUp-form").delay(100).fadeIn(100);
         $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
function validateForm()
    {
        // var a=document.forms["myform"]["email"].value;
        // var b=document.forms["myform"]["password"].value;
        
        // if (a==null || a=="",b==null || b=="")
        // {
        //     alert("Please Fill All Required Field");
        //     return false;
        // }
    // if( document.getElementById('Email' ;'passwordlogin').value === '' ){
    //   alert('Both Fields are Empty');
    // }
    if( document.getElementById('Email').value === '' ){
      alert('Email id is Empty');
    }
    if( document.getElementById('passwordlogin').value === '' ){
      alert('Password is Empty');
    }
    } 
// function validateEmail(emailField){
//             var reg =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

//                 if (reg.test(emailField.value) == false) 
//                     {
//                         alert('Invalid Email Address');
//                         this.value=NULL;
//                         return false;
//                     }

//                 return true;

//                 }


//validation for DOB not greater than today
function checkDOB() {
        var dateString = document.getElementById('dateofbirth').value;
        var myDate = new Date(dateString);
        var today = new Date();
        if ( myDate > today ) { 
            $('#dateofbirth').after('<p>You cannot enter a date in the future!.</p>');
            return false;
        }
        return true;
    }

// mobile number validation
// function checkSign(){
//     if( document.getElementById('Email').value === '' ){
//       alert('Email id is Empty');
//     }
//     if( document.getElementById('passwordlogin').value === '' ){
//       alert('Password is Empty');
//     }
// }  

</script>
</body>
</html>


