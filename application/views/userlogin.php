<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
    <title>BALA BHARATHI VIDYALAYAM</title>
</head>
<style>

.login{    
/* position: absolute; */
/* width: 517px;
height: 581px;
left: 826px;
top: 100px; */
height:520px;
background: #FFFFFF;
border-radius: 4px;
-webkit-box-shadow: 3px 2px 22px 1px rgba(0,0,0,0.57);
-moz-box-shadow: 3px 2px 22px 1px rgba(0,0,0,0.57);
box-shadow: 3px 2px 22px 1px rgba(0,0,0,0.57);
}
.login1{
    height:520px;
    background:#f7f9ff;
}
body{
background: #F7F9FF;
}

.text_admin{
margin-top:0px;
margin-left:50px;
font-family: Montserrat Alternates;
font-style: normal;
padding-top:20px;
font-weight: 600;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.01em;
color: #999696;
}
#username{
    width: 75%;
height: 46px;
margin-left:50px;
background: #F8FAFF;
margin-top :80px;
border-radius: 0px 15px 15px 0px;
border:none;
}
#password{
    width: 75%;
height: 46px;
margin-left:50px;
background: #F8FAFF;
margin-top:45px;
border:none;
border-radius: 0px 15px 15px 0px;
}
#checkbox{
    width: 4%;
height: 17px;
margin-left:50px;
margin-top:30px;
background: #F8FAFF;
border: 1px solid #C0BFBF;
box-sizing: border-box;
border-radius: 4px;
left:0;

}
.custom-control-label{
    margin-left:50px;
    font-family: Montserrat Alternates;
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 17px;
margin-top:30px;
letter-spacing: 0.01em;
color: #999696;
}

.float-right{
margin-top:30px;
margin-right:80px;
font-family: Montserrat Alternates;
font-style: normal;
font-weight: 200;
font-size: 12px;
line-height: 17px;
letter-spacing: 0.01em;
color: #999696;
}

.button{
width: 75%;
height: 40px;
margin-top:50px;
background: #48B5B9;
border-radius: 6px;
margin-left:50px;
border:none;
}
input:focus{
    outline:none;
    font-size:20px;
    font-family: Montserrat Alternates;
font-style: normal;
}
.text_admin{
    margin-left:10px;
    font-family: Montserrat Alternates;
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.01em;
color: #999696;
}

.h-100,.vertical-center{
    background: #F7F9FF;
    height:100%;
}
.fill,html{
    min: height 100%;
    height:100%;
}
.logo{
    width:15%;
    height:15%;
    padding:30px 0px 0px 30px;
}
</style>
<body>
<img class="logo" src="<?php echo base_url(); ?>uploads/school_content/admin_logo/<?php $this->setting_model->getAdminlogo();?>" />
    <section  class="h-100">
        <!-- <div class="jumbotron vertical-center"> -->
<div class="container">
  <div class="row mb-2">
    <div class="col-lg-6 ">
    <img class="mx-auto d-block" src="<?php echo base_url(); ?>uploads/school_content/admin_logo/images.png ">
    </div>
    <div class="col-lg-6 login">
    
 <h3 class="text_admin">User login</h3>
    <form action="<?php echo site_url('site/userlogin') ?>" method="post">

<div class="username">
<input type="text" name="username"  value=""  id="username">
</div> 
<div class="password">
<input type="password" value="" name="password"  id="password">
</div>
<div class="form-group clearfix">
                  <div class="custom-control custom-checkbox float-left">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="rem" />
                    <label class="custom-control-label" for="customCheck">Remember me</label>
                  </div>
                  <div class="forgot float-right">
                    <a href="#" id="forgot-link">Forgot Password?</a>
                  </div>
                </div>
<button type="submit" class="button">Login</button>
</form>
</div>
<!-- </div> -->
</section>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>