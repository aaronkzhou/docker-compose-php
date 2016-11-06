/*-----------------------------------------------------------------------------------*/
/* 		Mian Js Start 
/*-----------------------------------------------------------------------------------*/
$(document).ready(function($) {
"use strict"
/*-----------------------------------------------------------------------------------*/
/* 	LOADER
/*-----------------------------------------------------------------------------------*/
$("#loader").delay(500).fadeOut("slow");
/*-----------------------------------------------------------------------------------*/
/* 	GALLERY SLIDER
/*-----------------------------------------------------------------------------------*/
$('.gallery-slider').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
}});
/*-----------------------------------------------------------------------------------*/
/*  CUBE PORTFOLIO
/*-----------------------------------------------------------------------------------*/
$('.ajax-work').cubeportfolio({
     filters: '#ajax-work-filter',
     loadMore: '#ajax-loadMore',
     loadMoreAction: 'click',
     layoutMode: 'grid',
     defaultFilter: '*',
     animationType: 'scaleSides',
     gapHorizontal: 30,
     gapVertical: 30,
     gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1500,
            cols: 3
        }, {
            width: 1100,
            cols: 3
        }, {
            width: 480,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
     caption: 'zoom',
     displayType: 'lazyLoading',
     displayTypeSpeed: 400,
     // singlePage popup
     singlePageDelegate: '.cbp-singlePage',
     singlePageDeeplinking: true,
     singlePageStickyNavigation: true,
     singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
     singlePageCallback: function(url, element) {
// to update singlePage content use the following method: this.updateSinglePage(yourContent)
var t = this;
 $.ajax({
     url: url,
     type: 'GET',
     dataType: 'html',
     timeout: 10000
 })
 .done(function(result) {
    t.updateSinglePage(result);
 })
  .fail(function() {
     t.updateSinglePage('AJAX Error! Please refresh the page!');
      });
   },
});
/*-----------------------------------------------------------------------------------*/
/*  SLIDER REVOLUTION
/*-----------------------------------------------------------------------------------*/
// turn off fullscreen mode in mobile
if (is_mobile()) {
        var fullScreen = 'off';
} else  {
        var fullScreen = 'on';
}

jQuery('.tp-banner').show().revolution({
    dottedOverlay:"none",
    delay:6000,
    startwidth:1170,
    startheight:900,
    navigationType:"bullet",
    navigationArrows:"solo",
    navigationStyle:"custom",
    parallax:"mouse",
    parallaxBgFreeze:"on",
    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],                                               
    keyboardNavigation:"on",                        
    shadow:0,
    fullWidth:"on",
    fullScreen: fullScreen,
    shuffle:"off",                      
    autoHeight:"off",                       
    forceFullWidth:"off",   
    fullScreenOffsetContainer:"",
    hideTimerBar:"on",
    onHoverStop:"off",
    hideNavDelayOnMobile:500,
    hideThumbsOnMobile:"on",
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"on",

});
/*-----------------------------------------------------------------------------------*/
/*  TESTIMONIAL SLIDER
/*-----------------------------------------------------------------------------------*/
$(".single-slide").owlCarousel({ 
    items : 1,
    autoplay:true,
    loop:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    singleItem  : true,
    navigation : true,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    pagination : true,
    animateOut: false
});
$('.item-slide').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        900:{
            items:3
        },
        1200:{
            items:4
        }
    }
});
/*-----------------------------------------------------------------------------------*/
/*      Active Menu Item on Page Scroll
/*-----------------------------------------------------------------------------------*/
$(window).scroll(function(event) {
        Scroll();
}); 
$('.scroll a').click(function() {  
    $('html, body').animate({scrollTop: $(this.hash).offset().top -0}, 1000);
        return false;
});
// User define function
function Scroll() {
var contentTop      =   [];
var contentBottom   =   [];
var winTop      =   $(window).scrollTop();
var rangeTop    =   0;
var rangeBottom =   1000;
$('nav').find('.scroll a').each(function(){
    contentTop.push( $( $(this).attr('href') ).offset().top);
        contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
})
$.each( contentTop, function(i){
if ( winTop > contentTop[i] - rangeTop ){
    $('nav li.scroll')
      .removeClass('active')
        .eq(i).addClass('active');          
}}  )};
});
/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM
/*-----------------------------------------------------------------------------------*/
function checkmail(input){
  var pattern1=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(pattern1.test(input)){ return true; }else{ return false; }}     
    function proceed(){
        var name = document.getElementById("name");
        var email = document.getElementById("email");
        var company = document.getElementById("company");
        var msg = document.getElementById("message");
        var errors = "";
    if(name.value == ""){ 
        name.className = 'error';
          return false;}    
          else if(email.value == ""){
          email.className = 'error';
          return false;}
            else if(checkmail(email.value)==false){
                alert('Please provide a valid email address.');
                return false;}
            else if(company.value == ""){
                company.className = 'error';
                return false;}
           else if(msg.value == ""){
                msg.className = 'error';
                return false;}
           else 
          {
$.ajax({
    type: "POST",
    url: "php/submit.php",
    data: $("#contact_form").serialize(),
    success: function(msg){
    //alert(msg);
    if(msg){
        $('#contact_form').fadeOut(1000);
        $('#contact_message').fadeIn(1000);
            document.getElementById("contact_message");
         return true;
        }}});
}};

//////////////////
// IS MOBILE ?? //
//////////////////
var is_mobile = function()  {
        var agents = ['android', 'webos', 'iphone', 'ipad', 'blackberry','Android', 'webos', ,'iPod', 'iPhone', 'iPad', 'Blackberry', 'BlackBerry'];
        var ismobile=false;
        for(var i in agents) {

            if (navigator.userAgent.split(agents[i]).length>1) {
                ismobile = true;
              }
        }
        return ismobile;
}

