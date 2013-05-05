$.validator.setDefaults({
        submitHandler: function() { contactForm.submit(); }
});
$(document).ready(function(){
    $("#contactForm").validate();
});