<?php include("/var/www/Codeigniter_ez/css/Session.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
        
<link rel="icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
<title>Sent emails</title>
<meta charset="UTF-8" />
<meta name="discription" content="Dating Site">
<meta name="Author" content="AGS">
<meta name="keywords" contents="HTML 5,PHP,Codeigniter">

<!-- external css files -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/my_profile.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/me_at_glance.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/my_mail.css" />

<!-- external java script files -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/accordian.js"></script> 
<script>

$(document).ready(function() {

    $("#receiver_mail_body .receive_mail .options .view_text").click(function() 
    { var temp=this;
          if ($(temp).next('.click_here').is(':hidden'))
         {
            
              $(temp).next('.click_here').show();
              $(temp).html("Close");
         }
         else
         {
             $(temp).next('.click_here').hide();
              $(temp).html("Click here to view message");
            
         }
        
        
        
       
    });
});
</script>


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
            
        </header> <!-- end of header -->
        
        <section>
            
            <div class="navigation">
            
                <ul>
                    <li>
                    <a href="<?php echo base_url(); ?>welcome/index" class="first_li">
                       
                        My home
                        
                    </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url(); ?>welcome/search" class="second_li">
                            Search profiles
                        </a>
                    </li>
                    
                    <li >
                        <a href="<?php echo base_url(); ?>welcome/my_email/<?php echo $basic_info[0]->id; ?>" class="email_li current">
                            My emails
                        </a>
                   </li>
                   
                    <li>
                        <a href="" class="fav_li">
                            My favourites
                        </a>
                    </li>
                    
                    <li>
                    <a href="" class="profile_li">
                    My profile
                    </a>
                    </li>
                    
                    <li>
                        <a href="" class="account_li">
                            My account
                        </a>
                    </li>
                    
                    <li>
                        <a href="" class="forum_li">
                          Forums
                        </a>
                    </li>
                    
                   <li>
                        <a href="" class="blank_li">
                       </a>
                   </li>
                    <li >
                        <a href="" class="news_li">
                            News
                        </a>

                    </li>
                   
                </ul>
                
                <p> <a href="<?php echo base_url(); ?>welcome/index">Home</a> > Sent mails</p>
                
                <a href="<?php echo base_url(); ?>auth/logout" class="logout"> Logout </a>
                
                
           </div> <!-- end of navigation -->
           
           <div class="profile_content">
               
           
               <div class="sidebar_profile">
                   
                   <div class="username"><?php echo $basic_info[0]->username; ?></div>
                   
                   <div class="profile_picture">
                       
                       <img src="<?php echo base_url(); ?>uploads/<?php echo $basic_info[0]->profile_img; ?>" width="175" height="175"> 
                       
                   </div>
                   
                   
                  <div class="option">
                       
                       <ul>
                         
                           <li>
                               <a href="" class="quick">Quickies</a>
                           </li>
                            
                            <li>
                               <a href="" class="say_hi">Who's said hi</a>
                           </li>
                            <li>
                               <a href="" class="fav">I'm their favourite </a>
                           </li>
                            
                           
                       </ul>
                       
                   </div> <!-- end of option div -->
                   
                   <div class="dairy">
                       
                       <div>
                            Their diary
                       </div>
                       
                       <div>
                           No diary entry
                        </div>
                       
                   </div>
                   
                   
                   
               </div> <!-- sidebar profile -->
               
               
               <div class="main_profile_content">
                   
                   <div id="profile_navigation">
                       
                        <ul>
                             <a href="<?php echo base_url(); ?>welcome/my_email/<?php echo $basic_info[0]->id; ?>">
                                 <li class="photo" id="receive">
                                    Received messages
                                 </li>
                             </a>


                             <a href="<?php echo base_url(); ?>welcome/my_sent_mails">
                                 <li class="own_words current" id="sent">
                                    Sent messages
                                 </li>
                             </a>

                             <a href="<?php echo base_url(); ?>welcome/my_deletemails">
                                 <li class="at_glance" id="delete">
                                    Deleted messages
                                 </li>
                             </a>

                             

                      </ul>
                       
                  </div> <!-- end of profile_navigation -->
                 
                  <div id="receiver_mail_body"> 
                  
                   <?php  if(empty($mail_info)) { ?>
                      
                      <div class="receive_mail">
                          
                           <p>No sent mail for you.</p>
                          
                      </div>
                      
                   <?php } else { ?>
                      
                   <?php foreach($mail_info as $result) { ?>
                   
                      
                    <div class="receive_mail">
                       
                        <p>Subject:<span><?php echo $result->subject; ?></span></p>
                        
                        <p>To:<span><?php echo $result->receiver_id; ?></span></p>
                        
                        <div class="options">
                               <div class="view_text">
                                   
                                   Click here to view message
                                   <span class="msg_id" style="visibility: hidden"><?php echo $result->mail_id; ?></span>
                               
                              
                              </div>
                                 
                                 <div class="click_here"> 
                                   
                                   <div class="message_div">
                                       <?php echo $result->message; ?>
                                   </div>
                                     
                                 </div>
                               
                         </div>
                        
                    </div> 
                      
                      
                  <?php }
                  
                  } ?>
                  </div>
                  
                 
               
                   
               </div>  <!-- end of main_profile_content -->
               
               <div class="rightbar_profile">
                
                   <div id="my_point">
                       
                       <div class="heading">
                           My for2 points
                       </div>
                       
                       <div class="point_content">
                           
                           <ul>
                                <li>0 points added</li>
                                <li>0 points spent</li>

                                <li class="links"><a href="">Get points</a></li>
                                <li class="links"><a href="">About points</a></li>
                           </ul>
                               
                           <div class="point_img">
                               
                               <p>0</p>
                               <img src="<?php echo base_url(); ?>images/for2_small.png" alt="not found" />
                               <p>points</p>
                               
                               
                           </div>
                       
                       </div>
                       
                   </div> <!-- end of my_point -->
                   
                   <a id="ultimate" href="#">
                       
                       <div class="text">
                           <p>Want unlimited use?<span>Get it here</span>
                       </div>
                       
                       <div class="go">
                          <p> Go </p>
                       </div>
                   </a>
                   
                   <div id="quick_search">
                       
                       <div class="heading">
                           Quick search
                           <img src="<?php echo base_url(); ?>images/magnifying_glass.png" width="23" height="22" alt="notfound" />
                       </div>
                       
                       <div class="content_search">
                        
                           <span class="age_label">Age</span> 
                           <span class="age">18 - 24
                               
                           </span>
                           
                           <span class="location_label"> Location (Postcode)</span> 
                           <input type="text" />      
                           
                           
                           <span class="miles_label">Within (miles)</span> 
                           <span class="miles">20                               
                           </span>
                           
                           <div class="chech">
                           <input type="checkbox" value="True" />
                           <span class="checkbox_label">Photo only</span>
                           
                           </div>
                           <span class="search_button">Search</span>
                       </div>
                       
                       
                   </div> <!-- end of quick search -->
                   
                   <div id="express_div">
                       
                       <div class="heading">
                           Express yourself
                       </div>
                       
                       <div class="content">
                           
                           <div class="left">
                               <a href="#">Discussion board</a>
                               <p>
                                   Exchange news <br/>
                                   & views in our 8<br/>
                                   great new forums
                               </p>
                           </div>
                           <img src="<?php echo base_url(); ?>images/forums_thumbnail.jpeg" alt="not found">
                           
                       </div>
                       
                   </div> <!-- end of express -->
                   
                   <div id="send_gift">
                        <div class="heading">
                           Send a virtual gift to <?php echo $basic_info[0]->username; ?>
                       </div>
                       <div class="content">
                           <ul>
                               <li>
                                   <a href="">
                                       <img src="<?php echo base_url(); ?>images/gift1.png" height="64" width="64" />
                                       <span>Love at first sight</span>
                                   </a>
                               </li>
                               
                               <li>
                                   <a href="">
                                       <img src="<?php echo base_url(); ?>images/gift2.png" height="64" width="64" />
                                       <span>Kiss</span>
                                   </a>
                               </li>
                               
                               <li>
                                   <a href="">
                                       <img src="<?php echo base_url(); ?>images/gift3.png" height="64" width="64" />
                                       <span>Let's celebrate</span>
                                   </a>
                               </li>
                               
                               <li>
                                   <a href="">
                                       <img src="<?php echo base_url(); ?>images/gift1.png" height="64" width="64" />
                                       <span>Surprise</span>
                                   </a>
                               </li>
                               
                               <li>
                                   <a href="">
                                       <img src="<?php echo base_url(); ?>images/gift1.png" height="64" width="64" />
                                       <span>One red rose</span>
                                   </a>
                               </li>
                               
                               <li>
                                   <a href="">
                                       <img src="<?php echo base_url(); ?>images/gift1.png" height="64" width="64" />
                                       <span>Very sweet</span>
                                   </a>
                               </li>
                           </ul>
                       </div>
                       
                   </div> <!--end of send_gift -->
                   
                   
                   
               </div> <!-- end of right bar_profile -->              
           </div>
            
        </section>  <!-- end of section -->
        
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
            
            
        </footer> <!-- end of footer -->
        
        
    </div> <!-- end of container -->
    
    
</body>

</html>

