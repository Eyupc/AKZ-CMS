jQuery(function() {
    jQuery('.compteur').countdown('2020/06/23 19:00', function(event) {
        jQuery('.compteur > .days > span').text(event.strftime('%D'));
        jQuery('.compteur > .hours > span').text(event.strftime('%H'));
        jQuery('.compteur > .minuts > span').text(event.strftime('%M'));
        jQuery('.compteur > .seconds > span').text(event.strftime('%S'));
    });
    jQuery(document).on('submit', 'form', function() {
        var tthis = jQuery(this),
            action = tthis.attr('action'),
            code = jQuery('> input[type="text"]', tthis).val(),
            body = jQuery('body');
        jQuery('> .error', body).remove();
        jQuery.post(action, {
            code: code
        }, function(data) {
            if (data.error) {
                body.prepend('<div class="error">' + data.message + '</div>');
            } else {
                body.prepend('<div class="error">' + data.message + '</div>');
                window.location = data.location;
            }
        }, 'json');
        return false;
    })
});