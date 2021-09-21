<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $name; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
</head>

<style>
.login{    
position: absolute;
width: 517px;
height: 581px;
left: 826px;
top: 100px;
background: #FFFFFF;
border-radius: 4px;
-webkit-box-shadow: 3px 2px 22px 1px rgba(0,0,0,0.57);
-moz-box-shadow: 3px 2px 22px 1px rgba(0,0,0,0.57);
box-shadow: 3px 2px 22px 1px rgba(0,0,0,0.57);
}
body{
background: #F7F9FF
}

.admin_login{
    width: 242px;
height: 19px;
margin-top:90px;
margin-left:50px;
font-family: Montserrat Alternates;
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.01em;
color: #999696;
}
#username{
    width: 403px;
height: 46px;
margin-left:50px;
background: #F8FAFF;
margin-top :80px;
border-radius: 0px 15px 15px 0px;
border:none;
}
#password{
    width: 403px;
height: 46px;
margin-left:50px;
background: #F8FAFF;
margin-top:45px;
border:none;
border-radius: 0px 15px 15px 0px;
}
#checkbox{
    width: 17px;
height: 17px;
margin-left:50px;
margin-top:30px;
background: #F8FAFF;
border: 1px solid #C0BFBF;
box-sizing: border-box;
border-radius: 4px;

}
.remember_me{
    font-family: Montserrat Alternates;
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 17px;
margin-top:30px;
letter-spacing: 0.01em;
color: #999696;
}

.forgot_password{
    width: 234px;
height: 17px;
margin-top:-30px;
margin-left:350px;
font-family: Montserrat Alternates;
font-style: normal;
font-weight: 600;
font-size: 12px;
line-height: 17px;
letter-spacing: 0.01em;
color: #999696;
}
.grid{
    height:100px;
    width:500px;
}
.button{
width: 403px;
height: 40px;
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
.rectangle{
    position: absolute;
width: 166.47px;
height: 149.33px;
left: 372.18px;
margin-top:215px;

background: #48B5B9;
transform: rotate(-18.69deg);
}
.rectangle1{
    position: absolute;
width: 166.47px;
height: 149.33px;
left: 251px;
margin-top:165px;

background: #48B5B9;
transform: rotate(-43.91deg);
}
.circle{
    position: absolute;
width: 30px;
height: 30px;
margin-left: 215px;
margin-top: 330px;
border-radius:50%;
background: #FF8787;
}
.circle1{
    position: absolute;
width: 30px;
height: 30px;
margin-left: 445px;
margin-top: 130px;
border-radius:50%;
background: #FF8787;
}
.circle2{
    position: absolute;
width: 30px;
height: 30px;
left: 455px;
margin-top: 400px;
border-radius:50%;
background: #FF8787;
}
.logo{
    width:150px;
    height:100px;
    padding:30px 0px 0px 30px;
}

</style>


<body>
<img class="logo" src="<?php echo base_url(); ?>uploads/school_content/admin_logo/<?php $this->setting_model->getAdminlogo();?>" />    
<div class="animation">
<div class="rectangle">
</div>
<div class="rectangle1"></div>
<div class="circle"></div>
<div class="circle1"></div>
<div class="circle2"></div>
</div>
<div class="login">
    <div class="admin_login">
 <h3>Admin login</h3>
 </div>
<form action="<?php echo site_url('site/login') ?>" method="post">

<div class="username">
<input type="text" name="username"  value=""  id="username">
</div>
<div class="password">
<input type="password" value="" name="password"  id="password">
</div>
<div class="grid">
    <div class="checkbox">
     <input type="checkbox" id="checkbox">
     <label class="remember_me">Remember me</label>
    </div>
    <div class="forgot_password">
      <h3>Forgot password?</h3>
    </div>
</div>

<button type="submit" class="button">Login</button>
</form>
</div>
</body>
</html>