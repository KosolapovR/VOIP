
$(document).ready(function(){
    PopupHide();
    MenuHide();
    
$('.order, .sub__header3--320, .call320, .sub__header3').on('click', function(){

    PopupShow();
});


$('.pop-up-menu--close').children().on('click', function(){

        MenuHide();
 });
    
$('.hamburger').on('click', function(){
    MenuShow();
});

$('#close').on('click', function(){
   PopupHide();
});
    
function PopupHide() {
    $('#popup').hide();
   
}
    
function MenuHide() {
     
     $('#popup1').css('height', '0%');
}

function MenuShow(){
     $('#popup1').css('height', '100%');
    $('#popup1').show();
}
    
function PopupShow() {
     $('#popup').css('height', '100%');
    $('#popup').show();
}
      var module = document.querySelector(".description__text");

$clamp(module, {clamp: 5});
    
});



