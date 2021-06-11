<section class="section-13">
    <div class="container">
        <div class="wy-content  footer" style="">
            <div class="wy-inner">
                <p><span>Copyright © {{ now()->year }} <span class="company-name">PurpleRelax</span> | All rights reserved</span></p>
                <div class="DMCA_Logo">
                    <a class="no-tracking" href="" title="DMCA Protection Status" target="_blank">
                        <img src="{{ asset('/') }}purplerelaxFiles/shared_files/dmca.png" alt="DMCA Protection Status">
                    </a>
                </div>
            </div>
        </div>
        <div class="floating-bar floating-bottom" data-class=".shop-link, .shop-link a" data-ticktopelm="" data-tickbottomelm=".section-1">
            <div class="container">
                <div class="inner">
                    <div class="floating-desc">
                        <p><img src="{{ $product->logo_url }}" alt="logo" class=""></p>
                        <p><span>Nabavi <b>{{ $product->product_name }}</b> već danas!</span></p>
                    </div>
                    <a href="{{$checkoutView}}" class="btn-floating-bar " style="background-color: #00C249">
                        <p>PORUČITE ODMAH</p>
                    </a>
                </div>
            </div>
        </div>
    </div> <!--/container-->
</section> <!-- /row-wrapper-->
</main>
<footer>
    <div class="DMCA_Logo">
        <a class="no-tracking" href="" title="DMCA Protection Status" target="_blank">
            <img src="{{ asset('/') }}purplerelaxFiles/shared_files/dmca.png" alt="DMCA Protection Status">
        </a>
    </div>
</footer>
</div>
<script src="{{ asset('/') }}shared_files/floating_bar.js"></script>
@include('components.pixel_footer')
</body>
</html>