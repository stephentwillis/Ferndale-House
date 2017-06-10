$(document).ready(function() {

	setInterval('testimonials()', 5000);

	$(".form-control").blur(function() {
		var $this = $(this);

		if ($this.val() == "" || $.trim($this.val()) == "") {
			$this.addClass("error");
		} else {
			$this.removeClass("error");
		}
	});

	$("#submit").click(function(e) {
		e.preventDefault;

		$(".form-control").trigger("blur");

		if (!$(".form-control").hasClass("error")) {

			try {
				$("#form-error").hide();

				$("#enquiry-form").submit();

				return true;			
			} catch(e) {
				console.log(e);
			}
		} else {
			$("#form-error").show();
		}

		return false;
	});
});

function testimonials() {
    var active = $('.testimonial.active');
    var next = active.next().length > 0 ? active.next() : $('.testimonial:first');

    active.fadeOut(1500, function () {// fade out the top image          
        active.removeClass('active'); // reset the z-index and unhide the image
        next.fadeIn(1500).addClass('active'); // make the next image the top one
    });

    return false;
}