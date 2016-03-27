<?php include("/var/www/Codeigniter_ez/css/Session.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
<title>Dating Site</title>
<meta charset="UTF-8" />
<meta name="discription" content="Dating Site">
<meta name="Author" content="AGS">
<meta name="keywords" contents="HTML 5,PHP,Codeigniter">

<!-- external css files -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/home.css" />

<!-- external java script files -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.leanModal.min.js"></script>  


<script type="text/javascript">
   
function login_validation()
{  
    var login_id=$('#login').val();
    var password=$('#password_login').val();
    var login_len=login_id.length;
    
    var password_len=password.length;
    if(login_len==0 && password_len==0)
    {
        $('#login_validation_error').show();
        $('#login_validation_error #model_disp .login').html('Username and Password can not be kept blank.');
        return false;
    }
    if(login_len==0)
    {
        $('#login_validation_error').show();
        $('#login_validation_error #model_disp .login').html('Username can not be kept blank.Please enter a username.');
        return false;
    }
    if(password_len==0)
    {
        $('#login_validation_error').show();
        $('#login_validation_error #model_disp .login').html('Password can not be kept blank.Please enter a username.');
        return false;
    }
    else
    {
        return true;
    }
}    

function submitform()
{
    
    var temp=$('#error_check').val();  
        /*leanModal({ top : 200, overlay : 0.4, closeButton: ".modal_close" }); */
     /*   $("#age_first_list").hide("slow");   */
     if(temp==1)
     {
         viewmodel();
     }  
        
        
}

function forget_validation()
{
        var email=$("#forget_password_div #model_disp form .input_mail").val();
        var email_len=email.length;
        if(email_len==0)
	{
		  $("#forget_password_div #model_disp form .error").html("Email can not kept blank...");
                 
                  return false;
	}

        if(email_len!=0)
	{	
		var check = /^[a-zA-Z][a-zA-Z0-9]*[_.]{0,1}[a-zA-Z0-9]*@{1}[a-zA-Z0-9]+\.{1}[a-zA-Z]{2,3}$/;	
		var result = check.test(email);
		if(result==false)
		{
			
                 
                  $("#forget_password_div #model_disp form .error").html("Please enter a valid format.");
                  return false;
		}
		else
		{
                    
                  
		}
	}	
    
    
}

function viewmodel()
{
    $("#model_disp").show();
}
</script>
<script type="text/javascript">
   
    function registration_click() {
        
      
        var flag_error_gender=1;
        var flag_error_email=1;
        var flag_error_dob=1;
        var flag_error_postcode=1;
        var flag_error_user=1;
        var flag_error_password=1;
        var flag_error_confirmpass=1;
        var flag_error_city=1;
        var flag_error_perfct=1;
         
         
        /*................... post code validation................. */
     
        var post_code=$("#postcode").val();
        var post_len=post_code.length;
        
        if(post_len==0) {
             $("#postcode_error_msg div").html("Postcode can not be blank");
             $("#postcode_error_msg").show();
             $('#border_regi_form').hide();
             flag_error_email=0;
        }
        else
        {
            
        }
     
     /*................ end of post code validation .......................*/
     
     /* ..............perfact match validation ...................*/
     
      var age_first=$("#age_first").text();
      var age_second=$("#age_second").text();
      if(age_second<age_first)
      {
         $("#perfact_error_msg div").html("Please select is valid perfact match");
         $("#perfact_error_msg").show();
         $('#border_regi_form').hide();
         flag_error_perfct=0; 
      }
      else 
      {
          $("#perfact_error_msg").hide();
      }
     /*....end of perfact match ...........*/
     
     
     /* .............password validation ...........*/
     
     var password=$("#password").val();
       
       var pass_len=password.length;
      
       if(pass_len < 6)
	{
            
		$("#password_error_msg div").html("Please choose a password (at least 6 characters).");
                $("#password_error_msg").show();
                $('#border_regi_form').hide();
                flag_error_password=0;
	}
        else {
            
             $("#password_error_msg").hide();
        }
     
     
     /* ...........end of password validation ............*/
     
      /* .................confirm password validation..............*/ 
      
       var password=$("#password").val();
       var confirm_pass=$("#confirm_pass").val();
       
       if(password != confirm_pass) {
           
           $("#confirmpass_error_msg div").html("Password and confirmation don't match.");
           $("#confirmpass_error_msg").show();
           $('#border_regi_form').hide();
           flag_error_confirmpass=0;
           $("#password").val('');
            $("#confirm_pass").val('');
           
       }
       else {
           
            $("#password_error_msg").hide();
           
       }
      
      /* ...................end of confirm password validation .....*/
     
     
     /* ................... username validation ...........*/
     
     
     
       var username=$("#username").val();
       
       var user_len=username.length;
       if(user_len<3 || user_len>25)
	{
               
		$("#username_error_msg div").html("Username length shuold be >3 and <25 characters.");
                $("#username_error_msg").show();
                 $('#border_regi_form').hide();
                flag_error_user=0;
	}
	else
	{
		re = /^[A-Za-z0-9]+$/;
		var isValid = re.test(username);
		if(isValid==false)
		{
			
                        $("#username_error_msg div").html("You need to choose a valid username (no speacial characters).");
                        $("#username_error_msg").show();
                         $('#border_regi_form').hide();
                        flag_error_user=0;
               }
		else
		{
                     $("#username_error_msg").hide();
		}
	}
     
     /* .............end of username validation ......... */
     
     
     
        /* ................email validation.................. */
        
       
        var text_val=$("#email").val();
        var text_len=text_val.length;
	if(text_len==0)
	{
		  $("#email_error_msg div").html("Email can not kept blank...");
                  $("#email_error_msg").show();
                  $('#border_regi_form').hide();
                  flag_error_email=0;
   		
	}

        if(text_len!=0)
	{	
		var check = /^[a-zA-Z][a-zA-Z0-9]*[_.]{0,1}[a-zA-Z0-9]*@{1}[a-zA-Z0-9]+\.{1}[a-zA-Z]{2,3}$/;	
		var result = check.test(text_val);
		if(result==false)
		{
			
                 
                  $("#email_error_msg div").html("Please enter a valid format.");
                  $("#email_error_msg").show();
                  $('#border_regi_form').hide();
                  flag_error_email=0;
		}
		else
		{
			
			
		}
	}	
    /* ..................end of email validation ...............*/  
    
   /* ..................gender  validation ...............*/  
    
      var t = $("#gender").text();
  
      if(t=="Select")
      {
         
         $("#gender_error_msg div").html("Please specify the gender you're looking for...");
         $("#gender_error_msg").show();
         $('#border_regi_form').hide();
         flag_error_gender=0;
      }
      
      else 
      {
      
      if(t=="A man looking for a woman" ||t=="A man looking for a man" ||t=="A man looking for either"){
        
         $("#gender_input").val("male");
          
      }
      else {
      
      $("#gender_input").val("female"); 
     }
     
     }
     
      
     /* ..................end of gender validation ...............*/
     /* ..........town validation ..........*/
     var temp_city=$("#city").text();
    
     if(temp_city=="Town")
      {
         
         $("#city_error_msg div").html("Please select a Town...");
         $("#city_error_msg").show();
         $('#border_regi_form').hide();
         flag_error_city=0;
      }
      
      else 
      {
           $("#city_input").val(temp_city);
      }
     
     
     /*.............end of town ................*/
     
     /* ...................dob validation ...........*/
     
     
     var year = $("#year").text();
  
      if(year=="Year")
      {
         
         $("#dob_error_msg div").html("Please provide a valid birthday.");
         $("#dob_error_msg").show();
         $('#border_regi_form').hide();
         flag_error_dob=0;
      }
      
      else 
      {
      
                var year_temp=$("#year").text();
                var month_temp=$("#month").text();
                var day_temp=$("#day").text();

               if(month_temp=="Jan"){
                   var month=01;
               }
               if(month_temp=="Feb"){
                   var month=02;
               }
               if(month_temp=="Mar"){
                   var month=03;
               }
               if(month_temp=="Apr"){
                   var month=04;
               }
               if(month_temp=="May"){
                   var month=05;
               }
               if(month_temp=="Jun"){
                   var month=06;
               }
               if(month_temp=="Jul"){
                   var month=07;
               }
               if(month_temp=="Aug"){
                   var month=08;
               }
               if(month_temp=="Sep"){
                   var month=09;
               }
               if(month_temp=="Oct"){
                   var month=10;
               }
               if(month_temp=="Nov"){
                   var month=11;
               }
               if(month_temp=="Dec"){
                   var month=12;
               }

              month = month; // p@rse date into variables
              var day = day_temp;
              year = year_temp;
              
              var currentTime = new Date()
            var curr_month =currentTime.getMonth() + 1;
            var day1 = currentTime.getDate()
            var curr_year = currentTime.getFullYear()
           
            if(month<curr_month)
            {
             var age=curr_year-year;
            
             $("#age_input").val(age);
            }
            else 
            {
                 var age=curr_year-year;
                 age--;
                 $("#age_input").val(age);
            
            }
           
              if ((month==4 || month==6 || month==9 || month==11) && day==31) 
              {
              
                  
                    $("#dob_error_msg div").html("Month "+month+" doesn`t have 31 days!");
                    $("#dob_error_msg").show();
                    $('#border_regi_form').hide();
                    flag_error_dob=0;

          
              }

            if (month == 2)
            { // check for february 29th
            
                var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
                if (day > 29 || (day==29 && !isleap)) 
                {

                  $("#dob_error_msg div").html("February " + year + " doesn`t have " + day + " days!");
                  $("#dob_error_msg").show();
                  $('#border_regi_form').hide();
                  flag_error_dob=0;

                }
            }
          // date is valid

              var dob=year_temp+"-"+month+"-"+day_temp;

              $("#dob_input").val(dob);
     
      }
     
     
     /* ...................emd of dob validation ............. */
     
     
    
     
      if(flag_error_gender==1 && flag_error_email==1 && flag_error_dob==1 && flag_error_postcode==1
        && flag_error_user==1 && flag_error_password==1 && flag_error_confirmpass==1 && flag_error_city==1 &&flag_error_perfct==1) 
      {
      
          return true;
          
      }
      else 
      {
         
       return false;
      }
  }
  
  
    
    $(document).ready(function() {
        
       
   /* $("#email").leanModal({ top : 200, overlay : 0.4, closeButton: ".modal_close" });*/
     
     
    $("#email").click(function() {
        
         $("#email_error_msg").hide();
        
        /*  $("#model_disp").show();*/
        
       
    });
    
    $("#postcode").click(function() {
        
         $("#postcode_error_msg").hide();
    });
       
       
    $("#gender").click(function () {
      
     $("#gender_error_msg").hide();
        
    if ($('#gender_list').is(':hidden')) { 

     $("#gender_list").show("slow"); 
    }else {
        $("#gender_list").hide("slow"); 
    }


      
        
    });
    
    $(".list_items").click(function () {
        
      var temp=$(this).text();
      $("#tp").html=temp;
      $("#gender").html(temp);
      $("#gender_list").hide();
     
    });
    
    
    /* age first */ 
    $("#age_first").click(function () {
        
if ($('#age_first_list').is(':hidden')) { 

 $("#age_first_list").show("slow"); 
}else {
    $("#age_first_list").hide("slow"); 
}


      
        
    });
    
    $("#age_first_list li").click(function () {
        
      var temp=$(this).text();
 
      $("#age_first").html(temp);
      $("#age_first_list").hide();
     
    });
    
    
    /* age second */
    
     $("#age_second").click(function () {
        
if ($('#age_second_list').is(':hidden')) { 

 $("#age_second_list").show("slow"); 
}else {
    $("#age_second_list").hide("slow"); 
}


      
        
    });
    
    $("#age_second_list li").click(function () {
        
      var temp=$(this).text();
 
      $("#age_second").html(temp);
      $("#age_second_list").hide();
     
    });
    
/* continue field */
 $("#continue_regi").click(function () {
        
    $('#other_field').show();
    $('#border_regi_form').show();
   $("#continue_regi").hide();
     
    });

/* day */
     $("#day").click(function () {
          $("#dob_error_msg").hide();
        
        if ($('#date_list').is(':hidden')) { 

                $("#date_list").show("slow"); 
        }else 
        {
        $("#date_list").hide("slow"); 
        }

    });
    
    $("#date_list li").click(function () {
        
      var temp=$(this).text();
 
      $("#day").html(temp);
      $("#date_list").hide();
     
    });
    
/* year */
    
    $("#year").click(function () {
        $("#dob_error_msg").hide();
        if ($('#year_list').is(':hidden')) { 

                $("#year_list").show("slow"); 
        }else 
        {
        $("#year_list").hide("slow"); 
        }

    });
    
    $("#year_list li").click(function () {
        
      var temp=$(this).text();
 
      $("#year").html(temp);
      $("#year_list").hide();
     
    });
    
    
    /* month */
    
    $("#month").click(function () {
        $("#dob_error_msg").hide();
        
        if ($('#month_list').is(':hidden')) { 

                $("#month_list").show("slow"); 
        }else 
        {
        $("#month_list").hide("slow"); 
        }

    });
    
    $("#month_list li").click(function () {
        
      var temp=$(this).text();
 
      $("#month").html(temp);
      $("#month_list").hide();
     
    });
    
    /* ..................city ....................*/
    
    $("#city").click(function () {
        
        if ($('#city_list').is(':hidden')) { 

                $("#city_list").show("slow"); 
        }else 
        {
        $("#city_list").hide("slow"); 
        }

    });
    
  /*  $("#city_list li").on('click',function () {
        
      var temp=$(this).text();
 
      $("#city").html(temp);
      $("#city_list").hide();
     
    });*/
    
    
    $('body').on('click', '#city_list li', function(event) {
      
      var temp=$(this).text();
 
      
   
      $("#city").html(temp);
      $("#city_list").hide();
      
      });
    
    
     $("#forget_password").click(function () {
        
      
     $("#forget_password_div").show();
    });
    
    
    /*........... post code ajax *.............*/
 
     $("#postcode").blur(function () {
      
        
        var postcode=$("#postcode").val();
       
        $.ajax({
                  url: '<?php echo base_url(); ?>welcome/get_city_name/',
                  type: "POST",
                  data:{'post_code':postcode},
                  dataType: 'json',
                  success: function(output_string)
                  {
                 
                    if(output_string==1)
                    {
                        $("#postcode_error_msg div").html("Please enter a valid postcode(e.g:E1 or E2)");
                        $("#postcode_error_msg").show();
                        $('#border_regi_form').hide();
                        $('#city_list').hide();
                    }
                    else
                    {

                         $('#city_list li').remove();
                         $('#city_list').append(output_string);
                         $('#city_error_msg').hide();
                    }
                   
                 }
                 
              });	


      
    });
    
    
     
});
</script>


        
        
        
    
</head>
<html>
    
    <body id="ovelay_body">
        <div id="border_regi_form">
        </div>
        <div id="login_validation_error">
                    <div id='overlay'></div>
                    <div id="model_disp" class="show">

                    <a href="">Close <img src="<?php echo base_url(); ?>images/modal_close.png" width="22" height="22"/></a>

                    <p class="login"><p>
                     
                    <p>Please try again. </p>

                    </div>
        </div>
        
        <?php 
          //  print_r($errors);
            if(empty($errors['login']))
             {
                
             }
             else {
           ?>  
             <div id='overlay'></div>
                    <div id="model_disp" class="show">

                    <a href="">Close <img src="<?php echo base_url(); ?>images/modal_close.png" width="22" height="22"/></a>

                    <p>Your login details do not match our records <p>
                     
                    <p>Please try again. </p>

                    </div>
            
         <?php 
            
            }
        ?> 
            <?php  if(empty($errors['password'])) {}
             else
             { ?>
        
                    <div id='overlay'></div>
                    <div id="model_disp" class="show">

                    <a href="">Close <img src="<?php echo base_url(); ?>images/modal_close.png" width="22" height="22"/></a>

                    <p>Your login details do not match our records <p>
                     
                    <p>Please try again. </p>

                    </div>
            
         <?php 
            
            }
        ?> 
        
        
        <a id ="share_div_fix" href="#">
        <span>share</span>
        </a>
        
         <div id="forget_password_div">
              <div id='overlay'></div>
              <div id="model_disp" class="show">

                    <a href="">Close <img src="<?php echo base_url(); ?>images/modal_close.png" width="22" height="22"/></a>

                    <p> Send me a new password<p>

                    <form method="post" action="<?php echo base_url(); ?>auth/forgot_password">
                    <label>Your email address:</label>
                    <input type="text" name="email" class="input_mail"/>
                    <span class="error"></span>
                    <input type="submit" value="send now" onclick="return forget_validation()" />
                    </form>

             </div>
         </div>
                    
        
        <header>
            
            <div class="header_content">
                
                <ul>
                    <li>
                        <a href="#"> Get real </a>
                    </li>
                    <li>
                        <a hrf="#"> News </a>
                    </li>
                </ul>
                
                <div class="login">
                    <form action="<?php echo base_url();?>auth/login" method="post">
                    <span class="last_span">
                        <input type="submit" value="Log in" onclick="return login_validation()"/>
                    </span>
                    
                   
                        <input type="text" name="login" placeholder="Username" id="login"/>
                        <input type="password" name="password" placeholder="Password" id="password_login"/>
                    </form>
                    <span class="first_span">
                        Already a member?
                    </span>
                 
                </div>
                
            </div>
            
        </header> <!-- end of header -->
        
        <div class="facing_header">
            
            <div class="content">
                
           
                <div class="facing_image">
                    
                    <div class="register">
                        
                        <span id="forget_password">Forgotten your password? </span>
                         
                        <form action="<?php echo base_url();?>auth/register" method="post">
                            
                            <p class="logo">
                            </p>
                            
                            <p class="slogan">
                               Joining is quick & easy -
                               
                               
                            </p>
                            <p class="slogan">try us for <span>free… </span>
                            </p>
                            
                            
                            <div class="gender_div">
                                <label class="age_label"> I am a </label>
                                <p>
                                   
                                    <span class="info">
                                        
                                    </span>
                                    
                                    <span class="gender" id="gender" >Select</span>
                                    
                                    <div class="validation_tooltip" id="gender_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                
                                    <input type="hidden" name="gender" id="gender_input" value="" />
                                   
                                   <ul id="gender_list">
                                    
                                     <li class="list_items">Select</li>
                                     <li class="list_items">A man looking for a woman</li>
                                     <li class="list_items">A man looking for a man</li>
                                     <li class="list_items">A woman looking for a man</li class="list_items">
                                     <li>A woman looking for a woman</li>
                                     <li class="list_items">A man looking for either</li>
                                     
                                     <li class="list_items">A woman looking for either</li>
                                     
                                    </ul>
                                    
                                        
                                </p>
                             

                            </div> 
                            
                            
                             <div class="age_div">
                                <label class="regi_label"> Age between </label>
                                <p>
                                   
                                    <span class="info">
                                        
                                    </span>
                                    
                                    <span class="age_first" id="age_first" name="age_first">18</span>
                                   
                                    <span class="age_second" id="age_second" name="age_second">99</span>
                                   
                              </p>
                              <div class="validation_tooltip" id="perfact_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                                     </div> 
                             

                            </div> 
                            
                            
                            <div class="age_list">
                            
                             <ul id="age_first_list">
                                    
                                    
                                       <?php for($i=18;$i<=99;$i++) { ?>
                                       <li class=""> <?php echo $i; ?> </li>
                                     
                                        <?php } ?>
                            </ul>
                            
                             <ul id="age_second_list">
                                    
                                    
                                       <?php for($i=99;$i>=18;$i--) { ?>
                                       <li class=""> <?php echo $i; ?> </li>
                                     
                                        <?php } ?>
                                    </ul>
                            
                            
                            </div>
                            
                            
                            <div class="email_div">
                                <label class="email_label"> My email address is </label>
                                <p>
                                   
                                    <span class="info">
                                        
                                    </span>
                                    
                                   <input type="text" name="email" class="email" id="email">
                                   <div class="validation_tooltip" id="email_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                                  </div>
                                
                                </p>
                             
                            </div> 
                            
                            <input type="button" id="continue_regi" value="Continue">
                            
                            <div id="other_field">
                                
                                
                                <div class="field_div">
                                    
                                <label class="dob_label"> I was born on </label>
                                <p>
                                   
                                    <span class="info">
                                        
                                    </span>
                                    
                                    <span class="day" id="day" name="day">Day</span>
                                    <span class="month" id="month" name="month">Month</span>
                                    <span class="year" id="year" name="year">Year</span>
                                   
                               </p>
                               
                               <div class="validation_tooltip" id="dob_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                               </div> 
                                <input type="hidden" name="dob_input" id="dob_input" value="" />
                                <input type="hidden" name="age_input" id="age_input" value="" />
                            
                            
                            <div class="dob_list">

                                <ul id="date_list">

                                          <li>Day</li>
                                          <?php for($i=1;$i<=31;$i++) { ?>
                                          <li><?php echo $i;?></li>

                                           <?php } ?>
                               </ul>

                                <ul id="month_list">

                                        <li class="">Month</li>
                                        <li class="">Jan</li>
                                        <li class="">Feb</li>
                                        <li class="">Mar</li>
                                        <li class="">Apr</li>
                                        <li class="">May</li>
                                        <li class="">Jun</li>
                                        <li class="">Jul</li>
                                        <li class="">Aug</li>
                                        <li class="">Sep</li>
                                        <li class="">Oct</li>
                                        <li class="">Nov</li>
                                        <li class="">Dec</li>

                                </ul>

                                <ul id="year_list">

                                          <li class="">Year</li>
                                          <?php for($i=2012;$i>=1914;$i--) { ?>
                                          <li class=""> <?php echo $i;?></li>

                                           <?php } ?>
                               </ul>
                                
                           </div>
                                
                                
                           <div class="postcode_div">
                               
                                <label class="postcode_label"> My postcode is</label>
                                <p>
                                   
                                    <span class="info">
                                      
                                    </span>
                                    
                                   
                                     <input type="text" name="postcode" class="postcode" id="postcode">
                                     <div class="validation_tooltip" id="postcode_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                                     </div> 
                                 </p>
                             
                            </div> 
                            
                               
                            
                                
                            <div class="city_div">
                                <label class="city_label"> My nearest town is </label>
                                <p>
                                   
                                    <span class="info">
                                        
                                    </span>
                                    
                                    <span class="city" id="city" name="city">Town</span>
                                     <div class="validation_tooltip" id="city_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                                     </div>
                                     <input type="hidden" name="city" id="city_input" value="" />
                                   <ul id="city_list">
                                    
                                    
                                    <!-- <li class="">A man looking for a woman</li>
                                     <li class="">A man looking for a man</li>
                                     <li class="">A woman looking for a man</li class="list_items">
                                     <li>A woman looking for a woman</li>
                                     <li class="">
                                     A man looking for either
                                     </li>
                                     
                                     <li class="">
                                     A woman looking for either
                                     </li> -->
                                     
                                    </ul>
                                    
                                        
                                </p>
                             

                            </div>  
                                
                                
                             <div class="postcode_div">
                                <label class="postcode_label"> Choose a username</label>
                                <p>
                                   
                                    <span class="info">
                                      
                                    </span>
                                    
                                   
                                     <input type="text" name="username" class="postcode" id="username">
                                     
                                      <?php if(empty($error)) {} else { ?>
                                <scrtipt>alert("ddd");</scrtipt>
                                        <div class="validation_tooltip show" id="username_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div><?php echo $error['username']; ?></div>
                                        </div> 
                                     
                                      <?php } ?>
                                     
                                    <div class="validation_tooltip" id="username_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                                     </div> 
                                   
                                 </p>
                             
                            </div> 
                                
                                
                            <div class="postcode_div">
                                <label class="postcode_label"> Choose a password</label>
                                <p>
                                   
                                    <span class="info">
                                      
                                    </span>
                                    
                                   
                                     <input type="password" name="password" class="postcode" id="password">
                                   
                                      <div class="validation_tooltip" id="password_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                                     </div> 
                                     
                                 </p>
                             
                            </div> 
                                
                                
                             <div class="postcode_div">
                                <label class="postcode_label">Confirm password</label>
                                <p>
                                   
                                <input type="password" name="confirm_password" class="postcode" id="confirm_pass">
                                <div class="validation_tooltip" id="confirmpass_error_msg">
                                    
                                        <img src="<?php echo base_url(); ?>images/validation_notch_top.png" alt="not found"/>
                                        <div></div>
                                </div> 
                                   
                                 </p>
                             
                            </div> 
                                
                                
                              <input type="submit" id="registration" value="Join for free" name="registration" onclick="return registration_click()" />
                                
                              
                              <p id="text_registation">
                                  By registering you confirm that you are over 18 
                                  <span>and that you agree to our</span>
                                  <a href="#">terms of use</a>
                              </p> 
                                
                            </div>
                            
                            
                        </form>

                    </div>
                 
                </div>
                
           </div>
            
        </div> <!-- end of  facing header -->
        
        </div> 
        
        <section>
            
            <div class="section_content">
            
                <div class="heading_div">
                    <p>Dating with  <span>a real difference</span>
                    <div>
                    </div>
                </div>  
                
                <div class="image_gallery">
                    
                    <h3> 1000s of UK dates waiting for you inside </h3>
                    <div class="gender_nav">
                    
                        <ul>
                            <?php $male='male';
                            $female="female";
                            $both="both";
                            ?>
                            <li><a href="<?php echo base_url();?>welcome/image_gallery/<?php echo $male; ?>">Men</a></li>
                            <li><a href="<?php echo base_url();?>welcome/image_gallery/<?php echo $female; ?>">Women</a></li>
                            <li><a href="<?php echo base_url();?>welcome/image_gallery/<?php echo $both; ?>">Both</a></li>
                        </ul>
                        
                    </div>
                    
                    <ul class="image_row1" id="row1">
                        
                        <li>
                            <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[0]->id;?>">
                                <img width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[0]->profile_img;?>" alt="image not found">
                            </a>
                            <p id="tp">
                               <span> <?php echo $random[0]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[0]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li>
                            <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[1]->id;?>">
                                <img width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[1]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                               <span> <?php echo $random[1]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[1]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[2]->id;?>">
                                <img width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[2]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                               <span> <?php echo $random[2]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[2]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[3]->id;?>">
                                <img  width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[3]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                               <span> <?php echo $random[3]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[3]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[4]->id;?>">
                                <img  width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[4]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                               <span> <?php echo $random[4]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[4]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[5]->id;?>">
                                <img  width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[5]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                              <span> <?php echo $random[5]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[5]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        
                        
            <!--  </ul>
                    
                     <ul class="image_row1 image_row2"> -->
                        
                        <li>
                            <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[6]->id;?>">
                                <img width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[6]->profile_img;?>" alt="image not found">
                            </a>
                            <p id="tp">
                               <span> <?php echo $random[6]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[6]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li>
                            <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[7]->id;?>">
                                <img width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[7]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                               <span> <?php echo $random[7]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[7]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[8]->id;?>">
                                <img width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[8]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                               <span> <?php echo $random[8]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[8]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[9]->id;?>">
                                <img  width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[9]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                                 <span> <?php echo $random[9]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[9]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[10]->id;?>">
                                <img  width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[10]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                               <span> <?php echo $random[10]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[10]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        <li> <a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[11]->id;?>">
                                <img  width="145" height="145" src="<?php echo base_url();?>/uploads/<?php echo $random[11]->profile_img;?>" alt="image not found">
                            </a>
                             <p id="tp">
                                 <span> <?php echo $random[11]->username;?></span><a href="<?php echo base_url();?>welcome/goto_profile/<?php echo $random[11]->id;?>">See similar profiles</a>
                            </p>
                        </li> 
                        
                        
                        
                    </ul>

                    
                    
                </div> <!-- end of img gallery --> 
                
                <div class="info_div">
                    <p>
                       Life should be for2 - Join the fastest growing and most innovative UK dating site - for free

                    </p>
                    <p>
                        Joining for2 takes just seconds. All you need to do is complete our simple registration form, verify your email address, and you’re done. And remember,
                        we reward you with up to 20 for2 bonus points simply for registering and completing your profile, which you can use to search for, and contact, members
                        you might like. Or you can join the fun on our superb discussion board, or post photos only your friends can see ...and much more. Join now to see what’s 
                        on offer!
                    </p>
                    
                </div> <!-- end of img gallery -->
                
                <div class="about_us">
                    
                    <div class="left">
                        
                        <p> The fastest growing and most innovative UK dating site </p>
                        <p>No subscriptions dating. </p>
                        <p>
                            When it comes to UK dating sites, for2 is one of 
                            the freshest and friendliest around. Not only does it 
                            offer a secure and fun UK dating environment, but 
                            it has lots of other great features too. Why not join 
                            today! It’s quick, it’s easy and it’s free.

                        </p>

                        
                        
                    </div>
                    
                     <div class="middle">
                          <p> An outstanding range of great features </p>
                          
                          <ul>
                              <li> Public & private photo albums</li>
                               <li> Discussion board - 8 separate forums</li>
                               <li>
                                  Competitions with superb prizes
                              </li>
                               <li>
                                  Real and virtual gifts
                              </li>
                               <li>
                                  Icebreakers
                              </li>
                               <li>
                                  Compatibility matching
                              </li>
                               <li>
                                 Location searching
                              </li>
                               <li>
                                  Friends & favourites
                              </li>
                              
                          </ul>
                          <p>Dating &  <span> much more </span>
                          </p>
                          
                          <p>
                              … & much more
                          </p>
                         
                    </div>
                    
                     <div class="right">
                           <p> What others are saying about for2.com </p>
                           <p> Wow – what a great site! I love the creativity 
                               of it all. The forums are a great way to help members get 
                               to know each other indirectly, and to exchange ideas and views. 
                               The photo and poetry competitions are another brilliant 
                               idea, too - not just great fun but an 
                               excellent way to earn points to use on 
                               the site. Thanks everyone at for2!
                           </p>
                           <p>
                               KathleenK
                           </p>



                         
                    </div>
                    
                    
                    
                </div> <!-- end of about us -->
                
                <div class="more_info">
                    
                    <div class="side">
                        
                        <div class="follow_us_div">
                           
                            <div class="twitter">
                                 <p>
                                 Follow us <span> on Twitter</span>
                                 </p>
                                
                            </div>
                            <img src="<?php echo base_url(); ?>images/twitter_bird_icon.png"  width="40" height="52"/>
                            
                            <div class="facebook">
                               <p>Like us</p>
                               <p>on Facebook </p>
                               <div style="margin: 0em 0 0 0em;">
                               <!-- <iframe src="http://www.facebook.com/plugins
                                /like.php?href=http%3A%2F%2Fwww.example.com
                                &amp;layout=button_count&amp;show_faces=false
                                &amp;width=100&amp;action=like&amp;colorscheme=light
                                &amp;height=35">
                                </iframe> -->
                                </div>
                               
                               
                            </div>
                            
                            <p>
                                  <a href="">about 63 days ago </a>
                                  we were checking out
                           </p>
                           <p>
                                 Is the cougar here to stay? 
                                 <a href="">about 63 days ago </a>
                                   
                           </p>
                            
                        </div>
                        
                        
                        <div class="new_page">
                            <h2>
                                Visit our <a href=""> news page </a>
                            </h2>
                            <p>
                                Read and contribute to the latest
                                about <a href=""> everything dating related </a>
                            </p>
                        </div>                        
                    </div>
                    
                    <div class="real_people_info">
                        <h2>
                            A real site for real people
                        </h2>
                        
                        <p>
                            At <span>for2</span>, we work hard to ensure that everything we do 
                            is based on hard reality. No hype, no pretension,
                            no misrepresentation – just good, honest reality. 
                            That, we believe is the best way to help you find a good,
                            honest – and real – relationship. That’s easy to say of course, but 
                            what does it actually mean? Here are a few
                            specific aspects of for2 that 
                            lie behind our claim of being a “real” dating UK site.
                        </p>
                        <p>
                            Real people
                        </p>
                        <p>
                            One of the common marketing “techniques” used by some other sites is 
                            to allow you to register for free, then to flood your 
                            inbox with messages from (usually fake) potential 
                            partners. But, to see these partners, or read their
                            messages, you have to pay. This doesn’t happen at
                            for2. In fact, it can’t happen – we’ve designed
                            the site so that you can ALWAYS see your messages,
                            and ALWAYS reply to them for free. So you always
                            know the reality behind who’s contacting you.

                        </p>
                        
                        <p>
                            Real compatibility matching
                        </p>
                        <p>
                            Unlike many other dating sites, we won't make you 
                            spend hours answering questions so that we can match 
                            you with partners using a psychobabble-based “formula”.
                            Yes, we give you the benefit of a compatibility rating
                            with other members, but this is based on a few simple 
                            criteria that people commonly and consciously use to 
                            assess a partner, such as age, location, relationship 
                            status, smoking habits etc. It’s not perfect, but it
                            acts as a sensible, practical reality check on whether
                            the person you like the look of is actually right for you.

                       </p>
                       
                       <a href="#">
                           Read more…
                       </a>
                    </div>
                    
                    
                    
                </div>   <!-- end of more_info --> 
                
                <div class="footer_slogan">
                    <p>
                        Looking for the best dating sites UK…
                    </p>
                </div>
                <div class="footer_img">
                    
                </div>
                <footer>
                    <ul>
                        <li>
                            <a href="">Interesting links</a>
                        </li>
                         <li>
                            <a href="">Affiliates</a>
                        </li>
                         <li>
                            <a href="">Advertising</a>
                        </li>
                         <li>
                            <a href="">Privacy</a>
                        </li>
                         <li>
                            <a href="">Terms of use</a>
                        </li>
                         <li>
                            <a href="">FAQ</a>
                        </li>
                         <li>
                            <a href="">Tell us If something goes wrong</a>
                        </li>
                         <li>
                            <a href="">Site map</a>
                        </li>
                         <li>
                            <a href="">Contact Us</a>
                        </li>
                         <li>
                            <a href="">for2 2012</a>
                        </li>
                    </ul>
                    
                </footer>
                
            
            </div> <!-- end of section content  -->
            
        </section>
            
       
    </body>
    
</html>


