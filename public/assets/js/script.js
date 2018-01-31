console.log("script file working");

$(document).ready(function(){
    var form = $('#inquiry-form');

    $(form).submit(function(event) {
        var formData = $(form).serialize();
        event.preventDefault();
        console.log("form submitted");
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function() {
            console.log( "success" );
        }).fail(function() {
            console.log( "error" );
        })
    });
});