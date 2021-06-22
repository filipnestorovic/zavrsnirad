<section class="section-8">
    <div class="container">
        <div class="special_promo ">
            <div class="w_outer">
                <div class="w_inner">
                    <div class="w_item ">
                        <div class="w_desc">
                            <h2><span style="background-color: #ff9900;">SPECIJALNA </span><br><span style="background-color: #ff9900;">PONUDA</span></h2>
                            <h3>Naručite danas i <br>ostvarite 40% popusta</h3>
                            <p><strong>Ovaj popust važi još samo malo.</strong><br><strong>Količine su ograničene - poručite odmah!</strong></p>
                            <p><a href="{{$checkoutView}}" class="btn">Ostvarite 40% popusta</a></p>
                            <ul>
                                <li><strong>Garantujemo vrhunski kvalitet<br></strong>Potpuni povraćaj novca za sve naše proizvode.</li>
                                <li><strong>Povrat bez komplikacija<br></strong>Ukoliko niste potpuno zadovoljni, vratite proizvod u roku od 30 dana i dobićete novac nazad.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--/container-->
</section> <!-- /row-wrapper-->
<section class="section-10">
    <div class="container">
        <div class="wy-content w_content_4 footer" style="background-color:#EDEDED;">
            <div class="wy-inner">
                <p>Copyright {{ now()->year }} | {{ isset($product->brand_name) ? $product->brand_name : '' }} | Sva prava zadržana</p>
                <div class="DMCA_Logo">
                    <a class="no-tracking" href="" target="_blank">
                        <img src="{{ asset('/') }}shared_files/dmca.png" alt="DMCA Protection Status">
                    </a>
                </div>
            </div>
        </div>
        @include('lander.shared_files.floating_bar')
    </div> <!--/container-->
</section> <!-- /row-wrapper-->
@include('components.company_footer')
</main>
</div>
@include('components.pixel_footer')
</body>
</html>