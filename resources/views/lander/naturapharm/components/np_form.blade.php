<form action="{{$orderRoute}}" data-xd="t41" method="POST">
    {{csrf_field()}}
    @include('lander.naturapharm.components.form_hidden_fields')
    <input name="name" placeholder="Ime i prezime" type="text" value="" autocomplete="off" />
    <input class="only_number" name="phone" placeholder="Broj telefona" type="tel" value="" autocomplete="off" />
    <div>
        @foreach($prices as $singlePrice)
            <input type="hidden" id="product{{ $singlePrice['quantity'] }}" value="{{ $singlePrice['originalPrice'] }}" placeholder="{{ $singlePrice['amount'] }}"/>
            <input type="radio" name="quantity" value="{{ $singlePrice['quantity'] }}" id="productLabel{{ $singlePrice['quantity'] }}"
                   @if($singlePrice['is_default']) checked @endif
                   @if(old('quantity') == $singlePrice['quantity']) checked @endif >
            <label for="productLabel{{$singlePrice['quantity']}}">
                {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
            </label>
            <br>
        @endforeach
    </div>
    <button type="submit" class="sr1__btn js_submit button__text">Naručiti odmah</button>
</form>