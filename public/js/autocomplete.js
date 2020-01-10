$(function () {

    $(".productAutocomplete").autocomplete({
        source: '/admin/product/autocomplete'
    });

    $(".clientAutocomplete").autocomplete({
        source: '/admin/client/autocomplete'
    });

});