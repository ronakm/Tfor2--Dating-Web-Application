<?php include("/var/www/Codeigniter_ez/css/Session.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
        
<link rel="icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
<title>My Profile</title>
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

<!-- external java script files -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/accordian.js"></script> 
<script>
$(document).ready(function() {
   
$("#quick_search .content_search .age").click(function () {
       
        if ($('#quick_search_list').is(':hidden')) { 

                $("#quick_search_list").show(); 
        }else 
        {
        $("#quick_search_list").hide(); 
        }

    });
    
    $("#quick_search_list li").click(function () { 
        $('#quick_search .content_search .age').html($(this).text());
         $("#quick_search_list").hide(); 
    });
$("#quick_search .content_search .miles").click(function () {  

    if ($('#miles_list').is(':hidden')) { 

                $("#miles_list").show(); 
        }else 
        {
        $("#miles_list").hide(); 
        }

});
 $("#miles_list li").click(function () { 
        $('#quick_search .content_search .miles').html($(this).text());
         $("#miles_list").hide(); 
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
                    <a href="#" class="first_li current">
                       
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
                
                <p> <a href="">Home</a> > View profile</p>
                
                <a href="<?php echo base_url(); ?>auth/logout" class="logout"> Logout </a>
                
                
           </div> <!-- end of navigation -->
           
           <div class="profile_content">
               
           
               <div class="sidebar_profile">
                   
                   <div class="username"> <?php echo $username; ?> </div>
                   
                   <div class="profile_picture">
                       
                       <img src="<?php echo base_url(); ?>uploads/<?php echo $basic_info[0]->profile_img; ?>" width="175" height="175"> 
                       
                   </div>
                   
                   
                   <div class="option">
                       
                       <ul>
                         
                           <li>
                               <a href="" class="quick">Quickies</a>
                           </li>
                            <li>
                               <a href="<?php echo base_url(); ?>welcome/my_email/<?php echo $basic_info[0]->id; ?>" class="email">Emails (<?php echo $no_of_mails; ?>)</a>
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
                             <a href="<?php echo base_url(); ?>welcome/upload_img">
                                 <li class="photo">
                                 My Photos
                                 </li>
                             </a>


                             <a href="<?php echo base_url(); ?>welcome/own_words">
                                 <li class="own_words">
                                    In my own words
                                 </li>
                             </a>

                             <a href="<?php echo base_url(); ?>welcome/me_at_glance/<?php echo $basic_info[0]->id; ?>">
                                 <li class="at_glance">
                                     Me at a glance
                                 </li>
                             </a>

                             <a href="">
                                 <li class="perfect_match">
                                     My perfact match
                                 </li>
                             </a>

                      </ul>
                       
                  </div> <!-- end of profile_navigation -->
                  
                  <div id="person_info">
                   <?php 
                        $today = getdate();
                        $curr_month=$today['mon'];
                        $curr_year=$today['year'];

                        $dob=explode('-',$basic_info[0]->user_dob);

                        if($dob[1]<$curr_month)
                         {
                             $age=$curr_year-$dob[0];


                         }
                         else 
                         {
                             $age=$curr_year-$dob[0];
                             $age--;


                         }
                     ?>
                      <p>Age <?php echo $age ?></p>
                      <p>From <?php echo $basic_info[0]->city; ?></p>
                      
                      
                  </div>
                    
                   <div class="demo-show2" id="profile_accordian">
                       
                        <p><span>The basics </span><a href="#">View </a> </p>
                        <div id="basics_info">
                            
                            <ul>
                                <li>
                                    <span class="features">
                                      Height  
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['height_val']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         Body type
                                    </span>
                                    
                                    <span class="value">
                                        <?php echo $detail_info['bodytype_val']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Relationship status
                                    </span>
                                    
                                    <span class="value">
                                        
                                      <?php echo $detail_info['relation_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Ethnicity 
                                    </span>
                                    
                                    <span class="value">
                                        <?php echo $detail_info['ethnicity_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         <?php echo $detail_info['smoking_value']; ?>
                                    </span>
                                    
                                    <span class="value">
                                        Non-smoker
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Drink
                                    </span>
                                    
                                    <span class="value">
                                      <?php echo $detail_info['drink_value']; ?>
                                    </span>
                                </li>
                            </ul>
                            
                        </div>
                        <p><span>More facts 'n' figures</span><a href="#">View </a> </p>
                        
                        <div id="morefact">
                        
                               <ul>
                                <li>
                                    <span class="features">
                                      Children  
                                    </span>
                                    
                                    <span class="value">
                                       <?php echo $detail_info['children_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                          Education
                                    </span>
                                    
                                    <span class="value">
                                       <?php echo $detail_info['education_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Occupation
                                    </span>
                                      
                                    <span class="value">
                                       <?php echo $detail_info['occupation_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         Diet 
                                    </span>
                                    
                                    <span class="value">
                                        <?php echo $detail_info['diet_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         Eye colour
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['eye_color_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Hair colour
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['hair_color_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         Religious views
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['religious_views_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                       First language
                                    </span>
                                    
                                    <span class="value">
                                       <?php echo $detail_info['first_lang_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Other languages
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['other_lang_value']; ?>
                                        
                                    </span>
                                </li>
                            </ul>   
                        
                        </div>
                        
                        
                        <p><span>The real detail</span><a href="#">View </a> </p>
                        <div id="real_details">
                            
                            <ul>
                                <li>
                                    <span class="features">
                                      Animals  
                                    </span>
                                    
                                    <span class="value">
                                            <?php echo $detail_info['animals_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         Music
                                    </span>
                                    
                                    <span class="value">
                                        <?php echo $detail_info['music_value']; ?>
                                     
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Body art
                                    </span>
                                    
                                    <span class="value">
                                       <?php echo $detail_info['body_art_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         Favourite colour 
                                    </span>
                                    
                                    <span class="value">
                                          <?php echo $detail_info['fvrtcolor_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        On a date
                                    </span>
                                    
                                    <span class="value">
                                        <?php echo $detail_info['date_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                       Ideal home
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['home_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                         Fashion sense
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['fashion_sense_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                       Intelligence
                                    </span>
                                    
                                    <span class="value">
                                         <?php echo $detail_info['intelligence_sense_value']; ?>
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="features">
                                        Values
                                    </span>
                                    
                                    <span class="value">
                                            <?php echo $detail_info['mas_value_value']; ?>
                                    </span>
                                </li>
                                
                                  <li>
                                    <span class="features">
                                        TV and you
                                    </span>
                                    
                                    <span class="value">
                                          <?php echo $detail_info['tv_value']; ?>
                                    </span>
                                </li>
                                
                                  <li>
                                    <span class="features">
                                        Reading habits
                                    </span>
                                    
                                    <span class="value">
                                        <?php echo $detail_info['reading_value']; ?>
                                    </span>
                                </li>
                                
                                  <li>
                                    <span class="features">
                                        The cinema
                                    </span>
                                    
                                    <span class="value">
                                        <?php echo $detail_info['cinema_value']; ?>
                                    </span>
                                 </li>
                                
                                  <li>
                                    <span class="features">
                                        Movie tastes
                                    </span>
                                    
                                    <span class="value">
                                           <?php echo $detail_info['movie_value']; ?>
                                    </span>
                                 </li>
                                
                                  <li>
                                    <span class="features">
                                        Leisure time
                                    </span>
                                    
                                    <span class="value">
                                          <?php echo $detail_info['leisure_value']; ?>   
                                    </span>
                                 </li>
                            </ul>  
                            
                            
                        </div>
              
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
                           <span class="age">18 - 24</span>
                           <ul id="quick_search_list">
                                   <li>18 - 24</li>
                                   <li>25 - 35</li>
                                   <li>36 - 45</li>
                                   <li>46 - 60</li>
                               </ul>
                           
                           <span class="location_label"> Location (Postcode)</span> 
                           <input type="text" />      
                           
                           
                           <span class="miles_label">Within (miles)</span> 
                           <span class="miles">20</span>
                           <ul id="miles_list">
                                   <li>20</li>
                                   <li>30</li>
                                   <li>40</li>
                                   <li>50</li>
                          </ul>
                           
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
                           Send a virtual gift to <?php echo $username; ?> 
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

