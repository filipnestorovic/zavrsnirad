$(document).ready(function() {

    let initialQuantity = $('.change-package-selector2').val();
    $('.item-gift').hide();
    $('.' + initialQuantity + '_pack').show();
    $('.change-package-selector2 [value="' + initialQuantity + '"]').prop("selected", true);

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
