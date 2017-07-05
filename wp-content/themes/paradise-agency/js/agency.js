/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery(function() {
    jQuery('a.page-scroll').bind('click', function(event) {
        var jQueryanchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery(jQueryanchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
jQuery('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
jQuery('.navbar-collapse ul li a').click(function() {
    jQuery('.navbar-toggle:visible').click();
});


jQuery('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

jQuery(window).scroll(function() {
    if ( jQuery(window).scrollTop() > amountScrolled ) {
        jQuery('a.back-to-top').fadeIn('slow');
    } else {
        jQuery('a.back-to-top').fadeOut('slow');
    }
});
function pagi(  id_pagi, id_content, id_contentinner){
    jQuery(document).ready(function(){
        jQuery(document).on('click','#'+id_pagi, function(e){
            e.preventDefault();
            var link = jQuery(this).attr('href');
            jQuery('#'+id_content).html('Loading...');
            jQuery('#'+id_content).load(link+' #'+id_contentinner);

        });

    });

}
pagi('my-pagination a','content','contentinner');
pagi('my-pagination1 a','blog_content','blog_contentinner');
pagi('my-pagination2 a','gallery_content','gallery_conentinner');
pagi('my-pagination3 a','video_content','video_contentinner');




