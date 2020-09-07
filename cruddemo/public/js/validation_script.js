

// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        name: "required",
        num: "required",
        about:"required",
        pnum:{
            required:true,
            number:true
        },
        gnum:{
        required:true,
        number:true
        },
        pass: {
          required: true,
          minlength: 5
        }


      },
      // Specify validation error messages
      messages: {
        name: "Please enter your name",
        num: "Please enter your number",
        about:"Plase enter about store",
        pnum:{
            required:"Please enter pan number",
            number:"Please enter valid Pan number"
        },
        gnum:{
            required:"Please enter gst number",
            number:"Please enter valid gst number"
        },
        pass: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },

      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
  
  