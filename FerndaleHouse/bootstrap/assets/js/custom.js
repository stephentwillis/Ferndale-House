jQuery(document).ready(function() {

	jQuery(".form-control").blur(function() {
		var $this = jQuery(this);

		if ($this.val() == "" || $.trim($this.val()) == "") {
			$this.addClass("error");
		} else {
			$this.removeClass("error");
		}
	});

	jQuery("#submit").click(function(e) {
		e.preventDefault;

		jQuery(".form-control").trigger("blur");

		if (!jQuery(".form-control").hasClass("error")) {

			try {
				jQuery("#form-error").hide();

				jQuery("#enquiry-form").submit();

				return true;			
			} catch(e) {
				console.log(e);
			}
		} else {
			jQuery("#form-error").show();
		}

		return false;
	});

});
