$('form').submit(function(){
    $(this).find(':submit').attr('disabled','disabled');
});

$(window).on('pageshow', function(){
    let selectedId = $('input[name="quantity"]:checked').val();

    let priceOld = document.getElementById("product" + selectedId).value;
    let priceNew = document.getElementById("product" + selectedId).placeholder;

    $('.old_price').text(priceOld + ' RSD');
    $('.new_price').text(priceNew);
});

$('input[type=radio][name=quantity]').click(function() {

    let id = this.value;
    let listSame = $("form").find('.productQuantity' + id);

    listSame.each(function(){
        $(this).attr("checked","checked");
    });

    $old_price = document.getElementById("product" + id).value;
    $new_price = document.getElementById("product" + id).placeholder;

    $old_price = $old_price + " RSD";

    try {
        $('.old_price').text($old_price);
        $('.new_price').text($new_price);
    } catch (err) {
        // console.log("Not able to show price on radio btn change!");
    }
});