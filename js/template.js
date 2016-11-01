jQuery(function(){
    $('.email-placeholder').on('click', function(e) {
        e.preventDefault();
        var placeholder = $(this).text().toString();
        jQuery("#template-redactor").redactor('insert.html', placeholder);
    });
});