<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/hairoil/main.min.css">
{{--    <script src="http://hairex1.xcartpro.com/r1/js/scripts.min.js"></script>--}}
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/hairoil/pack_big.png" type="image/x-icon">
</head>
<body>
<div class="overflow">
    <div class="block1">
        <div class="container">
            <div class="block1-header">
                <a href="#" class="logo">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/logo.png" alt="">
                </a>
                <ul class="block1-header-list">
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic1.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            Efectividad confirmada
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic2.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            Producto del año 2017
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic3.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            Ingredientes 100% naturales
                        </div>
                    </li>
                </ul>
            </div>
            <h1 class="block1__heading">Restauración completa del cabello durante <span class="green">28 días</span>
            </h1>
            <ul class="block1-list desktop">
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Rebrote del cabello</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Despertar de los folículos capilares dormidos</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Protección contra caídas</div>
                </li>
            </ul>
            <h2 class="block1__subheading desktop">Detener la pérdida de cabello para siempre!</h2>
            <div class="block1-girl"></div>
            <div class="block1-decor1"></div>
            <div class="block1-decor2"></div>
        </div>
    </div>
    <div class="block1-2 mobile">
        <div class="container">
            <div class="block1-2__item">
                <div class="timer">
                    <div class="timer__container">
                        <div class="timer__item">
                            <div class="timer__item-label">ISKORISTI</div>
                            <div class="timer__item-tx">POPUST</div>
                        </div>
                    </div>
                </div>
                <button class="button-mobile __js-scroll-form">ORDENAR AHORA</button>
            </div>
        </div>
    </div>
    <div class="block1 mobile">
        <div class="container">
            <ul class="block1-list mobile">
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Rebrote del cabello</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Despertar de los folículos capilares dormidos</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Protección contra caídas</div>
                </li>
            </ul>
            <h2 class="block1__subheading mobile">Detener la pérdida de cabello para siempre!</h2>
            <img class="mobile block1-girl__mobile" src="{{ asset('/') }}purplerelaxFiles/hairoil/girl1.png" alt="">
        </div>
    </div>
    <div class="block2">
        <div class="container">
            <form class="  orderForm  form desktop" action="#" method="POST">
                <div class="form__wrapper">
                    <div class="form-pack">
                        <div class="form-pack__sale">-50%</div>
                    </div>
                    <div class="form__header">¡Compra ahora con un descuento!</div>
                    <div class="form__main">
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='name' class="form-input order_data" placeholder="Nombre y Apellido"
                                       required type="text">
                            </div>
                        </div>
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='phone' class="form-input order_data" placeholder="Teléfono móvil" required
                                       type="tel">
                            </div>
                        </div>
                        <div class="form-price">
                            <div class="form-price__old old" style='font-size: 2em; white-space: nowrap'>
                                {{ $prices[1]['originalPrice'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                            <div class="form-price__new" style='font-size: 2.4em; white-space: nowrap'>
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="timer">
                            <div class="timer__container">
                                <div class="timer__item">
                                    <div class="timer__item-label">ISKORISTI</div>
                                    <div class="timer__item-tx">POPUST</div>
                                </div>
                            </div>
                        </div>
                        <div class="form__arrows">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/arrow_form.png" alt="">
                        </div>
                    </div>
                    <div class="form__button">
                        <input class="form__button-element buynow" type="submit" value="ORDENAR">
                    </div>
                </div>
            </form>
            <div class="block2__wrap">
                <div class="block2__heading">Causas de <span class="red">pérdida de cabello </span> entre las mujeres
                </div>
                <ul class="block2-list">
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i1.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Herencia</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i2.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Desequilibrio <br> hormonal</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i3.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Estrés</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i4.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Bloqueo de folículos capilares</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i5.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">La influencia de los factores tóxicos</div>
                    </li>
                </ul>
            </div>
            <div class="block2-girl"></div>
            <img class="mobile block2-girl__mobile" src="{{ asset('/') }}purplerelaxFiles/hairoil/girl2.png" alt="">
        </div>
    </div>
    <div class="block3">
        <div class="container">
            <h3 class="block3__heading">¿Cómo funciona <span class="blue">HairEX</span> y por qué es mejor que los
                análogos?
            </h3>
            <ul class="block3-list">
                <li class="block3-list__item">
                    <div class="block3-list__wrap">
                        <div class="block3-list__tx">Como <span class="blue">HairEX trabaja para fortalecer el crecimiento
                           de cabello en áreas con poca densidad </span> y cabello muy delgado, y forma una
                            barrera contra los
                            daños a la cutícula.
                        </div>
                        <div class="block3-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b3_i1.png" alt="">
                        </div>
                    </div>
                    <div class="block3-decor3"></div>
                </li>
                <li class="block3-list__item">
                    <div class="block3-list__wrap">
                        <div class="block3-list__tx"><span class="blue">Activa folículos pilosos latentes </span> a
                            nivel
                            microcelular, los revitaliza desde el interior gracias a un conjunto de nutrientes
                            especialmente
                            seleccionados.
                        </div>
                        <div class="block3-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b3_i2.png" alt="">
                        </div>
                    </div>
                    <div class="block3-decor2"></div>
                </li>
                <li class="block3-list__item">
                    <div class="block3-list__wrap">
                        <div class="block3-list__tx"><span class="blue">Previene más perdida de cabello </span>
                            fortaleciendo y
                            recuperando el folículo piloso. Crea una película protectora contra los efectos de factores
                            ambientales
                            negativos.
                        </div>
                        <div class="block3-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b3_i3.png" alt="">
                        </div>
                    </div>
                    <div class="block3-decor4"></div>
                </li>
            </ul>
            <div class="block3-decor1"></div>
            <div class="block3-girl"></div>
            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/girl3.png" alt="" class="mobile block3-girl__mobile">
        </div>
    </div>
    <div class="block4">
        <div class="container">
            <h3 class="block4__heading">HairEX RECOLECTA LOS <span class="blue">INGREDIENTES MÁS PODEROSOS</span> PARA
                EL FORTALECIMIENTO DEL CABELLO
            </h3>
            <ul class="block4-list">
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i1.png" alt="">
                    </div>
                    <div class="block4-list__header">Extracto <br>de Triticum <br>Vulgare</div>
                    <div class="block4-list__tx"><span class="bold">Disminuye el proceso de envejecimiento </span> de
                        folículos,
                        previene la caída del cabello y activa folículos pilosos "dormidos"
                    </div>
                </li>
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i2.png" alt="">
                    </div>
                    <div class="block4-list__header">Extracto de Germen Scutellaria</div>
                    <div class="block4-list__tx">Rellena los vacíos de los tallos del pelo, pega las escamas, <span
                            class="bold">hace que el cabello sea elástico y fácil de mantener</span></div>
                </li>
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i3.png" alt="">
                    </div>
                    <div class="block4-list__header">Extracto <br> de Raíz de <br>Baicalensis</div>
                    <div class="block4-list__tx">Participa en la asimilación de nutrientes importantes para el cabello
                        (calcio,
                        fósforo, vitamina B6, B1, E), <span class="bold">previene el cabello gris y quebradizo</span>
                    </div>
                </li>
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i4.png" alt="">
                    </div>
                    <div class="block4-list__header">Betula</div>
                    <div class="block4-list__tx"><span class="bold">Nutre el cuero cabelludo, hidrata y previene la formación de
                        sequedad, picazón y caspa. </span> Mejora la circulación sanguínea y mejora el
                        crecimiento del cabello
                    </div>
                </li>
            </ul>
            <div class="block4-pack"></div>
        </div>
    </div>
    <div class="block5">
        <div class="container">
            <div class="block5__header"><span class="green">FÓRMULA <br>UNIVERSAL </span> PARA <br>HOMBRES Y
                MUJERES!<span
                    class="block5__line"></span>
            </div>
            <div class="block5__label mobile">Funciona genial en cabello teñido</div>
            <div class="block5__man"></div>
            <div class="block5__girl"></div>
            <div class="block5__label desktop">Funciona genial en cabello teñido</div>
            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/girl4.png" alt="" class="block5-girl__mobile mobile">
        </div>
    </div>
    <div class="block6">
        <div class="container">
            <div class="block6__header">SIMPLE Y FÁCIL DE USAR PARA ALCANZAR <span class="green">EL RESULTADO MÁS
                  RÁPIDO!</span>
            </div>
            <ul class="block6-list">
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i.png" alt="">
                    </div>
                    <div class="block6-list__tx">Cabello liso y sedoso</div>
                </li>
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i2.png" alt="">
                    </div>
                    <div class="block6-list__tx">REDUCCIÓN DE LA PÉRDIDA DE CABELLO A MÍNIMO</div>
                </li>
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i3.png" alt="">
                    </div>
                    <div class="block6-list__tx">DISMINUYA los parches calvos al 99%</div>
                </li>
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i4.png" alt="">
                    </div>
                    <div class="block6-list__tx">MANTENER LOS RESULTADOS</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="block7">
        <div class="container">
            <div class="block7__header">
                OPINIÓN EXPERTA SOBRE <span class="blue">HairEX</span>
            </div>
            <div class="block7__main">
                <div class="block7-text">
                    <p class="block7-text__paragraph">Todas las personas pueden sufrir problemas de pérdida de cabello,
                        independientemente de su género. La calidad actual del entorno, el trabajo constante y la dieta
                        desequilibrada empeoran la condición del cuero cabelludo y el cabello.
                    </p>
                    <p class="block7-text__paragraph">Como resultado, el cabello se desvanece, pierde su fuerza y
                        volumen, se
                        quiebra, se rompe y se cae. Como tricólogo, durante los años de mi práctica, he probado muchas
                        herramientas que podrían ayudar a los pacientes en casa a fortalecer su cabello, mantener una
                        buena
                        apariencia y mejorar la estructura del cabello.
                    </p>
                    <p class="block7-text__paragraph"><span class="bold blue">Spray para el cabello HairEX </span> –
                        ¡este
                        es un descubrimiento real! Los ingredientes naturales que se incluyen en su composición <span
                            class="bold">restauran efectivamente el cabello frágil, dividido y dañado. </span> Los
                        ensayos clínicos
                        del aerosol demuestran su eficacia en la lucha contra las calvas y la caída del cabello.
                    </p>
                    <p class="block7-text__paragraph bold">Carlos Moreno<br> Profesor, tricólogo</p>
                </div>
                <div class="block7-text__sign"></div>
            </div>
            <div class="block7-pack">
                <div class="block7-pack__label">
                    <span class="block7-pack__label_lg">100%</span> componentes naturales
                </div>
            </div>
        </div>
    </div>
    <div class="block8">
        <div class="container">
            <div class="block8__header">
                REVISIONES DE <span class="blue">HairEX</span>
            </div>
            <ul class="review-list">
                <li class="review-list__item">
                    <div class="review-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/rev1.png" alt="">
                        <div class="review-list__before">Antes</div>
                        <div class="review-list__after">Después</div>
                    </div>
                    <div class="review-list__tx"><span class="bold">¡Después de 2 semanas vi el resultado! </span> Antes
                        de la
                        aplicación, examiné cuidadosamente el área de la cabeza en el borde de la calvicie y el cuero
                        cabelludo
                        ... en el día 7-8 de la aplicación ya empecé a notar un cabello pequeño y oscuro ... desde una
                        distancia
                        que no noté, pero ¡Definitivamente identifiqué que el NUEVO cabello comenzó a crecer! ¿Quién
                        creería que
                        el dicho de que la pérdida de cabello es irreversible es incorrecto? No he notado las
                        desventajas.
                    </div>
                    <div class="review-list__author">Mary, 37 años</div>
                </li>
                <li class="review-list__item">
                    <div class="review-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/rev2.png" alt="">
                        <div class="review-list__before">Antes</div>
                        <div class="review-list__after">Después</div>
                    </div>
                    <div class="review-list__tx">Después de 35 años, comenzaron a aparecer los primeros parches de
                        calvicie. Por
                        casualidad, recibí un spray para el crecimiento del cabello - "HairEX" y decidí guardar el
                        cabello
                        que todavía está allí. Después de 4 meses, mis amigos notaron que había cabello en lugares donde
                        antes era
                        calva. Aunque realmente no lo creía, comencé a usarlo todos los días. <span class="bold">Un año después,
                        el pelo se volvió más grueso. </span> ¡Salvé mi cabello gracias a los desarrolladores de
                        este producto!
                    </div>
                    <div class="review-list__author">Anabel, 52 años  </div>
                </li>
                <li class="review-list__item">
                    <div class="review-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/rev3.png" alt="">
                        <div class="review-list__before">Antes</div>
                        <div class="review-list__after">Después</div>
                    </div>
                    <div class="review-list__tx">Lo primero que quiero señalar es la eficiencia. El pelo creció en la
                        zona de
                        calvas y el pelo en mi cabeza se hizo notablemente más grueso. En segundo lugar, las
                        consecuencias cesaron
                        por completo. En tercer lugar, el cabello delgado se hizo más fuerte. <span class="bold">Durante un mes,
                        devolví la confianza en mi apariencia y en mí mismo ¡Gracias!</span>
                    </div>
                    <div class="review-list__author">Sofia, 40 años</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="block9">
        <div class="container">
            <div class="block9__wrap">
                <div class="block9-left">
                    <div class="block9-warning">
                        <div class="block9-warning__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/vosl.png" alt="">
                        </div>
                        <div class="block-warning__header">¡Cuidado con <br> las imitaciones!</div>
                    </div>
                    <div class="block9__text">Para evitar contrapartes falsas y deficientes, compre el producto original
                        solo en
                        este sitio.
                    </div>
                    <div class="block9__text up bold">¡CALIDAD 100% GARANTIZADA DEL FABRICANTE!</div>
                </div>
                <div class="block9-right">
                    <div class="block9-pack">
                        <div class="block9-pack__label">RECOMENDACIONES <br> DE ESPECIALISTAS</div>
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/pack_m.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block10">
        <div class="container">
            <div class="block10__header">¿CÓMO HACER UN PEDIDO?</div>
            <ul class="block10-list">
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i1.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">PASO 1</div>
                        <div class="block10-list__text">Hacer el pedido en este sitio, llenando el formulario.</div>
                    </div>
                </li>
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i2.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">PASO 2</div>
                        <div class="block10-list__text">Un colega lo contactará en 60 minutos.</div>
                    </div>
                </li>
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i3.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">PASO 3</div>
                        <div class="block10-list__text">Cuidadosamente empacaremos su orden y enviaremos ese mismo
                            día.
                        </div>
                    </div>
                </li>
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i4.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">PASO 4</div>
                        <div class="block10-list__text">El pago se debe a la recepción de la orden.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="block1 block11">
        <div class="container">
            <div class="block1-header">
                <a href="#" class="logo">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/logo.png" alt="">
                </a>
                <ul class="block1-header-list">
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic1.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            Efectividad confirmada
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic2.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            Producto del año 2017
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic3.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            Ingredientes 100% naturales
                        </div>
                    </li>
                </ul>
            </div>
            <h1 class="block1__heading">RECUPERACIÓN DE PELO COMPLETO <span class="green">DURANTE 28 DÍAS</span></h1>
            <form class="  orderForm  form desktop" action="#" method="POST">
                <div class="form__wrapper">
                    <div class="form-pack">
                        <div class="form-pack__sale">-50%</div>
                    </div>
                    <div class="form__header">¡Compra ahora con un descuento!</div>
                    <div class="form__main">
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='name' class="form-input order_data" placeholder="Nombre y Apellido"
                                       required type="text">
                            </div>
                        </div>
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='phone' class="form-input order_data" placeholder="Teléfono móvil" required
                                       type="tel">
                            </div>
                        </div>
                        <div class="form-price">
                            <div class="form-price__old old" style='font-size: 2em; white-space: nowrap'>
                                {{ $prices[1]['originalPrice'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                            <div class="form-price__new" style='font-size: 2.4em; white-space: nowrap'>
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="timer">
                            <div class="timer__container">
                                <div class="timer__item">
                                    <div class="timer__item-label">ISKORISTI</div>
                                    <div class="timer__item-tx">POPUST</div>
                                </div>
                            </div>
                        </div>
                        <div class="form__arrows">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/arrow_form.png" alt="">
                        </div>
                    </div>
                    <div class="form__button">
                        <input class="form__button-element buynow" type="submit" value="ORDENAR">
                    </div>
                </div>
            </form>
            <form class=" orderForm   js-scroll-form form mobile" action="#" method="POST">
                <div class="form__wrapper">
                    <div class="form__header">¡Compra ahora con un descuento!</div>
                    <div class="pack-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/pack.png" alt="">
                    </div>
                    <div class="form-price">
                        <div class="form-price__old old">
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                        <div class="form-price__new">
                            {{ $prices[1]['amount'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                    <div class="form__main">
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='name' class="form-input order_data" placeholder="Nombre y Apellido"
                                       required type="text">
                            </div>
                        </div>
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='phone' class="form-input order_data" placeholder="Teléfono móvil" required
                                       type="tel">
                            </div>
                        </div>
                    </div>
                    <div class="form__button">
                        <input class="form__button-element buynow" type="submit" value="ORDENAR">
                    </div>
                </div>
            </form>
            <div class="block1-girl"></div>
            <div class="block1-decor1"></div>
            <div class="block1-decor2"></div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer-text">
            </div>
        </div>
    </footer>
</div>
<script>
    $(document).ready(function () {
        $(".__js-scroll-form").click(function () {
            var e = $(".js-scroll-form").offset().top;
            $("html, body").animate({
                scrollTop: e
            }, 1e3)
        }), $(window).scroll(function () {
            $(".block11 .form.mobile .form__button .form__button-element").offset().top + 28 <= $(".block1-2.mobile").offset().top ? $(".block1-2.mobile .button-mobile").hide() : $(".block1-2.mobile .button-mobile").show()
        })
    });
</script>
</body>
</html>
