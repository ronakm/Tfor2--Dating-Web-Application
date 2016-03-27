<?php include("/var/www/Codeigniter_ez/css/Session.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
        
<link rel="icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
<title>Others photo</title>
<meta charset="UTF-8" />
<meta name="discription" content="Dating Site">
<meta name="Author" content="AGS">
<meta name="keywords" contents="HTML 5,PHP,Codeigniter">
<style type="text/css" media="screen">
		/*
			Load CSS before JavaScript
		*/
		
		/*
			Slides container
			Important:
			Set the width of your slides container
			Set to display none, prevents content flash
		*/
                #search_form #slides 
                {
                    float:left;
                }
                #search_form #slides ul {
                    float:left;
                    clear:left;
                    
                    margin-left:28%;
                    width:70%;
                }
                 #search_form #slides ul li a
                 {
                     float:left;
                     display: inline;
                     margin:0px;
                 }
                 #search_form #slides a {
                     margin-top:20px;
                 }
                 #search_form #slides .prev  
                 {
                     margin-left: 34%;
                 }
                 #search_form #slides .next {
                     margin-left: 10px;
                 }
		#search_form #slides .slides_container {
                        float:left;
			width:470px;
                        height:200px;
			
		}

		/*
			Each slide
			Important:
			Set the width of your slides
			If height not specified height will be set by the slide content
			Set to display block
		*/
		#search_form .slides_container div {
                        float:left;
			width:470px;
			
			display:block;
		}
                #search_form .slides_container div div 
                {
                   float:left; 
                }
                #search_form .slides_container div div p 
                {
                    float:left;
                }
                #search_form .slides_container div div p img 
                {
                    float:left;
                }
		
		/*
			Optional:
			Reset list default style
		*/
		.pagination {
			list-style:none;
			margin:0;
			padding:0;
                        
		}
                .pagination li 
                {
                    display:inline;
                }
		/*
			Optional:
			Show the current slide in the pagination
		*/
		.pagination .current a {
			color:red;
		}
	</style>
	
<!-- external css files -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>css/upload_img.css" />
<!-- external java script files -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/accordian.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/slides.min.jquery.js"></script> 
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true
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
                    <a href="<?php echo base_url(); ?>welcome/index" class="first_li current">
                       
                        My home
                        
                    </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url(); ?>welcome/search" class="second_li">
                            Search profiles
                        </a>
                    </li>
                    
                    <li >
                        <a href="<?php echo base_url(); ?>welcome/my_email/<?php echo $basic_info[0]->id; ?>" class="email_li">
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
                
                <p> <a href="<?php echo base_url(); ?>welcome/index">Home</a> </p>
                
                <a href="<?php echo base_url(); ?>auth/logout" class="logout"> Logout </a>
                
                
           </div> <!-- end of navigation -->
           
           <div class="profile_content">
               
           
               <div class="sidebar_profile">
                   
                   <div class="username"><?php echo $basic_info[0]->username; ?> </div>
                   
                   <div class="profile_picture">
                       
                       <img src="<?php echo base_url(); ?>uploads/<?php echo $basic_info[0]->profile_img; ?>" height="175" width="175"> 
                       
                   </div>
                   
                   
                   <div class="option">
                       
                       <ul>
                         
                           <li>
                               <a href="" class="quick">Quickies</a>
                           </li>
                            <li>
                               <a href="<?php echo base_url(); ?>welcome/send_email/<?php echo $basic_info[0]->id; ?>" class="email"><?php if($basic_info[0]->gender=="male") { ?>
                                  Email Him 
                                <?php } else { ?>                                    
                                  Email Her
                                <?php } ?></a>
                           </li>
                            <li>
                               <a href="" class="say_hi">Say hi to him</a>
                           </li>
                            <li>
                               <a href="" class="fav">Add him to my favourites </a>
                           </li>
                            <li>
                               <a href="" class="my_friend">Add him to my friends</a>
                           </li>
                            <li>
                               <a href="" class="search">Block from searches</a>
                           </li>
                            <li>
                               <a href="" class="report">Report a concern</a>
                           </li>
                           
                       </ul>
                       
                   </div> <!-- end of option div -->
                   
                   <div class="dairy">
                       
                       <div>
                            Their dairy
                       </div>
                       
                       <div>
                           No dairy entry
                        </div>
                       
                   </div>
                   
                   
                   
               </div> <!-- sidebar profile -->
               
               
               <div class="main_profile_content">
                   
                   <div id="profile_navigation">
                       
                        <ul>
                             <a href="#">
                                 <li class="photo current">
                                <?php if($basic_info[0]->gender=="male") { ?>
                                  His photo
                                <?php } else { ?>                                    
                                   Her photo
                                <?php } ?>
                                 </li>
                             </a>


                             <a href="<?php echo base_url(); ?>welcome/others_own_words/<?php echo $basic_info[0]->id; ?>">
                                 <li class="own_words">
                                  <?php if($basic_info[0]->gender=="male") { ?>
                                  In his own words
                                <?php } else { ?>                                    
                                   In her own words
                                <?php } ?>
                                    
                                 </li>
                             </a>

                             <a href="<?php echo base_url(); ?>welcome/goto_profile/<?php echo $basic_info[0]->id; ?>">
                                 <li class="at_glance">
                                 <?php if($basic_info[0]->gender=="male") { ?>
                                   His at a glance
                                <?php } else { ?>                                    
                                    Her at a glance
                                <?php } ?>
                                    
                                 </li>
                             </a>

                             <a href="">
                                 <li class="perfect_match">
                                 <?php if($basic_info[0]->gender=="male") { ?>
                                   His perfact match
                                <?php } else { ?>                                    
                                    Her perfact match
                                <?php } ?>
                                     
                                 </li>
                             </a>

                      </ul>
                       
                  </div> <!-- end of profile_navigation -->
                   <div id="search_heading" class="img_heading">
                     
                       <?php if($basic_info[0]->gender=="male") { ?>
                                  His Profile Picture
                                <?php } else { ?>                                    
                                   Her Profile Picture
                                <?php } ?>
                       
                   </div>
                  
                  <?php
                  $img_gal=$basic_info[0]->profile_gallery;
                  $img_gal_array=  explode(',', $img_gal);
                  $count=count($img_gal_array);
                  
                  ?>
                   <div id="search_form">
                   
                    <?php if($img_gal=='') { ?> 
                     This User have not uploaded any picture. 
                    <?php } else { ?>
                    <div id="slides">
                        <div class="slides_container">

                             <?php foreach($img_gal_array as $result) { ?>
                            <div>

                                    <p><img src="<?php echo base_url();?>uploads/<?php echo $result ?>" width="200" height="1000"></p>
                            </div>

                             <?php }  ?> 


                        </div>
                    </div>
                    <?php } ?>
                          
                       
               
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
                           Send a virtual gift to <?php echo $basic_info[0]->username;?>
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

