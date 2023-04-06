@include('components.pixel_footer')
<script type="text/javascript">
    function getSelectedValues() {
        let selectedRadioButton = $('input[name="quantity"]:checked');
        let amount = parseFloat($(selectedRadioButton).attr('data-product-amount'));
        let quantity = $(selectedRadioButton).attr('data-product-quantity');
        let is_free_shipping = $(selectedRadioButton).attr('is-free-shipping');
        let selected_product_name = $(selectedRadioButton).attr('data-product-name');
        let selected_product_price = $(selectedRadioButton).attr('data-product-amount');

        if(is_free_shipping==="0"){
            amount += parseInt("{{ $product->shipping_cost }}");
            $('#noFreeShippingDisplay').show();
            $('#freeShippingDisplay').hide();
        } else {
            $('#freeShippingDisplay').show();
            $('#noFreeShippingDisplay').hide();
        }

        $('#productName').html(selected_product_name);
        $('#productPrice').html(selected_product_price + ' {{$singlePrice['currency']}}');

        $('#totalPriceDisplay').html(amount + ' {{$singlePrice['currency']}}');

        let youSaved = parseInt($(selectedRadioButton).parents('.productRadioListItem').find('.savePrice').html());
        if(is_free_shipping==="1") {
            youSaved += parseInt("{{ $product->shipping_cost }}");
        }
        $('#youSaveDownDisplay').html(youSaved + ' {{ $singlePrice['currency'] }}');
        $('#totalDownDisplay').html(amount + ' {{ $singlePrice['currency'] }}');
    }

    $('input[type=radio][name=quantity]').click(function() {
        getSelectedValues();
    });

    $(window).on('pageshow', getSelectedValues);

</script>
