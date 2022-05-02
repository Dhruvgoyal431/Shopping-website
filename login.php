<?php
session_start();
if(isset($_COOKIE['logged_in']) && $_COOKIE['logged_in']==true){
die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="reg.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <script type="text/javascript">
    function form_validation()
    {
    var valid=true;
    var name=document.login.uname.value;
    var password=document.login.password.value;
    if (name=="")
    {
      alert("Please enter your Name!");
      valid=false;
    }
    if(password=="")
    {
      alert("Please enter Password.");
      valid=false;
    }
  }
  </script>
    <nav class="navigation">
        
        <a href="sample.html" class="logo"><img src="logo.png" style="height: 120px; width: 160px;"></a>
        
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon">
                <i class="fas fa-bars"></i></span>
        </label>
        
        <ul class="menu">
            <li><a href="sample.html" class="active">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        
        <div class="right-elements">
            <a href="#" class="search"><i class="fas fa-search"></i></a>
            <a href="#" class="cart"><i class="fas fa-shopping-bag"></i></a>
            <a href="login.html" class="user"><i class="far fa-user"></i></a>
        </div>
    </nav>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form id="theForm" name="login" method="get" action="sample.php" onsubmit="form_validation();">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username<span class="red">*</span></span>
            <input type="text" id="uname" placeholder="Enter your username">
            <?php 
                if(isset($_COOKIE['remember_username'])){
                    echo "value='".$_COOKIE['remember_username']."'";
                } 
            ?>
          </div><br>
          <div class="input-box">
            <span class="details">Password<span class="red">*</span></span>
            <input type="password" id="password" name="password" placeholder="Enter your password">          
            <?php if(isset($_COOKIE['remember_password'])){
                echo "value='".$_COOKIE['remember_password']."'";
                }    
            ?>    
        </div>
        </div>
        </div>
        <div class="button">
          <input type="submit" value="Login" id="submit" name="login" onclick="l1();">&nbsp;
          <input type="reset" value="reset" id="reset_button" onclick="r1();">
          <script type="text/javascript">
            function l1()
            {
              var result = confirm("Are you sure you want to submit?");
              if(result==false){
                event.preventDefault();
              }
              else{
              document.login.password.value="";
              }
            }
            function r1()
            {
              var result = confirm("Are you sure you want to reset?");
              if(result==false){
                event.preventDefault();
              }
              else{
              document.login.uname.value="";
              document.login.password.value="";
              }
            }
          </script>
         <br><input type="checkbox" name="remember_me"><label for="">Remember Me</label><br>
        </div>
    </form>
      <a href="fp.html" >Forgot password?</a><br>
      
      <a href="regs.html">Don't have an Account?</a>
    </div>
  </div>

</body>
</html>