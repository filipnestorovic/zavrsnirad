<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/difuman/style.css">
    <style>
        .freeShippingHolder {
            font-weight: 500;
            font-size: 24px;
            line-height: 35px;
            text-align: center;
            color: #d49090;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="wrapper">
        <h1 class="header__title">MOISTURE CUSHION</h1>
        <div class="sale">
            <img src="{{ asset('/') }}purplerelaxFiles/difuman/sale.png" alt class="sale__img">
            <p class="sale__text">-40%</p>
        </div>
    </div>
</header>
<main>
    <section class="sect1">
        <img src="{{ asset('/') }}purplerelaxFiles/moisturecushion/top.png" alt class="sect1__img">
        <div class="txt">
            <div class="txt__text">
                <span class="txt__text-bold">Puder za sjajno i podmlađeno lice</span>
                <br>
            </div>
        </div>
        <div class="price">
            <div class="price__old">
                <p style="font-size: 24px;">Stara cena za 1:</p>
                <del>
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </del>
            </div>
            <div class="price__new">
                <p style="font-size: 24px;">Cena za 1 komad:</p>
                {{ $prices[1]['amount'] }}
                {{ $prices[1]['currency'] }}
            </div>
        </div>
        <a href="#forma" class="btn">Poručite sada</a>
    </section>
    <section class="sect1_2">
        <div class="wrapper">
            <img src="{{ asset('/') }}purplerelaxFiles/difuman/gif.gif" alt class="gif">
        </div>
    </section>
    <section class="sect2">
        <div class="wrapper">
            <h2 class="sect2__title">ŠTA OVAJ PUDER ČINI TAKO POSEBNIM?</h2>
            <div class="property">
                <div class="property__text">
                    <p class="property__text-inner--title">
                        NEGA PROTIV <br/>STARENJA
                    </p>
                    <p class="property__text-inner--text powder">
                        Kada nanesete puder, dubina bora se smanjuje, a sitne bore potpuno nestaju.
                        Mrlje i pege se više ne vide, a ton lica postane ujednačen, sjajan i lep.
                        Ovaj puder patentiran je od strane vrhunskih korejskih stručnjaka u oblasti kozmetologije,
                        a poznato je da korejska kozmetika jedna od najboljih na svetu.
                    </p>
                </div>
                <div class="property__img">
                    <img src="{{ asset('/') }}purplerelaxFiles/difuman/1.png" alt>
                </div>
            </div>
            <div class="property">
                <div class="property__text">
                    <p class="property__text-inner--title">
                        PRILAGOĐAVA SE <br/> TONU KOŽE
                    </p>
                    <p class="property__text-inner--text aqua">
                        Kada se nanese, puder ima veoma finu teksturu, što čini proizvod lakim za nanošenje.
                        Specijalna kompozicija prilagođava se tonu vaše kože, pružajući ujednačen ten i prirodnu šminku.
                        Svilenkasta baza daje koži sjaj kao kod TV lica sa reklama.
                    </p>
                </div>
                <div class="property__img">
                    <img src="{{ asset('/') }}purplerelaxFiles/difuman/2.png" alt>
                </div>
            </div>
            <div class="property">
                <div class="property__text">
                    <p class="property__text-inner--title">
                        HIDRATACIJA I ZAŠTITA
                    </p>
                    <p class="property__text-inner--text light-powder">
                        Puder pruža lagano i dugotrajno prekrivanje, sakriva nepravilnosti na koži, bore, ožiljke i proširene pore.
                        Što je najvažnije, ne sprečava kožu da diše. AKtivne supstance zasićuju kožu vitaminima i ne začepljuju pore.
                    </p>
                </div>
                <div class="property__img">
                    <img src="{{ asset('/') }}purplerelaxFiles/difuman/3.png" alt>
                </div>
            </div>
        </div>
    </section>
    <section class="sect3">
        <img src="{{ asset('/') }}purplerelaxFiles/moisturecushion/middle.png" alt class="sect3__img">
        <div class="sect3__txt">
            <div class="sect3__txt__text">
                MOISTURE CUSHION <br/> TO JE ONO <br/> ŠTO VAM TREBA
            </div>
        </div>
        <div class="wrapper">
            <p>
                Jastučić od kozmetološkog sunđera najfinije kategorije idealan je za negu i maskiranje nesavršenosti kože (bubuljice, ožiljci od akni, bore, proširene pore, pege).
                Izjednačava ten, daje prelep tonus lica i eliminiše "masni sjaj". Nakon nanošenja ovog pudera, koža postaje glatka, mat i sveža.
                Pogodan je za problematičnu i masnu kožu, daje licu prirodnu boju.
                <br/>
                Zemlja proizvođača: Koreja
            </p>
            <a href="#forma" class="btn2">Poručite</a>
        </div>
    </section>
    <div class="header">
        <div class="wrapper">
            <h1 class="header__title">MOISTURE CUSHION</h1>
            <div class="sale">
                <img src="{{ asset('/') }}purplerelaxFiles/difuman/sale.png" alt class="sale__img">
                <p class="sale__text">-40%</p>
            </div>
        </div>
    </div>
    <section class="sect5">
        <img src="{{ asset('/') }}purplerelaxFiles/moisturecushion/bottom.png" alt class="sect1__img">
        <div class="txt">
            <div class="txt__text">
                <span class="txt__text-bold">Puder za sjajno i podmlađeno lice</span>
                <br>
            </div>
        </div>
        <form method="POST" id="forma" class="form" action="{{$orderRoute}}">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            @foreach($prices as $q => $singlePrice)
                <div class="price price_holder" data-quantity="{{$q}}">
                    <div class="price__old">
                        <p style="font-size: 24px;">Stara cena za {{$q}}:</p>
                        <del>
                        {{ $singlePrice['originalPrice'] }}
                        {{ $singlePrice['currency'] }}
                        </del>
                    </div>
                    <div class="price__new">
                        <p style="font-size: 24px;">Cena za {{$q}} sada:</p>
                        {{ $singlePrice['amount'] }}
                        {{ $singlePrice['currency'] }}
                    </div>
                </div>
            @endforeach
            <div class="price freeShippingHolder">
                <p>+ BESPLATNA DOSTAVA</p>
            </div>
            <label class="form-group" style="margin-top: 30px;">
                <input type="text" name="name" placeholder="Ime i prezime" class="form__input" required>
            </label>
            <label class="form-group">
                <input type="tel" name="phone" id="mass" placeholder="Telefon" class="form__input masktl" required>
            </label>
            <label class="form-group">
                <input type="text" name="shipping_address" placeholder="Adresa" class="form__input" required>
            </label>
            <label class="form-group">
                <input type="text" name="shipping_city" placeholder="Grad" class="form__input" required>
            </label>
            <label class="form-group">
                <select name="quantity" id="quantity" class="form__input quantity" required style="margin-bottom: 0;">
                    @foreach($prices as $singlePrice)
                        <option value="{{ $singlePrice['quantity'] }}"
                                data-free-shipping="{{ $singlePrice['is_free_shipping'] ? 'true' : 'false' }}"
                                @if($singlePrice['is_default']) selected @endif
                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                        >
                            &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}}
                            ({{$singlePrice['amount']}} {{$singlePrice['currency']}})
                        </option>
                    @endforeach
                </select>
            </label>
            <button type="submit" class="btn">Završi porudžbinu</button>
        </form>
        <center>Dostava kurirskom službom u roku od 1-2 radna dana</center>
        <center style="margin-top: 1em;">
            <p>Plaćanje kuriru prilikom dostave</p>
        </center>
    </section>
</main>
<script>
    // Find all links starting with #
    const anchors = document.querySelectorAll('a[href*="#"]');

    // Loop through all links
    for (let anchor of anchors) {
        anchor.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent standard link behavior
            // The href attribute of the link, if it does not exist then go to the body (not smoothly to the top)
            const blockID = anchor.hasAttribute("href") ?
                anchor.getAttribute("href") :
                "body";
            // Smooth scrolling to the element with id = href of the link
            document.querySelector(blockID).scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').each(function() {
            let $form = $(this);
            let $quantitySelect = $form.find('.quantity');
            let $prices = $form.find('.price_holder');
            let $freeShipping = $('.freeShippingHolder');
            let selectedQuantity = $quantitySelect.val();
            let selectedOption = $quantitySelect.find(':selected');

            $prices.hide();
            $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

            selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();

            $quantitySelect.on('change', function() {
                selectedQuantity = $(this).val();
                selectedOption = $(this).find(':selected');

                $prices.hide();
                $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

                selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();
            });
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
