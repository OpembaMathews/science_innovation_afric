/**
* PHP Email Form Validation - v3.6
* URL: https://bootstrapmade.com/php-email-form/
* Author: BootstrapMade.com
*/
(function () {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!');
        return;
      }
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error);
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

 // Function to submit the form data via AJAX
function php_email_form_submit(thisForm, action, formData) {
  // Send a POST request to the specified action URL with the form data
  fetch(action, {
    method: 'POST',
    body: formData,
    headers: {'X-Requested-With': 'XMLHttpRequest'} // Set the request header
  })
  .then(response => {
    // Check if the response status is OK (200)
    if (response.ok) {
      // If OK, return the response text (which may contain success or error information)
      return response.text();
    } else {
      // If not OK, throw an error with status, status text, and request URL information
      throw new Error(`${response.status} ${response.statusText} ${response.url}`);
    }
  })
  .then(data => {
    // After a successful response, remove the loading indicator
    thisForm.querySelector('.loading').classList.remove('d-block');

    // Check the response data for success ('OK') or an error message
    if (data.trim() == 'OK') {
      // If success, display the success message and reset the form
      thisForm.querySelector('.sent-message').classList.add('d-block');
      thisForm.reset();
    } else {
      // If an error occurred, throw an error with the received error message
      throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
    }
  })
  .catch((error) => {
    // Catch and handle any errors that occurred during the request
    displayError(thisForm, error);
  });
}


  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

})();
