$(function () {

    "use strict";

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#contact-form').validator();


    // when the form is submitted
    $('#contact-form').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "https://formsubmit.co/mdarifulislam3579@gmail.com";

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: Swal.fire(
                    'Thank you!',
                    'For send me a Message',
                    'success'
                  )
              
                
                
            });
            $('#contact-form')[0].reset();
            return false;
        }
    })
});