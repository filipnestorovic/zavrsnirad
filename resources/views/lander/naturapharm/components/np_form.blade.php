<form action="{{$orderRoute}}" data-xd="t41" method="POST">
    {{csrf_field()}}
    @include('lander.naturapharm.components.form_hidden_fields')
    <input name="name" placeholder="Ime i prezime" type="text" value="" autocomplete="off" />
    <input class="only_number" name="phone" placeholder="Broj telefona" type="tel" value="" autocomplete="off" />
    <div>
        @foreach($prices as $singlePrice)
            <input type="hidden" id="product{{ $singlePrice['quantity'] }}" value="{{ $singlePrice['originalPrice'] }}" placeholder="{{ $singlePrice['amount'] }}"/>
            <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="productLabel{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                   @if($singlePrice['is_default']) checked @endif
                   @if(old('quantity') == $singlePrice['quantity']) checked @endif >
            <label for="productLabel{{$singlePrice['quantity']}}">
                {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
            </label>
            <br>
        @endforeach
    </div>
    <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
    <button type="submit" class="sr1__btn js_submit button__text">Naručiti odmah</button>
</form>
<style>
    .freeShippingDiv {
        color: rgb(161, 22, 121);
        text-align: center;
        margin-bottom: 20px;
        display: none;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
<script>
    $('.quantity').click(function () {
        let fsh = $(this).attr('placeholder');
        if(parseInt(fsh) === 1) {
            $(this).parent().next('.freeShippingDiv').slideDown();
        } else {
            $(this).parent().next('.freeShippingDiv').slideUp();        }
    })
</script>