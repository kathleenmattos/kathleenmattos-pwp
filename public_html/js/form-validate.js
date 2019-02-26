$(document).ready(function() {

	/**
	 * jQuery Validate Function
	 *
	 * This function provides front-end validation for your form.
	 * If all tests set up here pass, the form data is AJAX submitted
	 * to the mailer.php file.
	 *
	 * Update this file as needed for your form.
	 * All ids and name values must match up to your form here.
	 *
	 * @author Rochelle Lewis <rlewis37@cnm.edu>
	 **/

	/*
	begin validate function here
	 */
	$("#contactMe").validate({

		//setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",
		//rules here define what is good or bad input, and each rule starts with the form input element's name
		rules: {
			textName: {
				required: true,
			},
			textEmail: {
				email: true,
				required: true
			},
			textMessage: {
				required: true,
				maxlength: 2000
			},
			textSubject: {
				required: false,
				maxlength: 64
			}
		},

		//error message to display to the end user when the rules above don't pass.
		messages: {
			textName: {
				required: "Please add your name."
			},
			textEmail: {
				email: "Please add a real email.",
				required: "Please add your email."
			},
			textMessage: {
				required: "Please add a message.",
				maxlength: "Your message has exceeded the character limit.",
				minLength: "Please add more text to your message.",
			},
			textSubject: {
				maxlength: "Your subject has exceeded the character limit."
			}
		},
		submitHandler: function(form) {
			$("#contactMe").ajaxSubmit({
				type: "POST",
				url:$("#contactMe").attr("action"),
				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#output-area").css("display", "");

					// write the server's reply to the output area
					$("#output-area").html(ajaxOutput);

					// reset the form if it was successful
					if($(".alert-success").length >= 1) {
						$("#contactMe")[0].reset();
					}
				}
			})
		}


	});/* end validate function here */
});/*end document.ready()*/