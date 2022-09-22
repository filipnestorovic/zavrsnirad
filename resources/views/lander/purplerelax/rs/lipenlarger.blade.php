<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/lipenlarger/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/lipenlarger/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/lipenlarger/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&amp;family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&amp;display=swap"
        rel="stylesheet">
    <style>
        /* Icons */
        @font-face {
            font-family: 'slick';
            font-weight: normal;
            font-style: normal;
            src: url('{{ asset('/') }}fonts/slick.eot');
            src: url('{{ asset('/') }}fonts/slickd41d.eot?#iefix') format('embedded-opentype'), url('{{ asset('/') }}fonts/slick.woff') format('woff'), url('{{ asset('/') }}fonts/slick.ttf') format('truetype'), url('{{ asset('/') }}fonts/slick.svg#slick') format('svg');
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="bl1-1">
    <div class="bl1">
        <div class="lm">
            <p class="main-text">LEPE I PUNE USNE BEZ SKUPIH TRETMANA I HIRURGIJE</p>
            <div class="b1-d">
                <p class="b1-mp">PREDSTAVLJAMO VAM</p>
                <p class="b1-p">Lip Enlarger za povećavanje usana</p>
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/sale.png" class="b1-sale">
                <div class="b1-price">
                    <p class="old-prise">
                        {{ $prices[1]['originalPrice'] }} <span class="b1-wal">{{ $prices[1]['currency'] }}</span>
                    </p>
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/line.png" class="line" width="70">
                    <p class="new-prise">
                        {{ $prices[1]['amount'] }}
                        <span class="b1-wal">{{ $prices[1]['currency'] }}</span></p>
                    <a href="#order_form" class="button fform">Poručite sada</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="bl2-2">
    <div class="bl2">
        <p class="main-text">
            OPIS PROIZVODA
        </p>
        <p class="bl2-m">
            Daće vašim usnama punoću i veoma lep izgled. Potpuno je prirodan, ne koriste se nikakva hemija i apsolutno
            je bezbolan.
            Radi na principu vakuma koji uvlači usne u silikonski oblik koji ima konture savršenih usana.
            Na taj način se pojačava kolagen usana, istežu se i postaju baš onakve kakve želite da budu.
        </p>
        <div class="b2-fx">
            <div class="b2-l">
                <ul class="b2-u">
                    <li>· Proizvod je testiran</li>
                    <li>· Odobren je od strane stručnjaka</li>
                    <li>· Vrlo je kvalitetan i pouzdan</li>
                    <li>· Daje odlične rezultate</li>
                    <li>· Radi punjivu bateriju i puni se na USB kabl</li>
                </ul>
            </div>
            <div class="b2-r">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/bl2-img.png" class="bl2-img" alt="">
            </div>
        </div>
    </div>
</section>
<section class="bl4-4">
    <div class="bl4">
        <p class="main-text">
            NAČIN PRIMENE
        </p>
        <div class="bl4-f">
            <div class="bl4-d">
                <div class="bl4-p">1. Uključite aparat</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b1.png" class="bl4-img" alt="">
                </div>
            </div>
            <div class="bl4-d">
                <div class="bl4-p">2. Osetićete kako vakumski uvlači vazduh</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b2.png" class="bl4-img" alt="">
                </div>
            </div>
            <div class="bl4-d">
                <div class="bl4-p">3. Navlažite usne i naslonite uređaj tako da vakumski uvuče usne</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b3.png" class="bl4-img" alt="">
                </div>
            </div>
            <div class="bl4-d">
                <div class="bl4-p">4. Držite ga 1 do 2 minuta više puta dnevno - iznenadiće vas pozitivan efekat</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b4.png" class="bl4-img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{--<section class="bl5-5">--}}
{{--    <div class="bl5">--}}
{{--        <p class="main-text">--}}
{{--            ФОТО--}}
{{--        </p>--}}
{{--        <div class="bl5-fl">--}}
{{--            <div class="bl5-f1">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d1.jpg" class="bl5-i" alt="">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d2.jpg" class="bl5-i" alt="">--}}
{{--            </div>--}}
{{--            <div class="bl5-f2">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d3.jpg" class="bl5-i" alt="">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d4.jpg" class="bl5-d4 bl5-i" alt="">--}}
{{--            </div>--}}
{{--            <div class="bl5-f3">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d5.jpg" class="bl5-i" alt="">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d6.jpg" class="bl5-i" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="bl6-6">
    <div class="bl6">
        <p class="main-text">
            UTISCI NAŠIH KUPACA
        </p>
        <div class="bl6-ot">
            <div class="bl6-fl">
                <div class="bl6-n">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/o1.png" class="bl6-img" alt="">
                    <p class="bl6-name">Katarina</p>
                </div>
                <div class="bl6-t">
                    <div class="bl6-p">Zaista mi se dopala ova spravica. Odlična je, dala je mojim usnama volumen!
                        TOP!
                    </div>
                </div>
            </div>
            <div class="bl6-fl">
                <div class="bl6-n">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/o2.png" class="bl6-img" alt="">
                    <p class="bl6-name">Marija</p>
                </div>
                <div class="bl6-t">
                    <div class="bl6-p">Mislim da ovako dobar proizvod dugo nisam kupila. Obavezno ga koristim uveče pred
                        izlazak. Drugarice su me pitale da li sam stavila silikon u usne :)
                    </div>
                </div>
            </div>
            <div class="bl6-fl">
                <div class="bl6-n">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/o3.png" class="bl6-img" alt="">
                    <p class="bl6-name">Olga</p>
                </div>
                <div class="bl6-t">
                    <div class="bl6-p">Super stvar. Želela sam punije usne a plašila sam se igle. Ovo je rešenje koje me
                        je oduševilo. Pritom da je jako pristupačna cena, kupila sam na popustu.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bl7-7">
    <div class="bl7">
        <p class="main-text">
            KAKO DO LIP ENLARGER APARATA?
        </p>
        <div class="bl7-fl">
            <div class="bl7-d">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/k1.png" class="bl7-k" alt="">
                <div class="bl7-t">
                    <p class="bl7-m">PORUČITE</p>
                    <p class="bl7-p">Ostavite svoje podatke na našem sajtu i kontaktiraćemo vas da potvrdimo
                        porudžbinu.</p>
                </div>
            </div>
            <div class="bl7-d">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/k2.png" class="bl7-k" alt="">
                <div class="bl7-t">
                    <p class="bl7-m">ISPORUKA</p>
                    <p class="bl7-p">Šaljevo vam porudžbinu brzom poštom u roku od 1-2 radna dana u diskretnom
                        pakovanju.</p>
                </div>
            </div>
            <div class="bl7-d">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/k3.png" class="bl7-k" alt="">
                <div class="bl7-t">
                    <p class="bl7-m">PLAĆANJE</p>
                    <p class="bl7-p">Bez plaćanja unapred! Plaćate po prijemu pošiljke kuriru brze pošte!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bl8-1">
    <div class="bl8">
        <div class="bl8-lm">
            <p class="main-text">LEPE I PUNE USNE BEZ SKUPIH TRETMANA I HIRURGIJE</p>
            <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/sale.png" class="b8-sale">

            <div class="b8-d">
                <div class="bl8-l">
                    <p class="b8-mp">PREDSTAVLJAMO VAM</p>
                    <p class="b8-p">Lip Enlarger za povećavanje usana</p>
                </div>
                <div class="bl8-r">
                    <div class="b8-price">
                        <p class="old-prise2">
                            {{ $prices[1]['originalPrice'] }} <span class="b1-wal">{{ $prices[1]['currency'] }}</span>
                        </p>
                        <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/line.png" class="line2" width="80">
                        <p class="new-prise2">
                            {{ $prices[1]['amount'] }}
                            <span class="b1-wal">{{ $prices[1]['currency'] }}</span></p>
                        <a href="#order_form" class="button fform">Poručite sada</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="orderModal" class="modal2">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="slide-block-text">
            <div id="form-wrapper1" class="form form-wrapper">
                <div class="form_block">
                    <div class="offer_section offer3">
                        <p class="up-t">Unesite podatke za dostavu</p>
                        <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input class="field" type="text" name="name" placeholder="Ime i prezime" required="" value="">
                            <input class="field" type="tel" name="phone" placeholder="Telefon" required="" value="">
                            <input class="field" type="text" name="shipping_address" placeholder="Adresa" required="" value="">
                            <input class="field" type="text" name="shipping_city" placeholder="Grad" required="" value="">
                            <button class="button" type="submit">Poruči</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $('.slider').slick({
        arrows: true,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 1160,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 800,
                settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/lipenlarger/popup.js"></script>
@include('components.pixel_footer')
</body>
</html>
