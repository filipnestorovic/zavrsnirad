<div class="floating-bar floating-top floating-ft" data-class=".btn" data-ticktopelm=".section-1" data-tickbottomelm="">
    <div class="container">
        <div class="inner">
            <div class="floating-desc">
                <div class="logo">
                    <img src="{{ $product->logo_url }}" alt="Logo" class="no-lazy">
                </div>
                @if($product->country_code === "rs")
                    <div class="right-ft">Nabavi <b>{{ $product->product_name }}</b> već danas!<a href="{{$checkoutView}}">KUPI ODMAH</a></div>
                @elseif($product->country_code === "bg")
                    <div class="right-ft">Получи твоя <b>{{ $product->product_name }}</b> днес!<a href="{{$checkoutView}}">КУПИ СЕГА</a></div>
                @endif
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/floating_bar.js"></script>