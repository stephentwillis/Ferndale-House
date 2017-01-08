// Manages global js

jQuery.noConflict();

jQuery(document).ready(function () {

    // Mega Drop Down
    jQuery("#nav-main ul li a.top").mouseover(function () {
        jQuery(this).parent().addClass("over");
        jQuery(this).addClass("LinkOver");
        jQuery(this).siblings("div").show();
    });
    jQuery("#nav-main ul li").mouseleave(function () {
        jQuery(this).removeClass("over");
        jQuery(this).children("a").removeClass("LinkOver");
        jQuery(this).children("div").hide();
    });

    jQuery("#nav-main .links li").hover(function () {
        jQuery(this).children(".preview").show();
    }, function () {
        jQuery(this).children(".preview").hide();
    });

    jQuery("#nav-main .links .preview").hover(function () {
        $this = jQuery(this);
        $this.parent("li").addClass("HoverOver");
    }, function () {
        $this = jQuery(this);
        $this.parent("li").removeClass("HoverOver");
    });

    jQuery("#nav-main #SmileServices").mouseover(function () {
        $this = jQuery(this);
        $this.children("ul").show();
    });
    jQuery("#nav-main #SmileServices").mouseleave(function () {
        $this = jQuery(this);
        $this.children("ul").hide();
    });

    setInterval('slideshow()', 5000);
    setInterval('testimonials()', 5000);

    jQuery(".GalleryItem:first").addClass("active");
    jQuery(".testimonial:first").addClass("active-testimonial");
	
	
	// Setup modal overlay
    /*jQuery("#overlay-blind").click(function () {
        jQuery("#overlay-blind").hide();
        jQuery("#overlay-window").hide();
    });
    jQuery("#overlay-close").click(function () {
        jQuery("#overlay-blind").hide();
        jQuery("#overlay-window").hide();
        return false;
    });



    // Positioning the overlay window...
    repositionOverlayWindow();
    window.onresize = repositionOverlayWindow;
	
	
	// Pop up cookie
	var $cookieVal = jQuery.cookie("FHDP-Cookie");
    var $popup = jQuery("#overlay-window");
    var $button = jQuery("#overlay-window #overlay-close");
    var $domain = document.domain;
    
    if ($cookieVal != "accepted")
    {   
        ShowOverlay();
        
        $button.live('click', function() {
            jQuery.cookie("FHDP-Cookie", "accepted", { expires: 1, path: '/', domain: $domain });
            $popup.hide();
        });
    }
    else
    {
        $popup.hide();
    }*/

});

// ==========
// Gallery
// ==========

function slideshow() {

    active = jQuery('.active');
    next = (jQuery('.GalleryItem.active').next().length > 0) ? jQuery('.active').next() : jQuery('.GalleryItem:first');

    next.css('z-index', 2); // move the next image up the pile

    active.fadeOut(1500, function () {// fade out the top image          
        active.css('z-index', 1).fadeIn(1500).removeClass('active'); // reset the z-index and unhide the image
        next.css('z-index', 3).addClass('active'); // make the next image the top one
    });

    return false;
}


// ==========
// Testimonials
// ==========

function testimonials() {

    a = jQuery('.active-testimonial');
    b = (jQuery('.testimonial.active-testimonial').next().length > 0) ? jQuery('.active-testimonial').next() : jQuery('.testimonial:first');

    b.css('z-index', 2); // move the next image up the pile

    a.fadeOut(1500, function () {// fade out the top image          
        a.css('z-index', 1).fadeIn(1500).removeClass('active-testimonial'); // reset the z-index and unhide the image
        b.css('z-index', 3).addClass('active-testimonial'); // make the next image the top one
    });

    return false;
}


// ==========
// Pop Up
// ==========

function ShowOverlay() {
    jQuery("#overlay-blind").show();
    jQuery("#overlay-window").show();
    /*jQuery("#overlay-window > #textwrapper").html("<img src='http://www.rsc.org.uk/images/structure/waiting.gif' style='float:none; margin-left:10px; margin-top:10px;' alt='Loading...' />");
    jQuery("#overlay-window h2").html(title);
    jQuery("#overlay-window > #textwrapper").load(content);*/
}

function repositionOverlayWindow() {
    var leftPos = (jQuery(window).width() - 380) / 2;
    var topPos = (jQuery(window).height() - 550) / 4;
    jQuery("#overlay-window").css("left", leftPos + "px");
    jQuery("#overlay-window").css("top", topPos + "px");
}