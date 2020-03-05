
// Responsive menu
 
(function ($) {
	"use strict";

    jQuery(document).ready(function($){

        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();
        
        $("cssmenu").menumaker({
            title: "Menu",
            format: "multitoggle"
        });
    });
    jQuery(window).load(function(){
    });
}(jQuery));	
        
        