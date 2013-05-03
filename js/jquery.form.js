$.validator.setDefaults({
        submitHandler: function() { $("#contact-right").html("Thank you for your message!");}
    });
      $(document).ready(function(){
        $("#contactForm").validate();
      });