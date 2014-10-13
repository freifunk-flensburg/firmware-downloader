
$(document).ready(function() {
    $('#download-form')
    $('#download-form').submit(function( event ) {
        event.preventDefault();

        var type = '',
            fileExtension = '',
            router;

        switch ($('#download-form-type').val()) {
            case '0':
                type = 'factory';
                break;
            case '1':
                type = 'sysupgrade';
                fileExtension = '-sysupgrade';
                break;
            default:
                type = 'factory';
        }

        router = $('#download-form-router').val();

        window.location.href = type+'/'+router+fileExtension+'.bin';

        return false;
    });
});