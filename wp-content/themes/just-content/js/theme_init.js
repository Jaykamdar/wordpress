/** jQuery for the theme functionality **/
jQuery(document).ready(function($){
    
 $('.main-menu').slicknav({
    label:init_vars.label
 });   
 $('.kt-image-container').hover(function(){
    $('.kt-overlay',this).fadeIn(1000);  
 
 },function(){
    $('.kt-overlay',this).fadeOut(500);  
 });
});