<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/furniturekit/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}dailysharkFiles/furniturekit/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/furniturekit/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
</head>
<body>
@include('components.display_errors')
<header class="intro">
    <div class="intro__top">
        <h2 class="intro__title"> Furniture Kit Pro</h2>
        <p class="intro__subtitle"> DALE A TUS MUEBLES <br>UNA NUEVA VIDA</p>
    </div>
    <div class="price">
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/1__1.png" alt class="price__img">
        <div class="price__box">
            <p><b> Precio con descuento</b></p>
            <div class="price__item">
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
        </div>
    </div>
    <div class="intro__main">
        <img class="no-pad" src="{{ asset('/') }}dailysharkFiles/furniturekit/intro__main.png" alt>
    </div>
    <div class="builets">
        <div class="builets__list">
            <div class="builets__item"><img src="{{ asset('/') }}dailysharkFiles/furniturekit/builets_1.png" alt class="builets__img"> Le da a la madera un aspecto original</div>
            <div class="builets__item"><img src="{{ asset('/') }}dailysharkFiles/furniturekit/builets_2.png" alt class="builets__img"> Elimina arañazos y oculta astillado</div>
            <div class="builets__item"><img src="{{ asset('/') }}dailysharkFiles/furniturekit/builets_3.png" alt class="builets__img"> Limpia la suciedad, la grasa y el agua</div>
        </div>
    </div>
    <br>
    <a href="#offer" class="btn">PORUČITE SADA</a>
    {{--<p class="intro__bottom"><span> En stock queda:</span><b> 13 piezas</b></p>--}}
    <br>
</header>
<main class="main">
    <section class="sect1">
        <div class="content">
            <h2 class="sect1__title"> Furniture Kit Pro</h2>
            <p class="sect1__subtitle"> Es una herramienta universal capaz de restaurar cualquier superficie de madera y limpiarla incluso de la suciedad más profunda.</p>
            <div class="sect1__list">
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_1.png" alt class="sect1__img">
                    <p> Le da a la madera un aspecto original</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_2.png" alt class="sect1__img">
                    <p> Mantiene el efecto aterciopelado en los muebles</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_3.png" alt class="sect1__img">
                    <p> Limpia de la suciedad más profunda</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_4.png" alt class="sect1__img">
                    <p> Elimina arañazos y oculta astillado</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_5.png" alt class="sect1__img">
                    <p> Mejora aspecto natural de cualquier producto de madera.</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_bottom.png" alt class="sect1__bottom">
    </section>
    <section class="sect2">
        <div class="content">
            <h2 class="sect2__title"> Furniture Kit Pro</h2>
            <div class="sect2__inner">
                <p> Natural y al mismo tiempo poderoso producto restaurador. Este producto fue creado sobre la base de la fórmula de los pulimentos franceses antiguos para los muebles y fue perfeccionado con la ayuda de las tecnologías modernas.</p>
                <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect2.png" alt class="sect2__img">
                <p> Fácil de usar y adecuado para todas las superficies de madera, Furniture Kit Pro restaura los artículos de madera y les devuelve aspecto original sin la necesidad de solventes, abrasivos o siliconas.</p>
            </div>
            <a href="#offer" class="btn">PORUČITE SADA</a>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect2__bottom.png" alt class="sect2__bottom">
    </section>
    <section class="sect3">
        <div class="content">
            <div class="sect3__inner">
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_1.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3> Para la cocina</h3>
                        <p> Ideal para alacenas de madera, eliminará toda la grasa y la suciedad de los armarios de la cocina y con los aceites orgánicos que lo componen volverá el brillo de las superficies de madera.</p>
                    </div>
                </div>
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_2.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3> Para antigüedades<br> y muebles viejos</h3>
                        <p> Furniture Kit Pro es ideal para usar en antigüedades. Contiene una mezcla de ceras y aceites naturales, y es ideal para restaurar muebles viejos. Con el Kit de muebles Pro, puede eliminar capas de suciedad y recubrimiento viejo que hacen que la superficie del producto sea antiestética y pegajosa.</p>
                    </div>
                </div>
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_3.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3> Para pisos</h3>
                        <p> Furniture Kit Pro es ideal para restaurar pisos viejos y parquet. Debido a su composición única, limpiará el piso de manchas viejas y rebeldes, eliminará los rasguños y le dará al piso de madera su aspecto original.</p>
                    </div>
                </div>
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_4.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3> Para PVC y otras superficies de plástico.</h3>
                        <p> También es adecuado para su uso en PVC y otras superficies plásticas. Furniture Kit Pro no contiene partículas abrasivas. Por lo tanto, también se puede usar como pulidor de plástico, sin temor a rayar la superficie.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect4">
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4__top.png" alt class="sect4__top">
        <div class="content">
            <h2 class="sect4__title"> Una solución eficaz para cualquier ocasión</h2>
            <div class="sect4__main">
                <div class="sect4__inner">
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_1.png" alt class="sect4__img">
                        <p> Mesas<br> y sillas</p>
                    </div>
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_2.png" alt class="sect4__img">
                        <p> Muebles de cocina</p>
                    </div>
                </div>
                <div class="sect4__inner">
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_3.png" alt class="sect4__img">
                        <p> Muebles antiguos</p>
                    </div>
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_4.png" alt class="sect4__img">
                        <p> Pisos de madera</p>
                    </div>
                </div>
            </div>
            <a href="#offer" class="btn">PORUČITE SADA</a>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect5__top.png" alt class="sect4__bottom">
    </section>
    <section class="sect5">
        <div class="content">
            <h2 class="sect5__title"> Le da a la madera un aspecto original</h2>
            <video class="video" style="display: block;" autoplay="" loop="" muted="" playsinline="">
                <source src="{{ asset('/') }}dailysharkFiles/furniturekit/gif.mp4">
            </video>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect5__bottom.png" alt class="sect5__bottom">
    </section>
    <section class="sect6">
        <div class="content">
            <h2 class="sect6__title"> Cómo utilizar<br> Furniture Kit Pro</h2>
            <div class="sect6__main">
                <div class="sect6__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_1.png" alt class="sect6__img">
                    <h3 class="sect6__step"> Paso 1</h3>
                    <p> Calentar el producto hasta que esté suave y frotar la superficie con un paño</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_2.png" alt class="sect6__img">
                    <h3 class="sect6__step"> Paso 2</h3>
                    <p> Dejar que actua durante 6 horas</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_3.png" alt class="sect6__img">
                    <h3 class="sect6__step"> Paso 3</h3>
                    <p> Elimine sobrante del producto con un paño limpio.</p>
                </div>
                <div class="sect6__inner">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_4.png" alt>
                    <p> ¡Para mejorar el efecto<br> puede repetir el proceso<b> varias veces!</b></p>
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_bottom.png" alt class="sect6__bottom">
    </section>
    <section class="sect7">
        <div class="content">
            <h2 class="sect7__title"> Comentarios<br> de clientes</h2>
            <div class="reviews owl-carousel">
                <div class="reviews__item">
                    <div class="reviews__header">
                        <img class="ava" src="{{ asset('/') }}dailysharkFiles/furniturekit/ava_1.png" alt>
                        <p class="reviews__name"><b> Sergio</b> Madrid</p>
                    </div>
                    <p class="reviews__comment"> Furniture kit Pro me impresionó con su efectividad! Quedaron impecables una mesa y dos sillas viejas. También me gustaría notar un agradable olor ligero de todas las superficies tratadas. Resultó incluso eliminar una mancha vieja en la mesa.</p>
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/reviews_img_1.png" alt class="reviews__img">
                </div>
                <div class="reviews__item">
                    <div class="reviews__header">
                        <img class="ava" src="{{ asset('/') }}dailysharkFiles/furniturekit/ava_3.png" alt>
                        <p class="reviews__name"><b> Alejandra</b> Toledo</p>
                    </div>
                    <p class="reviews__comment"> ¡Estoy absolutamente encantada! ¡Tengo un parquet viejo y su mantenimiento requiere mucho tiempo y esfuerzo, pero con esta herramienta es tan fácil! Furniture Kit Pro hizo un gran trabajo con rasguños y manchas viejas que no se podían quitar con nada, ahora parece como nuevo. Estoy muy satisfecha con Furniture Kit Pro. La casa incluso cambió de alguna manera, y lo más importante, me tomó un mínimo de esfuerzo.</p>
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/reviews_img_3.png" alt class="reviews__img">
                </div>
                <div class="reviews__item">
                    <div class="reviews__header">
                        <img class="ava" src="{{ asset('/') }}dailysharkFiles/furniturekit/ava_2.png" alt>
                        <p class="reviews__name"><b> Damian</b> Santander</p>
                    </div>
                    <p class="reviews__comment"> He ordenado bajo mi propio riesgo, sin poner grandes esperanzas. Resultado fue fantastico! Furniture Kit Pro ha restaurado brillantemente una vieja encimera! Luego decidí hacer otra capa sobre la encimera una vez más y simplemente me quedé boquiabierto por el doble resultado. Recomiendo a todos, este producto es indispensable!</p>
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/reviews_img_2.png" alt class="reviews__img">
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect7__bottom.png" alt class="sect7__bottom">
    </section>
    <section class="sect8">
        <div class="content">
            <h2 class="sect8__title"> ¿CÓMO ORDENAR?</h2>
            <div class="sect8__grid">
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_1.png" alt>
                    <p><b> Solicitud</b> Deje una solicitud en nuestro sitio web</p>
                </div>
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_2.png" alt>
                    <p><b> Llamada</b> Nuestro encargado aclara los detalles del pedido</p>
                </div>
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_3.png" alt>
                    <p><b> Envío</b> Entregamos sus artículos dentro de 3-7 días.</p>
                </div>
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_4.png" alt style="width: 1.05rem;">
                    <p><b> Entrega</b> Pagar al recibir</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="intro">
    <div class="intro__top">
        <h2 class="intro__title"> Furniture Kit Pro</h2>
        <p class="intro__subtitle"> DALE A TUS MUEBLES <br>UNA NUEVA VIDA</p>
    </div>
    <div class="price">
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/1__1.png" alt class="price__img">
        <div class="price__box">
            <p><b> Precio con descuento</b></p>
            <div class="price__item">
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
        </div>
    </div>
    <form id="offer" method="POST" class="main-order-form form" action="{{$orderRoute}}">
        {{csrf_field()}}
        @include('lander.naturapharm.components.form_hidden_fields')
        <input type="text" name="name" required placeholder="Ime i prezime">
        <input type="tel" name="phone" required placeholder="Telefon">
        <input type="text" name="shipping_address" placeholder="Adresa">
        <input type="text" name="shipping_city" placeholder="Grad">
        <button class="btn btn--footer" type="submit">Poručite</button>
    </form>
</footer>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $("body").on('click', '[href*="#"]', function (e) {
        var fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

    $(document).ready(function () {
        $(".reviews").owlCarousel({
            margin: 20,
            items: 1,
            dots: true,
            nav: false,
            autoHeight: true,
            loop: true,
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>