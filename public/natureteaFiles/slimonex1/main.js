$(document).ready(function() {
    $('.change-package-selector2').on('change', (function() {
        $('.item-gift').hide();
        $('.' + $(this).val() + '_pack').show();
        $('.change-package-selector2 [value="' + $(this).val() + '"]').prop("selected", true);
    }));

    $(".for_scroll").click(function() {
        $("html, body").animate({
            scrollTop: $("form").offset().top - 300
        }, 'slow');
        return false;
    });
});