$(function(){
  var menuwidth  = 200; // 杈规爮瀹藉害
  var menuspeed  = 400; // 杈规爮婊戝嚭鑰楄垂鏃堕棿
  
  var $bdy       = $('body');
  var $container = $('#pgcontainer');
  var $burger    = $('#hamburgermenu');
  var negwidth   = "-"+menuwidth+"px";
  var poswidth   = menuwidth+"px";
  
  $('.menubtn').on('click',function(e){
    if($bdy.hasClass('openmenu')) {
      jsAnimateMenu('close');
    } else {
      jsAnimateMenu('open');
    }
  });
  
  $('.overlay').on('click', function(e){
    if($bdy.hasClass('openmenu')) {
      jsAnimateMenu('close');
    }
  });
  
  function jsAnimateMenu(tog) {
    if(tog == 'open') {
      $bdy.addClass('openmenu');
      
      $container.animate({marginRight: negwidth, marginLeft: poswidth}, menuspeed);
      $burger.animate({width: poswidth}, menuspeed);
      $('.overlay').animate({left: poswidth}, menuspeed);
    }
    
    if(tog == 'close') {
      $bdy.removeClass('openmenu');
      
      $container.animate({marginRight: "0", marginLeft: "0"}, menuspeed);
      $burger.animate({width: "0"}, menuspeed);
      $('.overlay').animate({left: "0"}, menuspeed);
    }
  }
});

$(document).ready(function(){
    var s=document.location;
    $("#hamburgermenu a").each(function(){
        if(this.href==s.toString().split("#")[0]){$(this).addClass("on");return false;}
    });
});



$(document).ready(function() { 
var tags_a = $("#divTags a"); 
tags_a.each(function(){ 
var x = 9; 
var y = 0; 
var rand = parseInt(Math.random() * (x - y + 1) + y); 
$(this).addClass("tags"+rand); 
}); 
}) 