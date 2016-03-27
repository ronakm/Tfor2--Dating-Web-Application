<!DOCTYPE HTML>
<html>
<head>
        
<link rel="icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
<title>Forget password</title>
<meta charset="UTF-8" />
<meta name="discription" content="Dating Site,Forget Passwords">
<meta name="Author" content="">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/forgetpass.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>  
<script type="text/javascript">

function forget_validation() 
{
    
     var new_pass=$('#new_password').val(); 
    
     var confirm_pass=$('#confirm_password').val();
     var confirm_len=confirm_pass.length;
     var pass_len=new_pass.length;
     
     if(pass_len==0)
	{
		  $("#password_error").html("Password can not kept blank...");
                 
                  return false;
	}
        
     
    if(pass_len < 6)
    {
        $("#password_error").html("Password length minimum of 6 characters");
                 
        return false;
    }
    if(confirm_len==0)
	{
		  $("#confirmpass_error").html("Confirm can not kept blank...");
                 
                  return false;
	}
    if(new_pass!=confirm_pass)
    {
        $("#confirmpass_error").html("Confirm password not matched");
        return false;
    }
      else {
          return true;
      }

}

</script>
<style>
    section .msg
    {
        text-align: center;
    }
    section .passlink 
    {
        margin-left:36%;
    }
</style>

</head>



<body>
    
    
    
    <div class="container">
        
        <header>
            
            <a href="<?php echo base_url(); ?>welcome/index">
                <img src="<?php echo base_url(); ?>images/logo.png" height="89" width="123" alt="not found">
            </a>
            
            <div class="sell_story">
                
                <p>
                    <span>Earn up to <strong>£5000</strong> </span> for telling your true story
                    to a national women’s magazine, such as Bella
                    or Take A Break.<a href="#"> Click here to find out more.</a>
                </p>
                
            </div>
            
            <div class="point_picture">

                <div>
                    <p>
                        Points for pictures…
                    </p>
                    <p>
                         Posted a profile photo yet?
                         <br>
                         Remember you get 5 points when you do! 
                    </p>
                </div>
                <img src="<?php echo base_url();?>images/points_for_pictures_header.png" width="118" height="64" alt="Image not found"/>
               
                
            </div>
            
        </header> 
        <section>
            <h3>Forget Password</h3>
            
            <p class="msg">A new password link has been sent to your mail.Follow the instruction to reset your password</p>
            <p class="msg">Click the following link to activate your password</p>
            <a class="passlink" href="<?php echo base_url(); ?>welcome/reset_password/<?php echo $user_id;?>/<?php echo $new_pass_key; ?>"><?php echo $user_id;?>/<?php echo $new_pass_key; ?></a>
            
        </section>  <!-- end of section -->


<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
