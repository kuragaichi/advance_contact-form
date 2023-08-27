$(function() {
    $('#postcode').on('input', function() {
        var postcode = $(this).val();
        if (postcode.length === 8 && postcode.match(/^\d{3}-\d{4}$/)) {
            $.getJSON('https://api.jpostal.jp/zipsearch?postcode=' + postcode, function(data) {
                if (data.length > 0) {
                    var address = data[0].address;
                    $('#address').val(address);
                }
            });
        }
    });
});