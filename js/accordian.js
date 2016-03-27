// hover effect
$(document).ready(function() {
  $('div.demo-show p').add('div.demo-show2 p').hover(function() {
    $(this).addClass('hover');
  }, function() {
    $(this).removeClass('hover');
  });
});

// independently show and hide
$(document).ready(function() {
  $('div.demo-show:eq(0) > div').hide();  
  $('div.demo-show:eq(0) > p').click(function() {
      alert("ddd");
    $(this).next().slideToggle('fast');
  });
});

// one showing at a time

$(document).ready(function() {
  $('div.demo-show:eq(1) > div:gt(0)').hide();  
  $('div.demo-show:eq(1) > p').click(function() {  alert("ddd1");
    $(this).next('div:hidden').slideDown('fast')
    .siblings('div:visible').slideUp('fast');
  });
});


//simultaneous showing and hiding

$(document).ready(function() {
  $('div.demo-show2:eq(0) > div').hide();
  $('div.demo-show2:eq(0) > p').click(function() { 
     
      if($(this).children('a').text()=='View ')
      { 
         $('div.demo-show2:eq(0) > p a').html("View ");
         $(this).children('a').html('Close');
      }
      else
      { 
           $(this).children('a').html('View ');
      }
      
      
    $(this).next('div').slideToggle('fast')
    .siblings('div:visible').slideUp('fast');
  });
});

//queued showing and hiding
$(document).ready(function() {
  $('div.demo-show2:eq(1) > div').hide();  
  $('div.demo-show2:eq(1) > p').click(function() {  
    var $nextDiv = $(this).next();
    var $visibleSiblings = $nextDiv.siblings('div:visible');

    if ($visibleSiblings.length ) {
      $visibleSiblings.slideUp('fast', function() {
         
        $nextDiv.slideToggle('fast');
      });
    } else {
       $nextDiv.slideToggle('fast');
    }
  });
});


