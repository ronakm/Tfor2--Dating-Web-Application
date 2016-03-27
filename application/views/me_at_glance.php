<?php include("/var/www/Codeigniter_ez/css/Session.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
        
<link rel="icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
<title>Me at Glance</title>
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

<!-- external java script files -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/accordian_glance.js"></script> 


<script type="text/javascript">
$(document).ready(function() {
 
    $("#height .features").click(function() 
    {
        
        
        if ($('#height .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#height .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#height .options").hide();
        }
       
    });
    
    $("#height .value").click(function() 
    {
        
        if ($('#height .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#height .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#height .options").hide();
        }
        
    });
    
    $("#height div .height_radio").change(function () {
       
         var selValue = $('input[name=height]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#height .height_own_words").show();
              $("#height .options").show();
              $("#height_value").html("in my own words");
         }
         
         else
         {
         
            $("#height_value").html(selValue);
            $("#height .height_own_words").hide();
            $("#height .options").show();
            
           
          var id_height= $('input[name=height]:checked', '#height .options').attr('id');
         
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/height_ajax/',
            type:'POST',
            data:{'id_height':id_height},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#height .options").hide();
         }
          
   });
    $("#height .height_own_words textarea").val('');
    $("#height .height_own_words p").click(function() {
        
         var height_own_words=$("#height .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#height .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
         $("#height_value").html(height_own_words);
         $("#height .height_own_words").hide();
         var temp=$("#height_value").val();
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/height_ajax/',
            type:'POST',
            data:{'id_height':height_own_words},
            dataType: 'json',
            success: function(output_string){
                
                
                } 
            
            });
         
         $("#height .options").hide();
          
    });
    
  /* ............body ............... */  
    
    $("#body_type .features").click(function() 
    {
        
        
        if ($('#body_type .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#body_type .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#body_type .options").hide();
        }
       
    });
    
    $("#body_type .value").click(function() 
    {
        
        if ($('#body_type .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#body_type .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#body_type .options").hide();
        }
        
    });
    
    $("#body_type div .height_radio").change(function () {
       
         var selValue = $('input[name=body_type]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#body_type .height_own_words").show();
              $("#body_type .options").show();
              $("#body_value").html("in my own words");
         }
         
         else
         {
         
            $("#body_value").html(selValue);
            $("#body_type .height_own_words").hide();
            $("#body_type .options").show();
            
           
          var id_body= $('input[name=body_type]:checked', '#body_type .options').attr('id');
         
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/body_ajax/',
            type:'POST',
            data:{'id_height':id_body},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#body_type .options").hide();
         }
   });
   
   
   $("#body_type .height_own_words textarea").val('');
    $("#body_type .height_own_words p").click(function() {
        
        var height_own_words=$("#body_type .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#body_type .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var body_own_words=$("#body_type .height_own_words textarea").val(); 
         $("#body_value").html(body_own_words);
         $("#body_type .height_own_words").hide();
        
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/body_ajax/',
            type:'POST',
            data:{'id_height':body_own_words},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
         $("#body_type .options").hide();  
    });
    
    
 /* ...............relation...................... */
 
  $("#relation .features").click(function() 
    {
        
        
        if ($('#relation .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#relation .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#relation .options").hide();
        }
       
    });
    
    $("#relation .value").click(function() 
    {
        
        if ($('#relation .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#relation .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#relation .options").hide();
        }
        
    });
    
    $("#relation div .height_radio").change(function () {
       
         var selValue = $('input[name=relation]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#relation .height_own_words").show();
              $("#relation .options").show();
              $("#relation_value").html("in my own words");
         }
         
         else
         {
         
            $("#relation_value").html(selValue);
            $("#relation .height_own_words").hide();
            $("#relation .options").show();
            
           
          var id_relation= $('input[name=relation]:checked', '#relation .options').attr('id');
         
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/relation_ajax/',
            type:'POST',
            data:{'id_height':id_relation},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
            $("#relation .options").hide(); 
         }
   });
    $("#relation .height_own_words textarea").val('');
    $("#relation .height_own_words p").click(function() {
        var height_own_words=$("#relation .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#relation .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var relation_own_words=$("#relation .height_own_words textarea").val(); 
         $("#relation_value").html(relation_own_words);
         $("#relation .height_own_words").hide();
        
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/relation_ajax/',
            type:'POST',
            data:{'id_height':relation_own_words},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#relation .options").hide(); 
    });
    
 
 /*....................ethnicity ........................... */
 
 $("#ethnicity .features").click(function() 
    {
        
        
        if ($('#ethnicity .options').is(':hidden'))
        { 
                $('#profile_accordian  ul li .options').hide();
                $("#ethnicity .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#ethnicity .options").hide();
        }
       
    });
    
    $("#ethnicity .value").click(function() 
    {
        
        if ($('#ethnicity .options').is(':hidden'))
        { 
                $('#profile_accordian  ul li .options').hide();
               $("#ethnicity .options").show();
        }
        else
        {
          $('#profile_accordian  ul li .options').hide();
          $("#ethnicity .options").hide();
        }
        
    });
    
    $("#ethnicity div .height_radio").change(function () {
       
         var selValue = $('input[name=ethnicity]:checked').val(); 
        
         if(selValue=="own_words"){
             
              $("#ethnicity .height_own_words").show();
              $("#ethnicity .options").show();
              $("#ethnicity_value").html("in my own words");
         }
         
         else
         {
         
            $("#ethnicity_value").html(selValue);
            $("#ethnicity .height_own_words").hide();
            $("#ethnicity .options").show();
            
           
          var id_ethnicity= $('input[name=ethnicity]:checked', '#ethnicity .options').attr('id');
         
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/ethnicity_ajax/',
            type:'POST',
            data:{'id_height':id_ethnicity},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
           $("#ethnicity .options").hide();   
         }
   });
   $("#ethnicity .height_own_words textarea").val('');
    $("#ethnicity .height_own_words p").click(function() {
        var height_own_words=$("#ethnicity .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#ethnicity .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var ethnicity_own_words=$("#ethnicity .height_own_words textarea").val(); 
         $("#ethnicity_value").html(ethnicity_own_words);
         $("#ethnicity .height_own_words").hide();
        
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/ethnicity_ajax/',
            type:'POST',
            data:{'id_height':ethnicity_own_words},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#ethnicity .options").hide();   
    });
    
 
 /* .......................... drink....................*/
 $("#drink .features").click(function() 
    {
        
        
        if ($('#drink .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#drink .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#drink .options").hide();
        }
       
    });
    
    $("#drink .value").click(function() 
    {
        
        if ($('#drink .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#drink .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#drink .options").hide();
        }
        
    });
    
    $("#drink div .height_radio").change(function () {
       
         var selValue = $('input[name=drink]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#drink .height_own_words").show();
              $("#drink .options").show();
              $("#drink_value").html("in my own words");
         }
         
         else
         {
         
            $("#drink_value").html(selValue);
            $("#drink .height_own_words").hide();
            $("#drink .options").show();
            
           
          var id_drink= $('input[name=drink]:checked', '#drink .options').attr('id');
         
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/drink_ajax/',
            type:'POST',
            data:{'id_height':id_drink},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#drink .options").hide();   
         }
   });
    $("#drink .height_own_words textarea").val('');
    $("#drink .height_own_words p").click(function() {
        
        var height_own_words=$("#drink .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#drink .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var drink_own_words=$("#drink .height_own_words textarea").val(); 
         $("#drink_value").html(drink_own_words);
         $("#drink .height_own_words").hide();
        
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/drink_ajax/',
            type:'POST',
            data:{'id_height':drink_own_words},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
          $("#drink .options").hide();  
    });
    
 /* ......................smoking ................... */
 
 $("#smoking .features").click(function() 
    {
        
        
        if ($('#smoking .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#smoking .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#smoking .options").hide();
        }
       
    });
    
    $("#smoking .value").click(function() 
    {
        
        if ($('#smoking .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#smoking .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#smoking .options").hide();
        }
        
    });
    
    $("#smoking div .height_radio").change(function () {
       
         var selValue = $('input[name=smoking]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#smoking .height_own_words").show();
              $("#smoking .options").show();
              $("#smoking_value").html("in my own words");
         }
         
         else
         {
         
            $("#smoking_value").html(selValue);
            $("#smoking .height_own_words").hide();
            $("#smoking .options").show();
            
           
          var id_smoking= $('input[name=smoking]:checked', '#smoking .options').attr('id');
         
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/smoking_ajax/',
            type:'POST',
            data:{'id_height':id_smoking},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
           $("#smoking .options").hide();   
         }
   });
    $("#smoking .height_own_words textarea").val('');
    $("#smoking .height_own_words p").click(function() {
        var height_own_words=$("#smoking .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#smoking .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var smoking_own_words=$("#smoking .height_own_words textarea").val(); 
         $("#smoking_value").html(smoking_own_words);
         $("#smoking .height_own_words").hide();
        
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/smoking_ajax/',
            type:'POST',
            data:{'id_height':smoking_own_words},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#smoking .options").hide();  
    });
   
   
   /* .................... children .............. */
   
   $("#children .features").click(function() 
    {
        
        
        if ($('#children .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#children .options").show();
        }
        else
        {
          $('#profile_accordian  ul li .options').hide();
          $("#children .options").hide();
        }
       
    });
    
    $("#children .value").click(function() 
    {
        
        if ($('#children .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#children .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#children .options").hide();
        }
        
    });
   
    $("#children div .height_radio").change(function () {
       
       
       
         var selValue = $('input[name=children]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#children .height_own_words").show();
              $("#children .options").show();
              $("#children_value").html("in my own words");
         }
         
         else
         {
         
            $("#children_value").html(selValue);
            $("#children .height_own_words").hide();
            $("#children .options").show();
            
           
          var id_children= $('input[name=children]:checked', '#children .options').attr('id');
         
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/children_ajax/',
            type:'POST',
            data:{'id_height':id_children},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
            $("#children .options").hide();   
         }
   });
    $("#children .height_own_words textarea").val('');
    $("#children .height_own_words p").click(function() {
        
         var height_own_words=$("#children .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#children .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
         var children_own_words=$("#children .height_own_words textarea").val(); 
         $("#children_value").html(children_own_words);
         $("#children .height_own_words").hide();
        
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/children_ajax/',
            type:'POST',
            data:{'id_height':children_own_words},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#children .options").hide();   
    });
  /* .....................education ..................*/
$("#education .features").click(function() 
    {
        
        
        if ($('#education .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#education .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#education .options").hide();
        }
       
    });
    
    $("#education .value").click(function() 
    {
        
        if ($('#education .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#education .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#education .options").hide();
        }
        
    });
    
    $("#education div .height_radio").change(function () {
       
         var selValue = $('input[name=education]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#education .height_own_words").show();
              $("#education .options").show();
              $("#education_value").html("in my own words");
         }
         
         else
         {
         
            $("#education_value").html(selValue);
            $("#education .height_own_words").hide();
            $("#education .options").show();
            
           
          var id_education= $('input[name=education]:checked', '#education .options').attr('id');
          var column_name="education";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_education,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#education .options").hide();   
         }
   });
    $("#education .height_own_words textarea").val('');

    $("#education .height_own_words p").click(function() {
        
         var height_own_words=$("#education .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#education .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
         var education_own_words=$("#education .height_own_words textarea").val(); 
         $("#education_value").html(education_own_words);
         $("#education .height_own_words").hide();
        
        var column_name="education";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':education_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
         $("#education .options").hide();     
    });
      
    
    /* ...................... occumption ............... */
    
    $("#occupation .features").click(function() 
    {
        
        
        if ($('#occupation .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#occupation .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#occupation .options").hide();
        }
       
    });
    
    $("#occupation .value").click(function() 
    {
        
        if ($('#occupation .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#occupation .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#occupation .options").hide();
        }
        
    });
    
    $("#occupation div .height_radio").change(function () {
       
         var selValue = $('input[name=occupation]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#occupation .height_own_words").show();
              $("#occupation .options").show();
              $("#occupation_value").html("in my own words");
         }
         
         else
         {
         
            $("#occupation_value").html(selValue);
            $("#occupation .height_own_words").hide();
            $("#occupation .options").show();
            
           
          var id_occupation= $('input[name=occupation]:checked', '#occupation .options').attr('id');
          var column_name="occupation";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_occupation,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
            $("#occupation .options").hide(); 
         }
   });
    $("#occupation .height_own_words textarea").val('');
    $("#occupation .height_own_words p").click(function() {
         var height_own_words=$("#occupation .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#occupation .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var occupation_own_words=$("#occupation .height_own_words textarea").val(); 
         $("#occupation_value").html(occupation_own_words);
         $("#occupation .height_own_words").hide();
        
        var column_name="occupation";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':occupation_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#occupation .options").hide();  
    });
    
  /* ............ diet ............ */
  
  $("#diet .features").click(function() 
    {
        
        
        if ($('#diet .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#diet .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#diet .options").hide();
        }
       
    });
    
    $("#diet .value").click(function() 
    {
        
        if ($('#diet .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#diet .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
             $("#diet .options").hide();
        }
        
    });
    
    $("#diet div .height_radio").change(function () {
       
         var selValue = $('input[name=diet]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#diet .height_own_words").show();
              $("#diet .options").show();
              $("#diet_value").html("in my own words");
         }
         
         else
         {
         
            $("#diet_value").html(selValue);
            $("#diet .height_own_words").hide();
            $("#diet .options").show();
            
           
          var id_diet= $('input[name=diet]:checked', '#diet .options').attr('id');
          var column_name="mas_diet";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_diet,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#diet .options").hide();  
         }
   });
     $("#diet .height_own_words textarea").val('');
    $("#diet .height_own_words p").click(function() {
        var height_own_words=$("#diet .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#diet .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var diet_own_words=$("#diet .height_own_words textarea").val(); 
         $("#diet_value").html(diet_own_words);
         $("#diet .height_own_words").hide();
        
        var column_name="mas_diet ";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':diet_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
              $("#diet .options").hide();  
    });
      
/* ...............  eye color .............. */
$("#eye_color .features").click(function() 
    {
        
        
        if ($('#eye_color .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#eye_color .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#eye_color .options").hide();
        }
       
    });
    
    $("#eye_color .value").click(function() 
    {
        
        if ($('#eye_color .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#eye_color .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#eye_color .options").hide();
        }
        
    });
    
    $("#eye_color div .height_radio").change(function () {
       
         var selValue = $('input[name=eye]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#eye_color .height_own_words").show();
              $("#eye_color .options").show();
              $("#eye_color_value").html("in my own words");
         }
         
         else
         {
         
            $("#eye_color_value").html(selValue);
            $("#eye_color .height_own_words").hide();
            $("#eye_color .options").show();
            
           
          var id_eye_color= $('input[name=eye]:checked', '#eye_color .options').attr('id');
          var column_name="eye_color";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_eye_color,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
                $("#eye_color .options").hide();  
         }
   });
    $("#eye_color .height_own_words textarea").val('');
    $("#eye_color .height_own_words p").click(function() {
        
         var height_own_words=$("#eye_color .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#eye_color .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
         var eye_color_own_words=$("#eye_color .height_own_words textarea").val(); 
         $("#eye_color_value").html(eye_color_own_words);
         $("#eye_color .height_own_words").hide();
        
        var column_name="eye_color";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':eye_color_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
          $("#eye_color .options").hide();   
    });
      
/* ............ hair color .......... */
$("#hair_color .features").click(function() 
    {
        
        
        if ($('#hair_color .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#hair_color .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#hair_color .options").hide();
        }
       
    });
    
    $("#hair_color .value").click(function() 
    {
        
        if ($('#hair_color .options').is(':hidden'))
        { 
           $('#profile_accordian  ul li .options').hide();
          $("#hair_color .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#hair_color .options").hide();
        }
        
    });
    
    $("#hair_color div .height_radio").change(function () {
       
         var selValue = $('input[name=hair_color]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#hair_color .height_own_words").show();
              $("#hair_color .options").show();
              $("#hair_color_value").html("in my own words");
         }
         
         else
         {
         
            $("#hair_color_value").html(selValue);
            $("#hair_color .height_own_words").hide();
            $("#hair_color .options").show();
            
           
          var id_hair_color= $('input[name=hair_color]:checked', '#hair_color .options').attr('id');
          var column_name="hair_color";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_hair_color,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
            $("#hair_color .options").hide();   
         }
   });
    $("#hair_color .height_own_words textarea").val('');
    $("#hair_color .height_own_words p").click(function() {
         
         var height_own_words=$("#hair_color .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#hair_color .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var hair_color_own_words=$("#hair_color .height_own_words textarea").val(); 
         $("#hair_color_value").html(hair_color_own_words);
         $("#hair_color .height_own_words").hide();
        
        var column_name="hair_color";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':hair_color_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#hair_color .options").hide();    
    });
      
    
  /* .......................religious ............. */
$("#religious .features").click(function() 
    {
        
        
        if ($('#religious .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#religious .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#religious .options").hide();
        }
       
    });
    
    $("#religious .value").click(function() 
    {
        
        if ($('#religious .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#religious .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#religious .options").hide();
        }
        
    });
    
    $("#religious div .height_radio").change(function () {
       
         var selValue = $('input[name=religious]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#religious .height_own_words").show();
              $("#religious .options").show();
              $("#religious_value").html("in my own words");
         }
         
         else
         {
         
            $("#religious_value").html(selValue);
            $("#religious .height_own_words").hide();
            $("#religious .options").show();
            
           
          var id_religious= $('input[name=religious]:checked', '#religious .options').attr('id');
          var column_name="religious_views";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_religious,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
              $("#religious .options").hide();   
         }
   });
     $("#religious .height_own_words textarea").val('');
    $("#religious .height_own_words p").click(function() {
        var height_own_words=$("#religious .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#religious .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var religious_own_words=$("#religious .height_own_words textarea").val(); 
         $("#religious_value").html(religious_own_words);
         $("#religious .height_own_words").hide();
        
        var column_name="religious_views 	";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':religious_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
          $("#religious .options").hide();    
    });
       
       /* ................ first language ............. */
       $("#first_language .features").click(function() 
    {
        
        
        if ($('#first_language .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
           $("#first_language .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#first_language .options").hide();
        }
       
    });
    
    $("#first_language .value").click(function() 
    {
        
        if ($('#first_language .options').is(':hidden'))
        { 
           $('#profile_accordian  ul li .options').hide();
          $("#first_language .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#first_language .options").hide();
        }
        
    });
    
    $("#first_language div .height_radio").change(function () {
       
         var selValue = $('input[name=first_language]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#first_language .height_own_words").show();
              $("#first_language .options").show();
              $("#first_language_value").html("in my own words");
         }
         
         else
         {
         
            $("#first_language_value").html(selValue);
            $("#first_language .height_own_words").hide();
            $("#first_language .options").show();
            
           
          var id_first_language= $('input[name=first_language]:checked', '#first_language .options').attr('id');
          var column_name="first_language";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_first_language,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#first_language .options").hide();   
         }
   });
    $("#first_language .height_own_words textarea").val('');
    $("#first_language .height_own_words p").click(function() {
         var height_own_words=$("#first_language .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#first_language .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var first_language_own_words=$("#first_language .height_own_words textarea").val(); 
         $("#first_language_value").html(first_language_own_words);
         $("#first_language .height_own_words").hide();
        
        var column_name="first_language";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':first_language_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#first_language .options").hide();   
    });
      
  /* .................animals .................. */
   $("#animals .features").click(function() 
    {
        
        
        if ($('#animals .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#animals .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#animals .options").hide();
        }
       
    });
    
    $("#animals .value").click(function() 
    {
        
        if ($('#animals .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#animals .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#animals .options").hide();
        }
        
    });
    
    $("#animals div .height_radio").change(function () {
       
         var selValue = $('input[name=animals]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#animals .height_own_words").show();
              $("#animals .options").show();
              $("#animals_value").html("in my own words");
         }
         
         else
         {
         
            $("#animals_value").html(selValue);
            $("#animals .height_own_words").hide();
            $("#animals .options").show();
            
           
          var id_animals= $('input[name=animals]:checked', '#animals .options').attr('id');
          var column_name="mas_aninmals";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_animals,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#animals .options").hide();    
         }
   });
   $("#animals .height_own_words textarea").val('');
    $("#animals .height_own_words p").click(function() {
        var height_own_words=$("#animals .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#animals .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var animals_own_words=$("#animals .height_own_words textarea").val(); 
         $("#animals_value").html(animals_own_words);
         $("#animals .height_own_words").hide();
        
        var column_name="mas_aninmals ";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':animals_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
         $("#animals .options").hide();   
    });
    
 /* ..................fvrt color .......... */
  $("#fvrt_color .features").click(function() 
    {
        
        
        if ($('#fvrt_color .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#fvrt_color .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#fvrt_color .options").hide();
        }
       
    });
    
    $("#fvrt_color .value").click(function() 
    {
        
        if ($('#fvrt_color .options').is(':hidden'))
        { 
           $('#profile_accordian  ul li .options').hide();
          $("#fvrt_color .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#fvrt_color .options").hide();
        }
        
    });
    
    $("#fvrt_color div .height_radio").change(function () {
       
         var selValue = $('input[name=fvrt_color]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#fvrt_color .height_own_words").show();
              $("#fvrt_color .options").show();
              $("#fvrt_color_value").html("in my own words");
         }
         
         else
         {
         
            $("#fvrt_color_value").html(selValue);
            $("#fvrt_color .height_own_words").hide();
            $("#fvrt_color .options").show();
            
           
          var id_fvrt_color= $('input[name=fvrt_color]:checked', '#fvrt_color .options').attr('id');
          var column_name="fvrt_color";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_fvrt_color,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#fvrt_color .options").hide(); 
         }
   });
   $("#fvrt_color .height_own_words textarea").val('');
    $("#fvrt_color .height_own_words p").click(function() {
        var height_own_words=$("#fvrt_color .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#fvrt_color .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var fvrt_color_own_words=$("#fvrt_color .height_own_words textarea").val(); 
         $("#fvrt_color_value").html(fvrt_color_own_words);
         $("#fvrt_color .height_own_words").hide();
        
        var column_name="fvrt_color";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':fvrt_color_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
            $("#fvrt_color .options").hide(); 
    });
    
 /* .....................fashion ................*/
  $("#fashion .features").click(function() 
    {
        
        
        if ($('#fashion .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#fashion .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#fashion .options").hide();
        }
       
    });
    
    $("#fashion .value").click(function() 
    {
        
        if ($('#fashion .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#fashion .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
          $("#fashion .options").hide();
        }
        
    });
    
    $("#fashion div .height_radio").change(function () {
       
         var selValue = $('input[name=fashion]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#fashion .height_own_words").show();
              $("#fashion .options").show();
              $("#fashion_value").html("in my own words");
         }
         
         else
         {
         
            $("#fashion_value").html(selValue);
            $("#fashion .height_own_words").hide();
            $("#fashion .options").show();
            
           
          var id_fashion= $('input[name=fashion]:checked', '#fashion .options').attr('id');
          var column_name="fashion_sense";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_fashion,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#fashion .options").hide();  
         }
   });
    $("#fashion .height_own_words textarea").val('');
    $("#fashion .height_own_words p").click(function() {
         var height_own_words=$("#fashion .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#fashion .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var fashion_own_words=$("#fashion .height_own_words textarea").val(); 
         $("#fashion_value").html(fashion_own_words);
         $("#fashion .height_own_words").hide();
        
        var column_name="fashion_sense";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':fashion_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
          $("#fashion .options").hide();   
    });
      
  /* ...............intelligence ...................... */
   $("#intelligence .features").click(function() 
    {
        
        
        if ($('#intelligence .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
           $("#intelligence .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#intelligence .options").hide();
        }
       
    });
    
    $("#intelligence .value").click(function() 
    {
        
        if ($('#intelligence .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#intelligence .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#intelligence .options").hide();
        }
        
    });
    
    $("#intelligence div .height_radio").change(function () {
       
         var selValue = $('input[name=intelligence]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#intelligence .height_own_words").show();
              $("#intelligence .options").show();
              $("#intelligence_value").html("in my own words");
         }
         
         else
         {
         
            $("#intelligence_value").html(selValue);
            $("#intelligence .height_own_words").hide();
            $("#intelligence .options").show();
            
           
          var id_intelligence= $('input[name=intelligence]:checked', '#intelligence .options').attr('id');
          var column_name="intelligence";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_intelligence,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
            $("#intelligence .options").hide();   
         }
   });
    $("#intelligence .height_own_words textarea").val('');
    $("#intelligence .height_own_words p").click(function() {
         var height_own_words=$("#intelligence .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#intelligence .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var intelligence_own_words=$("#intelligence .height_own_words textarea").val(); 
         $("#intelligence_value").html(intelligence_own_words);
         $("#intelligence .height_own_words").hide();
        
        var column_name="intelligence";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':intelligence_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#intelligence .options").hide();   
    });
      
  /* ...................... tv ...................... */
   $("#tv .features").click(function() 
    {
        
        
        if ($('#tv .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#tv .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#tv .options").hide();
        }
       
    });
    
    $("#tv .value").click(function() 
    {
        
        if ($('#tv .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#tv .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#tv .options").hide();
        }
        
    });
    
    $("#tv div .height_radio").change(function () {
       
         var selValue = $('input[name=tv]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#tv .height_own_words").show();
              $("#tv .options").show();
              $("#tv_value").html("in my own words");
         }
         
         else
         {
         
            $("#tv_value").html(selValue);
            $("#tv .height_own_words").hide();
            $("#tv .options").show();
            
           
          var id_tv= $('input[name=tv]:checked', '#tv .options').attr('id');
          var column_name="tv";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_tv,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
            $("#tv .options").hide();    
         }
   });
    $("#tv .height_own_words textarea").val('');
    $("#tv .height_own_words p").click(function() {
        
        var height_own_words=$("#tv .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#tv .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
         var tv_own_words=$("#tv .height_own_words textarea").val(); 
         $("#tv_value").html(tv_own_words);
         $("#tv .height_own_words").hide();
        
        var column_name="tv";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':tv_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
           $("#tv .options").hide(); 
    });
     
  /* ......... cinema ...................*/
   $("#cinema .features").click(function() 
    {
        
        
        if ($('#cinema .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#cinema .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#cinema .options").hide();
        }
       
    });
    
    $("#cinema .value").click(function() 
    {
        
        if ($('#cinema .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#cinema .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#cinema .options").hide();
        }
        
    });
    
    $("#cinema div .height_radio").change(function () {
       
         var selValue = $('input[name=cinema]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#cinema .height_own_words").show();
              $("#cinema .options").show();
              $("#cinema_value").html("in my own words");
         }
         
         else
         {
         
            $("#cinema_value").html(selValue);
            $("#cinema .height_own_words").hide();
            $("#cinema .options").show();
            
           
          var id_cinema= $('input[name=cinema]:checked', '#cinema .options').attr('id');
          var column_name="cinema";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_cinema,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
             $("#cinema .options").hide(); 
         }
   });
    $("#cinema .height_own_words textarea").val('');
    $("#cinema .height_own_words p").click(function() {
        
         var height_own_words=$("#cinema .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#cinema .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
         var cinema_own_words=$("#cinema .height_own_words textarea").val(); 
         $("#cinema_value").html(cinema_own_words);
         $("#cinema .height_own_words").hide();
        
        var column_name="cinema";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':cinema_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
          $("#cinema .options").hide(); 
    });
    
   /*.......................star_sign ............. */
   
    $("#star_sign .features").click(function() 
    {
        
        
        if ($('#star_sign .options').is(':hidden'))
        { 
            $("#star_sign .options").show();
        }
        else
        {
          $("#star_sign .options").hide();
        }
       
    });
    
    $("#star_sign .value").click(function() 
    {
        
        if ($('#star_sign .options').is(':hidden'))
        { 
            $("#star_sign .options").show();
        }
        else
        {
          $("#star_sign .options").hide();
        }
        
    });
    
    $("#star_sign div .height_radio").change(function () {
       
         var selValue = $('input[name=star_sign]:checked').val(); 
         if(selValue=="own_words"){
             
              $("#star_sign .height_own_words").show();
              $("#star_sign .options").show();
              $("#star_sign_value").html("in my own words");
         }
         
         else
         {
         
            $("#star_sign_value").html(selValue);
            $("#star_sign .height_own_words").hide();
            $("#star_sign .options").show();
            
           
          var id_star_sign= $('input[name=star_sign]:checked', '#star_sign .options').attr('id');
          var column_name="star_sign";
        
          $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':id_star_sign,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
                 
                } 
            
            });
            
         }
   });
   
    $("#star_sign .height_own_words p").click(function() {
        
        
         var star_sign_own_words=$("#star_sign .height_own_words textarea").val(); 
         $("#star_sign_value").html(star_sign_own_words);
         $("#star_sign .height_own_words").hide();
        
        var column_name="star_sign";
        
         $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/features_ajax_request/',
            type:'POST',
            data:{'id_height':star_sign_own_words,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
                
              } 
            
            });
          
    });
      
   
 
     
  /* ..................... body art ...............*/
        
         var prev_id;
  
   var prev_ids_array;
   var array_id=[];
   var array_value=[];
   var store_result='';
   var prev_val;
  var prev_array_val;
 	var flag=0;
   var global_own_word='';
        
  $("#body_art .features").click(function() 
    {   
        
        if ($('#body_art .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
           $("#body_art .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#body_art .options").hide();
        }
       
    });
    
    $("#body_art .value").click(function() 
    {
        prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#body_art .body').val();
        prev_val=$('#body_art_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        
        if ($('#body_art .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#body_art .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#body_art .options").hide();
        }
        
    });
  
  
   
   
  
    $("#body_art div .height_radio").change(function () {
        
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==7)
            
            {   
                 $("#body_art_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='body_art';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#body_art .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#body_art .ask_me').attr('checked', true);
                $("#body_art_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#body_art .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#body_art .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='body_art';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==7)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='body_art';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#body_art .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#body_art .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#body_art_value").html("Ask me later"); 
         }
         else{
             $("#body_art_value").html(value);
         }
         
       }
       
        
            
   });
   $("#body_art .height_own_words textarea").val('');
   $("#body_art .height_own_words p").click(function() {
        
        var height_own_words=$("#body_art .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#body_art .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
        
          var own_words=$("#body_art .height_own_words textarea").val()
          var body_art_own_words=$("#body_art .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#body_art_value").html(value);  
         $("#body_art .height_own_words").hide();
         var column_name="body_art";
         array_id.push(body_art_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#body_art_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
   
   /* -------------------------------- other lang ---------------------- */
  
  $("#other_lang .features").click(function() 
    { 
       
        
        if ($('#other_lang .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#other_lang .options").show();
        }
        else
        {  $('#profile_accordian  ul li .options').hide();
          $("#other_lang .options").hide();
        }
       
    });
    
    $("#other_lang .value").click(function() 
    {
         prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#other_lang .body').val();
        
        prev_val=$('#other_lang_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
   
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
        
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        
      
        if ($('#other_lang .options').is(':hidden'))
        { 
           $('#profile_accordian  ul li .options').hide();
           $("#other_lang .options").show();
        }
        else
        {  $('#profile_accordian  ul li .options').hide();
          $("#other_lang .options").hide();
        }
        
    });
 
   
   
   
   
   
 
    $("#other_lang div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==27)
            
            {   
                 $("#other_lang_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='other_lang';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#other_lang .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#other_lang .ask_me').attr('checked', true);
                $("#other_lang_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#other_lang .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#other_lang .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='other_lang';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==27)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='other_lang';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#other_lang .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#other_lang .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +' , '+ array_value[j];
               }
               
        }
         if(value==''){
            $("#other_lang_value").html("Ask me later"); 
         }
         else{
             $("#other_lang_value").html(value);
         }
         
       }
       
        
            
   });
    $("#other_lang .height_own_words textarea").val('');
   $("#other_lang .height_own_words p").click(function() {
        var height_own_words=$("#other_lang .height_own_words textarea").val();
         var length=height_own_words.length;
        
         if(length==0){
             $('#other_lang .height_own_words textarea').attr("placeholder","can not be blank");
             return false;
         }
          var own_words=$("#other_lang .height_own_words textarea").val()
          var other_lang_own_words=$("#other_lang .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +' , '+ array_value[j];
               }
             
               
        }
            
         $("#other_lang_value").html(value);  
         $("#other_lang .height_own_words").hide();
         var column_name="other_lang";
         array_id.push(other_lang_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#other_lang_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
     
  /* ..................................end of other lang ....................................*/
   
   
 /* ,,,,,,,,,,,,,,,music,,,,,,,,,,,,,,,,,,,,,,, */
 
 $("#music .features").click(function() 
    {
       
        if ($('#music .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#music .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#music .options").hide();
        }
       
    });
    
    $("#music .value").click(function() 
    {
         prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#music .body').val();
        prev_val=$('#music_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        
        if ($('#music .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#music .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#music .options").hide();
        }
        
    });
 
  
   $("#music div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==23)
            
            {   
                 $("#music_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='music';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#music .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#music .ask_me').attr('checked', true);
                $("#music_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#music .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#music .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='music';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==23)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='music';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#music .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#music .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#music_value").html("Ask me later"); 
         }
         else{
             $("#music_value").html(value);
         }
         
       }
       
        
            
   });
   
   $("#music .height_own_words p").click(function() {
        
          var own_words=$("#music .height_own_words textarea").val()
          var music_own_words=$("#music .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#music_value").html(value);  
         $("#music .height_own_words").hide();
         var column_name="music";
         array_id.push(music_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#music_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
  /*  ......................end of music.................*/
   
   /* ............... on a date ..............*/
   $("#mas_date .features").click(function() 
    {
        var store='';
        
        if ($('#mas_date .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#mas_date .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#mas_date .options").hide();
        }
       
    });
    
    $("#mas_date .value").click(function() 
    {
         prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#mas_date .body').val();
        prev_val=$('#mas_date_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        if ($('#mas_date .options').is(':hidden'))
        { 
            $("#mas_date .options").show();
        }
        else
        {
          $("#mas_date .options").hide();
        }
        
    });
 
   
   
   
   
   
 
    $("#mas_date div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==6)
            
            {   
                 $("#mas_date_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='mas_date';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#mas_date .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#mas_date .ask_me').attr('checked', true);
                $("#mas_date_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#mas_date .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#mas_date .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='mas_date';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==6)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='mas_date';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#mas_date .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#mas_date .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#mas_date_value").html("Ask me later"); 
         }
         else{
             $("#mas_date_value").html(value);
         }
         
       }
       
        
            
   });
   
   $("#mas_date .height_own_words p").click(function() {
        
          var own_words=$("#mas_date .height_own_words textarea").val()
          var mas_date_own_words=$("#mas_date .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#mas_date_value").html(value);  
         $("#mas_date .height_own_words").hide();
         var column_name="mas_date";
         array_id.push(mas_date_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#mas_date_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
  
   /* .....................end of on a date...................... */
   
   
 /* ............ ideal home ......................*/
 $("#ideal_home .features").click(function() 
    {
        var store='';
       
        if ($('#ideal_home .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#ideal_home .options").show();
        }
        else
        {
           $('#profile_accordian  ul li .options').hide();
          $("#ideal_home .options").hide();
        }
       
    });
    
    $("#ideal_home .value").click(function() 
    {
             prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#ideal_home .body').val();
        prev_val=$('#ideal_home_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 

        if ($('#ideal_home .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#ideal_home .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#ideal_home .options").hide();
        }
        
    });
 
  
   
   
   
   
    $("#ideal_home div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==9)
            
            {   
                 $("#ideal_home_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='ideal_home';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#ideal_home .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#ideal_home .ask_me').attr('checked', true);
                $("#ideal_home_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#ideal_home .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#ideal_home .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='ideal_home';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==9)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='ideal_home';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#ideal_home .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#ideal_home .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#ideal_home_value").html("Ask me later"); 
         }
         else{
             $("#ideal_home_value").html(value);
         }
         
       }
       
        
            
   });
   
   $("#ideal_home .height_own_words p").click(function() {
        
          var own_words=$("#ideal_home .height_own_words textarea").val()
          var ideal_home_own_words=$("#ideal_home .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#ideal_home_value").html(value);  
         $("#ideal_home .height_own_words").hide();
         var column_name="ideal_home";
         array_id.push(ideal_home_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#ideal_home_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
  
 /* ...................... end of ideal home ............*/
 
 /* values ....................................*/
 $("#mas_values .features").click(function() 
    {
        var store='';
        
        
        if ($('#mas_values .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#mas_values .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#mas_values .options").hide();
        }
       
    });
    
    $("#mas_values .value").click(function() 
    {
         prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#mas_values .body').val();
        prev_val=$('#mas_values_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        if ($('#mas_values .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#mas_values .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#mas_values .options").hide();
        }
        
    });
 
  
   
   
   
  
 
    $("#mas_values div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==19)
            
            {   
                 $("#mas_values_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='mas_values';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#mas_values .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#mas_values .ask_me').attr('checked', true);
                $("#mas_values_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#mas_values .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#mas_values .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='mas_values';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==19)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='mas_values';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#mas_values .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#mas_values .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#mas_values_value").html("Ask me later"); 
         }
         else{
             $("#mas_values_value").html(value);
         }
         
       }
       
        
            
   });
   
   $("#mas_values .height_own_words p").click(function() {
        
          var own_words=$("#mas_values .height_own_words textarea").val()
          var mas_values_own_words=$("#mas_values .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#mas_values_value").html(value);  
         $("#mas_values .height_own_words").hide();
         var column_name="mas_values";
         array_id.push(mas_values_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#mas_values_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
  
 /* .............. end of value ..................*/
 

/* reading habits ..............*/

$("#reading_habit .features").click(function() 
    {
        var store='';
        
        
        if ($('#reading_habit .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#reading_habit .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#reading_habit .options").hide();
        }
       
    });
    
    $("#reading_habit .value").click(function() 
    {
         prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#reading_habit .body').val();
        prev_val=$('#reading_habit_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        
        if ($('#reading_habit .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#reading_habit .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#reading_habit .options").hide();
        }
        
    });
 
  
   
   
   
 
    $("#reading_habit div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==11)
            
            {   
                 $("#reading_habit_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='reading_habit';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#reading_habit .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#reading_habit .ask_me').attr('checked', true);
                $("#reading_habit_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#reading_habit .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#reading_habit .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='reading_habit';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==11)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='reading_habit';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#reading_habit .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#reading_habit .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#reading_habit_value").html("Ask me later"); 
         }
         else{
             $("#reading_habit_value").html(value);
         }
         
       }
       
        
            
   });
   
   $("#reading_habit .height_own_words p").click(function() {
        
          var own_words=$("#reading_habit .height_own_words textarea").val()
          var reading_habit_own_words=$("#reading_habit .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#reading_habit_value").html(value);  
         $("#reading_habit .height_own_words").hide();
         var column_name="reading_habit";
         array_id.push(reading_habit_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#reading_habit_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
  

/* end of reading habit */
/* ..........leisure .................*/
$("#mas_leisure .features").click(function() 
    {
        var store='';
        
        
        if ($('#mas_leisure .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#mas_leisure .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#mas_leisure .options").hide();
        }
       
    });
    
    $("#mas_leisure .value").click(function() 
    {
         prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        prev_id=$('#mas_leisure .body').val();
        prev_val=$('#mas_leisure_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        if ($('#mas_leisure .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#mas_leisure .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#mas_leisure .options").hide();
        }
        
    });
 
  
   
   
   
  
 
    $("#mas_leisure div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==24)
            
            {   
                 $("#mas_leisure_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='mas_leisure';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#mas_leisure .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#mas_leisure .ask_me').attr('checked', true);
                $("#mas_leisure_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#mas_leisure .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#mas_leisure .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='mas_leisure';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==24)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='mas_leisure';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#mas_leisure .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#mas_leisure .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#mas_leisure_value").html("Ask me later"); 
         }
         else{
             $("#mas_leisure_value").html(value);
         }
         
       }
       
        
            
   });
   
   $("#mas_leisure .height_own_words p").click(function() {
        
          var own_words=$("#mas_leisure .height_own_words textarea").val()
          var mas_leisure_own_words=$("#mas_leisure .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#mas_leisure_value").html(value);  
         $("#mas_leisure .height_own_words").hide();
         var column_name="mas_leisure";
         array_id.push(mas_leisure_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#mas_leisure_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
  
/* .........end of leisure............*/

/* ............movie taste ............ */
$("#movie_taste .features").click(function() 
    {
        var store='';
        
        
        if ($('#movie_taste .options').is(':hidden'))
        { 
             $('#profile_accordian  ul li .options').hide();
            $("#movie_taste .options").show();
        }
        else
        {
             $('#profile_accordian  ul li .options').hide();
            $("#movie_taste .options").hide();
        }
       
    });
    
    $("#movie_taste .value").click(function() 
    {
        prev_ids_array=[];
        prev_array_val=[];
        
        array_id=[];
        array_value=[];
        
         prev_id=$('#movie_taste .body').val();
        
        prev_val=$('#movie_taste_value').text();
        prev_ids_array=prev_id.split(",");
        prev_array_val=prev_val.split(",");
        var store='';
        for(var i=0;i<prev_ids_array.length;i++)
   {
     if(prev_ids_array[i]=='')
     {}
     else
     {
        
         array_id.push(prev_ids_array[i]); 
     }
     
  }
  
  
 for(var i=0;i<prev_array_val.length;i++)
 {
     if(prev_array_val[i]=='Ask me later' || prev_array_val[i]=='')
     {}
     else
     {
      
         array_value.push(prev_array_val[i]); 
     }
     
 } 
        if ($('#movie_taste .options').is(':hidden'))
        { 
            $('#profile_accordian  ul li .options').hide();
            $("#movie_taste .options").show();
        }
        else
        {
            $('#profile_accordian  ul li .options').hide();
            $("#movie_taste .options").hide();
        }
        
    });
 
  
   
   
   
  
 
    $("#movie_taste div .height_radio").change(function () {
       
        var value_checked='';
        if (this.checked)
        {
            var id = $(this).attr('id');
            var value = $(this).val();
            if(id==13)
            
            {   
                 $("#movie_taste_value").html("In my own words")
                
                 flag=1;
                
            }
            else 
            {
                    array_id.push(id);
                    
                    
                    var value = $(this).val();
                  
                   array_value.push(value);
                    
                    var checked='';
                     for (var i = 0, l = array_id.length; i < l; i++)
                     {
                           if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else 
                            {
                                 checked=checked+","+array_id[i];
                            }
                
               
                
                    }
                   
            }
            
            if(id==0)
            {
            
              var column_name='movie_taste';
              checked='';
             $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
               
                $("#movie_taste .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#movie_taste .ask_me').attr('checked', true);
                $("#movie_taste_value").html("Ask me later");
                value_checked='';
               
                array_value = [];
                array_id=[];
                flag=1;
                
                
            }
            else {
                    flag=0;
                    
                 
                    $('#movie_taste .ask_me').attr('checked', false);
                   
                   
                    if(value=="own_words")
                    {
                        $("#movie_taste .height_own_words").show();

                    }
                    else
                    {
                      
                       var column_name='movie_taste';
                        $.ajax({

                            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                            type:'POST',
                            data:{'id':checked,'column_name':column_name},
                            dataType: 'json',
                            success: function(output_string)
                                        {


                                        } 

                               });


                    }
                } 
       }
       
       else 
       {   
        
        var remove_index='';
        var value = $(this).val();
        
        var id = $(this).attr('id');
        if(id==13)
        {
            for(var j=0,len=array_value.length;j<len;j++)
            {
                   if(array_value[j]==global_own_word)
                   {
                       remove_index=j;
                       break;
                   }
            }
            array_value.splice(remove_index,1);
       }
       else
       {
            for(var j=0,len=array_value.length;j<len;j++)
            {
               if(array_value[j]==value)
               {
                   remove_index=j;
                   break;
               }
            }
            array_value.splice(remove_index,1);
           
       }
        
       
       
       
        var remove_id='';
        var id = $(this).attr('id');
        for(var i = 0, l = array_id.length; i < l; i++){
            if(array_id[i]==id)
            {
                remove_id=i;
                break;
            }
            else 
            {
          
                if(array_id[i][1]!='')
                {
                   remove_id=i;
                }
            
            
            }
            
        }
        
       //array_id.splice( $.inArray(remove_id,array_id));
        array_id.splice(remove_id,1);
        var checked="";
        for (var i = 0, l = array_id.length; i < l; i++)
                    {
                        if(array_id.length==1)
                            {
                                 checked=array_id[i];
                            }
                            else {
                                 checked=checked+","+array_id[i];
                            }



                    }

       
       
        var column_name='movie_taste';
                $.ajax({
              
                    url: '<?php echo base_url(); ?>welcome/checkbox_features/',
                    type:'POST',
                    data:{'id':checked,'column_name':column_name},
                    dataType: 'json',
                    success: function(output_string)
                                {
                                              
                 
                                } 
            
                       });
           
           var id = $(this).attr('id');
           var value = $(this).val();
           if(id==0) 
           {
                $("#movie_taste .height_radio:checked").each(function() 
                {
                    $(this).attr('checked', false);
                     
                });
                
                $('#movie_taste .ask_me').attr('checked', true);
            }
             
             
       }var value='';
       if(flag==0) {
         var flag_temp=0;
         for(var j=0,len=array_value.length;j<len;j++)
        {
              if(flag_temp==0)
               {    
                   value=array_value[j];
                   flag_temp=1;
               }
               else{
                   value=value +','+ array_value[j];
               }
               
        }
         if(value==''){
            $("#movie_taste_value").html("Ask me later"); 
         }
         else{
             $("#movie_taste_value").html(value);
         }
         
       }
       
        
            
   });
   
   $("#movie_taste .height_own_words p").click(function() {
        
          var own_words=$("#movie_taste .height_own_words textarea").val()
          var movie_taste_own_words=$("#movie_taste .height_own_words textarea").val(); 
          global_own_word=own_words;
          array_value.push(own_words);
          
            var value=''
         
             for(var j=0,len=array_value.length;j<len;j++)
        {
               
               if(array_value.length==1)
               {
                   value=array_value[j];
               }
               else{
                   value=value +','+ array_value[j];
               }
             
               
        }
            
         $("#movie_taste_value").html(value);  
         $("#movie_taste .height_own_words").hide();
         var column_name="movie_taste";
         array_id.push(movie_taste_own_words);
         var checked='';
           var flag_temp=0;
          for (var i = 0, l = array_id.length; i < l; i++)
            {
                 if(flag_temp==0)
                    {
                         checked=array_id[i];
                         flag_temp=1;
                    }
                    else {
                         checked=checked+","+array_id[i];
                    }
           }
      
       $("#movie_taste_value").html(value);
       $.ajax({
              
            url: '<?php echo base_url(); ?>welcome/checkbox_features/',
            type:'POST',
            data:{'id':checked,'column_name':column_name},
            dataType: 'json',
            success: function(output_string){
            
              } 
            
            });
        
    });
  

/*....... end of movie taste .............*/
$('body').on('blur', '#profile_accordian #basics_info ul li', function() { 

$('#profile_accordian #basics_info ul li .options').delay(15000).hide(0);

$('#profile_accordian #basics_info ul li .height_own_words').delay(15000).hide(0);
});
 

$('body').on('blur', '#profile_accordian #morefact ul li', function() { 

$('#profile_accordian #morefact ul li .options').delay(15000).hide(0);
$('#profile_accordian #morefact ul li .height_own_words').delay(15000).hide(0);

});

$('body').on('blur', '#profile_accordian #real_details ul li', function() { 

$('#profile_accordian #real_details ul li .options').delay(15000).hide(0);
$('#profile_accordian #real_details ul li .height_own_words').delay(15000).hide(0);

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
                
                <p> <a href="<?php echo base_url(); ?>welcome/index">Home</a> > At my Glance</p>
                
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
                             <a href="<?php echo base_url(); ?>welcome/upload_img">
                                 <li class="photo">
                                 My Photos
                                 </li>
                             </a>


                             <a href="">
                                 <li class="own_words">
                                    In my own words
                                 </li>
                             </a>

                             <a href="<?php echo base_url(); ?>welcome/me_at_glance/<?php echo $userid;?>">
                                 <li class="at_glance current">
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
                  
                  <div id="person_info"> <?php 
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
                       
                        <p><span>The basics </span><a href="#">Edit</a> </p>
                        <div id="basics_info">
                            
                            <ul>
                                <li id="height">
                                    <span class="features">
                                      Height  
                                    </span>
                                    
                                    <span class="value" id="height_value">
                                        <?php echo $detail_info['height_val']; ?>
                                        </br>   
                                   
                                    </span>
                                    
                                     <div class="options">
                                        <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['height_val']=='Ask me later')
                                         {  $flag=0; ?>
                                         <input type="radio" id="0" class="height_radio" name="height" value="Ask me later" checked="checked"/><label for="0">Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <input type="radio" id="0" class="height_radio" name="height" value="Ask me later"/><label for="0">Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($height as $result_test) 
                                        {
                                            if($detail_info['height_val']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                          <input type="radio" id="<?php echo $result_test->idheight;?>" class="height_radio" name="height" value="<?php echo $result_test->name; ?>" checked="checked"/><label for="<?php echo $result_test->idheight;?>"><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <input type="radio" id="<?php echo $result_test->idheight;?>" class="height_radio" name="height" value="<?php echo $result_test->name; ?>"/><label for="<?php echo $result_test->idheight;?>"><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <input type="radio" id="7" class="height_radio" name="height" value="own_words" checked="checked"/><label for="7">in my own words</label></br>
                                       <?php } else { ?>
                                         <input type="radio" id="7" class="height_radio" name="height" value="own_words" /><label for="7">in my own words</label></br>
                                        <?php } ?>
                                        
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own"> 
                                        <?php 
                                            if($flag==1)
                                            {
                                           echo $detail_info['height_val']; 
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>
                                        </textarea>
                                        <p>ok </p>
                                        
                                    </div>
                                    
                                    
                                    
                                    
                                </li>
                                
                                <li id="body_type">
                                    <span class="features">
                                         Body type
                                    </span>
                                    
                                    <span class="value" id="body_value">
                                        <?php echo $detail_info['bodytype_val']; ?>
                                    </span>
                                    
                                    
                                     <div class="options">
                                        
                       
                                      
                                       <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['bodytype_val']=='Ask me later')
                                         {  $flag=0; ?>
                                         <input type="radio" id="0" class="height_radio" name="body_type" value="Ask me later" checked="checked"/><label for="0">Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <input type="radio" id="0" class="height_radio" name="body_type" value="Ask me later"/><label for="0">Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($body_type as $result_test) 
                                        {
                                            if($detail_info['bodytype_val']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                          <label><input type="radio" id="<?php echo $result_test->id_body_type;?>" class="height_radio" name="body_type" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_body_type;?>" class="height_radio" name="body_type" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="9" class="height_radio" name="body_type" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="9" class="height_radio" name="body_type" value="own_words" />in my own words</label></br>
                                        <?php } ?>
                                        
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">

                                         <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['bodytype_val']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                    
                                </li>
                                
                                <li id="relation">
                                    
                                    <span class="features">
                                        Relationship status
                                    </span>
                                    
                                    <span class="value" id="relation_value">
                                       <?php echo $detail_info['relation_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                    
                                        
                                     <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['relation_value']=='Ask me later')
                                         {  $flag=0; ?>
                                        <label><input type="radio" id="0" class="height_radio" name="relation" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="relation" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($relation_status as $result_test) 
                                        {
                                            if($detail_info['relation_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_relationship_status;?>" class="height_radio" name="relation" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_relationship_status;?>" class="height_radio" name="relation" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="6" class="height_radio" name="relation" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="6" class="height_radio" name="relation" value="own_words" />in my own words</label></br>
                                        <?php } ?>
                                          
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['relation_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                    
                                </li>
                                
                                
                                <li id="ethnicity">
                                    <span class="features">
                                        Ethnicity 
                                    </span>
                                    
                                    <span class="value" id="ethnicity_value">
                                         <?php echo $detail_info['ethnicity_value']; ?>
                                    </span>
                                    
                                    
                                     <div class="options">
                                        
                                   
                                         
                                       <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['ethnicity_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="ethnicity" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="ethnicity" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($ethnicity as $result_test) 
                                        {
                                            if($detail_info['ethnicity_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_ethnicity;?>" class="height_radio" name="ethnicity" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_ethnicity;?>" class="height_radio" name="ethnicity" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="8" class="height_radio" name="ethnicity" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="8" class="height_radio" name="ethnicity" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['ethnicity_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                    
                                    
                                </li>
                                
                                <li id="smoking">
                                    <span class="features">
                                         Smoking
                                    </span>
                                    
                                    <span class="value" id="smoking_value">
                                         <?php echo $detail_info['smoking_value']; ?>
                                    </span>
                                    
                                     <div class="options">
                                     
                                     <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['smoking_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="smoking" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="smoking" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($smoking as $result_test) 
                                        {
                                            if($detail_info['smoking_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_smoking;?>" class="height_radio" name="smoking" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_smoking;?>" class="height_radio" name="smoking" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="4" class="height_radio" name="smoking" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="4" class="height_radio" name="smoking" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                         
                                   
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['smoking_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   

                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                </li>
                                
                                <li id="drink">
                                    <span class="features">
                                        Drink
                                    </span>
                                    
                                    <span class="value" id="drink_value">
                                       <?php echo $detail_info['drink_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                    
                                      <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['drink_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="drink" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="drink" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($drink as $result_test) 
                                        {
                                            if($detail_info['drink_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_drink;?>" class="height_radio" name="drink" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_drink;?>" class="height_radio" name="drink" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="4" class="height_radio" name="drink" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="4" class="height_radio" name="drink" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                 
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['drink_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                            </ul>
                            
                        </div>
                        <p><span>More facts 'n' figures</span><a href="#">Edit</a> </p>
                        
                        <div id="morefact">
                        
                               <ul>
                                <li id="children">
                                    <span class="features">
                                      Children  
                                    </span>
                                    
                                    <span class="value" id="children_value">
                                       <?php echo $detail_info['children_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                       
                                       <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['children_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="children" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="children" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($children as $result_test) 
                                        {
                                            if($detail_info['children_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_children;?>" class="height_radio" name="children" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_children;?>" class="height_radio" name="children" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="5" class="height_radio" name="children" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="5" class="height_radio" name="children" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                    
                                        
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['children_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="education">
                                    <span class="features">
                                          Education
                                    </span>
                                    
                                    <span class="value" id="education_value">
                                       <?php echo $detail_info['education_value']; ?>
                                    </span>
                                    
                                     <div class="options">
                                       
                                         <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['education_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="education" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="education" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($education as $result_test) 
                                        {
                                            if($detail_info['education_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_education;?>" class="height_radio" name="education" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_education;?>" class="height_radio" name="education" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="7" class="height_radio" name="education" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="7" class="height_radio" name="education" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                    
                                    
                                     </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        
                                            <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['education_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   
                                        
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li class="features_list" id="occupation">
                                    <span class="features">
                                        Occupation
                                    </span>
                                    
                                    <span class="value" id="occupation_value">
                                      <?php echo $detail_info['occupation_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                        
                                        <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['occupation_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="occupation" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="occupation" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($occupation as $result_test) 
                                        {
                                            if($detail_info['occupation_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id;?>" class="height_radio" name="occupation" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id;?>" class="height_radio" name="occupation" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="10" class="height_radio" name="occupation" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="10" class="height_radio" name="occupation" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                        
                                    
                                   </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php 
                                            if($flag==1)
                                            {
                                            echo $detail_info['occupation_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            }
                                        ?>   
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="diet" class="features_list">
                                    <span class="features">
                                         Diet 
                                    </span>
                                    
                                    <span class="value" id="diet_value">
                                         <?php echo $detail_info['diet_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                        
                                     <!--   <input type="radio" id="0" class="height_radio" name="diet" value="Ask me later" checked="checked"/>Ask me later</br>
                                        <input type="radio" id="1" class="height_radio" name="diet" value="Eat most things"/>Eat most things</br>
                                        <input type="radio" id="2" class="height_radio" name="diet" value="Vegetarian" />Vegetarian</br>
                                        <input type="radio" id="3" class="height_radio" name="diet" value="Vegan" />Vegan</br>
                                        <input type="radio" id="4" class="height_radio" name="diet" value="own_words" />in my own words</br> -->
                                      
                                        <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['diet_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="diet" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="diet" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($diet as $result_test) 
                                        {
                                            if($detail_info['diet_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_diet;?>" class="height_radio" name="diet" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_diet;?>" class="height_radio" name="diet" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="4" class="height_radio" name="diet" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="4" class="height_radio" name="diet" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                          <?php if($flag==1)
                                            {
                                            echo $detail_info['diet_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="eye_color" class="features_list">
                                    <span class="features">
                                         Eye colour
                                    </span>
                                    
                                    <span class="value" id="eye_color_value">
                                        <?php echo $detail_info['eye_color_value']; ?>
                                    </span>
                                    
                                     
                                    <div class="options">
                                        
                                        <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['eye_color_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="eye" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="eye" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($eye_color as $result_test) 
                                        {
                                            if($detail_info['eye_color_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_eye_color;?>" class="height_radio" name="eye" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_eye_color;?>" class="height_radio" name="eye" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="9" class="height_radio" name="eye" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="9" class="height_radio" name="eye" value="own_words" />in my own words</label></br>
                                        <?php } ?>  
                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                            
                                         <?php if($flag==1)
                                            {
                                            echo $detail_info['eye_color_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>    
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                </li>
                                
                                <li id="hair_color" class="features_list">
                                    <span class="features">
                                        Hair colour
                                    </span>
                                    
                                    <span class="value" id="hair_color_value">
                                        <?php echo $detail_info['hair_color_value']; ?>
                                    </span>
                                    
                                     <div class="options">
                                        
                                          <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['hair_color_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="hair_color" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="hair_color" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($hair_color as $result_test) 
                                        {
                                            if($detail_info['hair_color_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_hair_color;?>" class="height_radio" name="hair_color" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_hair_color;?>" class="height_radio" name="hair_color" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                       <label> <input type="radio" id="12" class="height_radio" name="hair_color" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="12" class="height_radio" name="hair_color" value="own_words" />in my own words</label></br>
                                        <?php } ?>  
                                    
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         <?php if($flag==1)
                                            {
                                            echo $detail_info['hair_color_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>    
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="religious" class="features_list">
                                    <span class="features">
                                         Religious views
                                    </span>
                                    
                                    <span class="value" id="religious_value">
                                         <?php echo $detail_info['religious_views_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                      <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['religious_views_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="religious" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="religious" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($religious as $result_test) 
                                        {
                                            if($detail_info['religious_views_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_religious_view;?>" class="height_radio" name="religious" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_religious_view;?>" class="height_radio" name="religious" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="13" class="height_radio" name="religious" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="13" class="height_radio" name="religious" value="own_words" />in my own words</label></br>
                                        <?php } ?>  
                                        
                             
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         <?php if($flag==1)
                                            {
                                            echo $detail_info['religious_views_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>   
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="first_language" class="features_list">
                                    <span class="features">
                                        First Language
                                    </span>
                                    
                                    <span class="value" id="first_language_value">
                                       <?php echo $detail_info['first_lang_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                         <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['first_lang_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="first_language" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="first_language" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($first_language as $result_test) 
                                        {
                                            if($detail_info['first_lang_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_first_language;?>" class="height_radio" name="first_language" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_first_language;?>" class="height_radio" name="first_language" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="27" class="height_radio" name="first_language" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="27" class="height_radio" name="first_language" value="own_words" />in my own words</label></br>
                                        <?php } ?>  
                                     
                                        
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php if($flag==1)
                                            {
                                            echo $detail_info['first_lang_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>    
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="other_lang" class="features_list">
                                    <span class="features">
                                        Other languages
                                    </span>
                                    
                                    <span class="value" id="other_lang_value">
                                         <?php echo $detail_info['other_lang_value']; ?>
                                    </span>
                                     <?php $temp_array=  explode(',',$detail_info['other_lang_value']); ?>
                                     <input type="hidden" name="body_art" class="body" value="<?php echo $profile_id_info[0]->other_lang; ?>">
                                    <div class="options">
                                     
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['other_lang_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="first_language" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="first_language" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($other_lang as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_first_language; ?>" class="height_radio" name="first_language" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_first_language; ?>" class="height_radio" name="first_language" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="27" class="height_radio own_words" name="first_language" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="27" class="height_radio own_words" name="first_language" value="own_words" />in my own words</label></br>
                                        <?php } ?>     
                                     
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        
                                        <?php if($flag==1)
                                            {
                                            echo $detail_info['other_lang_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>    

                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                    
                                </li>
                            </ul>   
                        
                        </div>
                        
                        
                        <p><span>The real detail</span><a href="#">Edit</a> </p>
                        <div id="real_details">
                            
                            <ul>
                                <li id="animals" class="features_list">
                                    <span class="features">
                                      Animals  
                                    </span>
                                    
                                    <span class="value" id="animals_value">
                                            <?php echo $detail_info['animals_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                      
                                         <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['animals_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="animals" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                         <label><input type="radio" id="0" class="height_radio" name="animals" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($animals as $result_test) 
                                        {
                                            if($detail_info['animals_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                         <label><input type="radio" id="<?php echo $result_test->id_animals;?>" class="height_radio" name="animals" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                          <label><input type="radio" id="<?php echo $result_test->id_animals;?>" class="height_radio" name="animals" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="radio" id="5" class="height_radio" name="animals" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="radio" id="5" class="height_radio" name="animals" value="own_words" />in my own words </label></br>
                                        <?php } ?>  
                                   
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['animals_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="music" class="features_list">
                                    <span class="features">
                                         Music
                                    </span>
                                    
                                    <span class="value" id="music_value">
                                         <?php echo $detail_info['music_value']; ?>
                                    </span>
                                    
                                     <?php $temp_array=  explode(',',$detail_info['music_value']); ?>
                                     <input type="hidden" name="music" class="body" value="<?php echo $profile_id_info[0]->music; ?>">
                                    
                                      
                                    <div class="options">
                                        <?php $flag=1; ?> 
                                       <?php if($detail_info['music_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="music" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="music" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($music as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_music; ?>" class="height_radio" name="music" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_music; ?>" class="height_radio" name="music" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="23" class="height_radio own_words" name="music" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="23" class="height_radio own_words" name="music" value="own_words" />in my own words</label></br>
                                        <?php } ?>    
                                   
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own"></textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                </li>
                                
                                <li id="body_art" class="features_list">
                                    <span class="features">
                                        Body art
                                    </span>
                                    <input type="hidden" name="body_art" class="body" value="<?php echo $profile_id_info[0]->body_art; ?>">
                                    <span class="value" id="body_art_value">
                                     <?php echo $detail_info['body_art_value']; 
                                     ?>
                                    </span>
                                    <?php $temp_array=  explode(',',$detail_info['body_art_value']); ?>
                                    <div class="options">
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['body_art_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="body_art" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="body_art" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($body_art as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_body_art; ?>" class="height_radio" name="body_art" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_body_art; ?>" class="height_radio" name="body_art" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="7" class="height_radio own_words" name="body_art" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="7" class="height_radio own_words" name="body_art" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                       

                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['body_art_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="fvrt_color" class="features_list">
                                    <span class="features">
                                        Favourite colour
                                    </span>
                                    
                                    <span class="value" id="fvrt_color_value">
                                        <?php echo $detail_info['fvrtcolor_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                        <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['fvrtcolor_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="fvrt_color" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="fvrt_color" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($fvrt_color as $result_test) 
                                        {
                                            if($detail_info['fvrtcolor_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_color;?>" class="height_radio" name="fvrt_color" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                        <label><input type="radio" id="<?php echo $result_test->id_color;?>" class="height_radio" name="fvrt_color" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="13" class="height_radio" name="fvrt_color" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="13" class="height_radio" name="fvrt_color" value="own_words" />in my own words</label></br>
                                        <?php } ?> 
                                        
                                   
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         <?php if($flag==1)
                                            {
                                            echo $detail_info['fvrtcolor_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?> 
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                    
                                </li>
                                
                                <li id="mas_date" class="features_list">
                                    <span class="features">
                                        On a date
                                    </span>
                                    
                                    <input type="hidden" name="date" class="body" value="<?php echo $profile_id_info[0]->mas_date; ?>">
                                    <span class="value" id="mas_date_value">
                                     <?php echo $detail_info['date_value']; 
                                     ?>
                                    </span>
                                    <?php $temp_array=  explode(',',$detail_info['date_value']); ?>
                                    <div class="options">
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['date_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="date" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="date" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($date as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_date; ?>" class="height_radio" name="date" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_date; ?>" class="height_radio" name="date" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="6" class="height_radio own_words" name="body_art" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="6" class="height_radio own_words" name="body_art" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                       

                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['date_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>

                                    
                                </li>
                                
                                <li id="ideal_home" class="features_list">
                                    <span class="features">
                                       Ideal home
                                    </span>
                                    
                                    <input type="hidden" name="date" class="body" value="<?php echo $profile_id_info[0]->ideal_home; ?>">
                                    <span class="value" id="ideal_home_value">
                                     <?php echo $detail_info['home_value']; 
                                     ?>
                                    </span>
                                    <?php $temp_array=  explode(',',$detail_info['home_value']); ?>
                                    <div class="options">
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['home_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="home" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="home" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($home as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_ideal_home; ?>" class="height_radio" name="home" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_ideal_home; ?>" class="height_radio" name="home" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="6" class="height_radio own_words" name="home" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="6" class="height_radio own_words" name="home" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                       

                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['home_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>

                                </li>
                                
                                <li id="fashion"  class="features_list">
                                    <span class="features">
                                         Fashion sense
                                    </span>
                                    
                                    <span class="value" id="fashion_value">
                                          <?php echo $detail_info['fashion_sense_value']; ?>
                                    </span>
                                    
                                    <div class="options">
                                      
                                      <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['fashion_sense_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="fashion" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="fashion" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($fashion as $result_test) 
                                        {
                                            if($detail_info['fashion_sense_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_fashion_sense;?>" class="height_radio" name="fashion" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_fashion_sense;?>" class="height_radio" name="fashion" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="10" class="height_radio" name="fashion" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                        <label><input type="radio" id="10" class="height_radio" name="fashion" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                        
                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php if($flag==1)
                                            {
                                            echo $detail_info['fashion_sense_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?> 
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                    
                                    
                                </li>
                                
                                <li id="intelligence"  class="features_list">
                                    <span class="features">
                                       Intelligence
                                    </span>
                                    
                                    <span class="value" id="intelligence_value">
                                       <?php echo $detail_info['intelligence_sense_value']; ?>
                                    </span>
                                    <div class="options">
                                        
                                     <!--   <input type="radio" id="0" class="height_radio" name="intelligence" value="Ask me later" checked="checked"/>Ask me later</br>
                                        <input type="radio" id="1" class="height_radio" name="intelligence" value="Intellectually challenged"/>Intellectually challenged</br>
                                        <input type="radio" id="2" class="height_radio" name="intelligence" value="About average" />About average</br>
                                        <input type="radio" id="3" class="height_radio" name="intelligence" value="Bright as a button" />Bright as a button</br>
                                        <input type="radio" id="4" class="height_radio" name="intelligence" value="Streetwise" />Streetwise</br>
                                        <input type="radio" id="5" class="height_radio" name="intelligence" value="Pointy-head" />Pointy-head</br>
                                        
                                        <input type="radio" id="6" class="height_radio" name="intelligence" value="own_words" />in my own words</br> -->
                                      
                                     <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['intelligence_sense_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="intelligence" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="intelligence" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($intelligense as $result_test) 
                                        {
                                            if($detail_info['intelligence_sense_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_intelligence;?>" class="height_radio" name="intelligence" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_intelligence;?>" class="height_radio" name="intelligence" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="6" class="height_radio" name="intelligence" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="6" class="height_radio" name="intelligence" value="own_words" />in my own words</label></br>
                                        <?php } ?>      
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php if($flag==1)
                                            {
                                            echo $detail_info['intelligence_sense_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?> 
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                    
                                </li>
                                
                                <li id="mas_values" class="features_list" >
                                    <span class="features">
                                        Values
                                    </span>
                                    <input type="hidden" name="val" class="body" value="<?php echo $profile_id_info[0]->mas_values; ?>">
                                    <span class="value" id="mas_values_value">
                                     <?php echo $detail_info['mas_value_value']; 
                                     ?>
                                    </span>
                                    <?php $temp_array=  explode(',',$detail_info['mas_value_value']); ?>
                                    <div class="options">
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['mas_value_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="values" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="values" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($mas_value as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_values; ?>" class="height_radio" name="values" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_values; ?>" class="height_radio" name="values" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="19" class="height_radio own_words" name="values" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="19" class="height_radio own_words" name="values" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                       

                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['mas_value_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>

                                    
                                </li>
                                
                                  <li id="tv" class="features_list">
                                    <span class="features" >
                                        TV and you
                                    </span>
                                    
                                    <span class="value" id="tv_value">
                                           <?php echo $detail_info['tv_value']; ?>
                                    </span>
                                      
                                     <div class="options">
                                     
                                       <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['tv_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="tv" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="tv" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($tv as $result_test) 
                                        {
                                            if($detail_info['tv_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_tv;?>" class="height_radio" name="tv" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_tv;?>" class="height_radio" name="tv" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label>/br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="9" class="height_radio" name="tv" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="9" class="height_radio" name="tv" value="own_words" />in my own words</label></br>
                                        <?php } ?>    
                                         
                                         
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php if($flag==1)
                                            {
                                            echo $detail_info['tv_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?> 
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                </li>
                                
                                  <li id="reading_habit" class="features_list">
                                    <span class="features">
                                        Reading habits
                                    </span>
                                    
                                   <input type="hidden" name="date" class="body" value="<?php echo $profile_id_info[0]->reading_habit; ?>">
                                    <span class="value" id="reading_habit_value">
                                     <?php echo $detail_info['reading_value']; 
                                     ?>
                                    </span>
                                    <?php $temp_array=  explode(',',$detail_info['reading_value']); ?>
                                    <div class="options">
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['reading_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="read" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="read" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($read_value as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_reading_habit; ?>" class="height_radio" name="read" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_reading_habit; ?>" class="height_radio" name="read" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="11" class="height_radio own_words" name="read" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="11" class="height_radio own_words" name="read" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                       

                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['reading_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>

                                </li>
                                
                                  <li id="cinema" class="features_list">
                                    <span class="features">
                                        The cinema
                                    </span>
                                    
                                    <span class="value" id="cinema_value">
                                        <?php echo $detail_info['cinema_value']; ?>
                                    </span>
                                      
                                      
                                     <div class="options">
                                         <?php $flag=1; ?>
                                         
                                        <?php if($detail_info['cinema_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="radio" id="0" class="height_radio" name="cinema" value="Ask me later" checked="checked"/>Ask me later</label></br>   
                                         <?php } else { ?>
                                        
                                        <label><input type="radio" id="0" class="height_radio" name="cinema" value="Ask me later"/>Ask me later</label></br>
                                        <?php } ?>
                                        <?php foreach($cinema as $result_test) 
                                        {
                                            if($detail_info['cinema_value']==$result_test->name) 
                                            {
                                            $flag=0;
                                        ?>
                                        <label><input type="radio" id="<?php echo $result_test->id_cinema;?>" class="height_radio" name="cinema" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                        <?php } else  { ?> 
                                          
                                         <label><input type="radio" id="<?php echo $result_test->id_cinema;?>" class="height_radio" name="cinema" value="<?php echo $result_test->name; ?>"/><?php echo $result_test->name; ?></label></br>
                                        <?php } 
                                        
                                        } ?>
                                         
                                        <?php if($flag==1) { ?>
                                         
                                        <label><input type="radio" id="9" class="height_radio" name="cinema" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                         <label><input type="radio" id="9" class="height_radio" name="cinema" value="own_words" />in my own words</label></br>
                                        <?php } ?>    
                                    <!--    <input type="radio" id="0" class="height_radio" name="cinema" value="Ask me later" checked="checked"/>Ask me later</br>
                                        <input type="radio" id="1" class="height_radio" name="cinema" value="It doesn't"/>It doesn't</br>
                                        <input type="radio" id="2" class="height_radio" name="cinema" value="Occasionally go" />Occasionally go</br>
                                        <input type="radio" id="3" class="height_radio" name="cinema" value="Several times a month" />Several times a month</br>
                                        <input type="radio" id="4" class="height_radio" name="cinema" value="Hardly ever out of the place" />Hardly ever out of the place</br>
                                       
                                        
                                        <input type="radio" id="6" class="height_radio" name="cinema" value="own_words" />in my own words</br> -->
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                        <?php if($flag==1)
                                            {
                                            echo $detail_info['cinema_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?> 
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
                                 </li>
                                
                                  <li id="movie_taste" class="features_list">
                                    <span class="features">
                                        Movie tastes
                                    </span>
                                    
                                    <input type="hidden" name="date" class="body" value="<?php echo $profile_id_info[0]->movie_taste; ?>">
                                    <span class="value" id="movie_taste_value">
                                     <?php echo $detail_info['movie_value']; 
                                     ?>
                                    </span>
                                    <?php $temp_array=  explode(',',$detail_info['movie_value']); ?>
                                    <div class="options">
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['movie_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="movie" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="movie" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($mov_value as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_movie_taste; ?>" class="height_radio" name="movie" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_movie_taste; ?>" class="height_radio" name="movie" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="13" class="height_radio own_words" name="movie" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="13" class="height_radio own_words" name="movie" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                       

                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['movie_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>

                                 </li>
                                
                                  <li id="mas_leisure" class="features_list">
                                    <span class="features">
                                        Leisure time
                                    </span>
                                    
                                    <input type="hidden" name="date" class="body" value="<?php echo $profile_id_info[0]->mas_leisure; ?>">
                                    <span class="value" id="mas_leisure_value">
                                     <?php echo $detail_info['leisure_value']; 
                                     ?>
                                    </span>
                                    <?php $temp_array=  explode(',',$detail_info['leisure_value']); ?>
                                    <div class="options">
                                       <?php $flag=1; ?> 
                                       <?php if($detail_info['leisure_value']=='Ask me later')
                                         {  $flag=0; ?>
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="leisure" value="Ask me later" checked="checked"/>Ask me later</label></br>
                                         <?php } else { ?>
                                        
                                         <label><input type="checkbox" id="0" class="height_radio ask_me" name="leisure" value="Ask me later" />Ask me later</label></br>
                                        <?php } ?> 
                                      
                                        
                                           
                                       <?php foreach($lei_value as $result_test) { 
                                           
                                        for($i=0;$i<count($temp_array);$i++)
                                        {
                                            if($temp_array[$i]==$result_test->name." ") 
                                            {
                                                $set_check=1;
                                                break;
                                            }
                                            else
                                            {
                                                $set_check=0;
                                            }
                                        }   
                                       ?>
                                         <?php if($set_check==1) { $flag=0 ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_leisure; ?>" class="height_radio" name="leisure" value="<?php echo $result_test->name; ?>" checked="checked"/><?php echo $result_test->name; ?></label></br>
                                      
                                         <?php } else { ?>
                                         
                                         <label><input type="checkbox" id="<?php echo $result_test->id_leisure; ?>" class="height_radio" name="leisure" value="<?php echo $result_test->name; ?>" /><?php echo $result_test->name; ?></label></br>
                                         
                                         <?php 
                                         }
                                         } ?>
                                        
                                         
                                        <?php if($flag==1) { ?>
                                         
                                         <label><input type="checkbox" id="24" class="height_radio own_words" name="leisure" value="own_words" checked="checked"/>in my own words</label></br>
                                       <?php } else { ?>
                                          <label><input type="checkbox" id="24" class="height_radio own_words" name="leisure" value="own_words" />in my own words</label></br>
                                        <?php } ?>   
                                       

                                  
                                        
                                    </div>
                                    
                                    <div class="height_own_words">
                                        
                                        <textarea name="height_own">
                                         
                                             <?php if($flag==1)
                                            {
                                            echo $detail_info['leisure_value']; 
                                            
                                            }
                                            else 
                                            {
                                                
                                            } ?>  
                                        </textarea>
                                        <p>ok</p>
                                        
                                    </div>
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

