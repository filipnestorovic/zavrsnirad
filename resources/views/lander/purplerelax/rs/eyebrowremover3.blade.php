<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=480" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/main.css" />
    <style>
        @font-face {
            font-family: 'Rubik';
            font-weight: 400;
            src: url("{{ asset('/') }}fonts/Rubik-Regular.woff2") format("woff2"), url("{{ asset('/') }}fonts/Rubik-Regular.woff") format("woff"), url("{{ asset('/') }}fonts/Rubik-Regular.ttf") format("truetype");
        }
        @font-face {
            font-family: 'Rubik';
            font-weight: 500;
            src: url("{{ asset('/') }}fonts/Rubik-Medium.woff2") format("woff2"), url("{{ asset('/') }}fonts/Rubik-Medium.woff") format("woff"), url("{{ asset('/') }}fonts/Rubik-Medium.ttf") format("truetype");
        }
        @font-face {
            font-family: 'Rubik';
            font-weight: 700;
            src: url("{{ asset('/') }}fonts/Rubik-Bold.woff2") format("woff2"), url("{{ asset('/') }}fonts/Rubik-Bold.woff") format("woff"), url("{{ asset('/') }}fonts/Rubik-Bold.ttf") format("truetype");
        }
        @font-face {
            font-family: 'Billabong';
            src: url("{{ asset('/') }}fonts/billabong.woff2") format("woff2"), url("{{ asset('/') }}fonts/billabong.woff") format("woff"), url("{{ asset('/') }}fonts/billabong.ttf") format("truetype");
        }
    </style>
    {{--<script src="http://flawlessbrows169.xcartpro.com/m7/scripts/libs.js"></script>--}}
</head>
<body>
<div class="container">
    <header class="header">
        <h1 class="header__title">Flawless Brows</h1>
        <a class="header__button" href="#main-form">Encomendar</a>
    </header>
    <section class="offer">
        <div class="offer__main-bg">
            <p class="offer__desc">
                FLAWLESS BROWS DE FINISHING TOUCH SOBRANCELHAS IDEAIS SEM PINÇAS E
                DOR
            </p>
            <div class="offer__discount">-50%</div>
        </div>
        <ul class="offer__list">
            <li class="offer__item">indoloroso</li>
            <li class="offer__item">rapidamente</li>
            <li class="offer__item">compactamente</li>
            <li class="offer__item">elegantemente</li>
        </ul>
        <div class="offer__price">
            <div class="offer__old old-price">
                <p class="old-price__text">preço antigo</p>
                <p class="old-price__num">
                    {{ $prices[1]['originalPrice'] }} RSD
                </p>
            </div>
            <div class="offer__new new-price">
                <p class="new-price__text">preço novo</p>
                <p class="new-price__num">
                    {{ $prices[1]['amount'] }} RSD
                </p>
            </div>
        </div>
        <a class="order-button" href="#main-form">encomendar com desconto</a>
        {{--
        <h2 class="offer__timer-title">Até a promoção terminar</h2>
        --}}
        {{--
        <div class="timer">
           <div class="countbox clearfix"></div>
        </div>
        --}}
        <p class="offer__balance">
            Restam apenas
            <span class="balance-count">&nbsp;9&nbsp;</span>&nbsp;peças com
            desconto
        </p>
    </section>
    {{--
    <section class="video">
       --}}
    {{--
    <div class="heading">
       --}}
    {{--
    <h2 class="basic-title video__title">--}}
    {{--VEJA COMO FUNCIONA O FLAWLESS--}}
    {{--
 </h2>
 --}}
    {{--
 </div>
 --}}
    {{--
    <div class="video__frame-wrapper">
       --}}
    {{--<!--          <div class="youtube" style="height: 100%;" id="GigqT29s6GE"></div>-->--}}
    {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/GigqT29s6GE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
    {{--
 </div>
 --}}
    {{--
 </section>
 --}}
    <section class="about">
        <div class="heading">
            <h2 class="basic-title about__title">
                CORRECTA A FORMA DE SOBRANCELHAS EM 2 MINUTOS
            </h2>
        </div>
        <ul class="about__list">
            <li class="about__item">Sem dor</li>
            <li class="about__item">Cria linhas perfeitamente suaves</li>
            <li class="about__item">Remove micro pêlos</li>
            <li class="about__item">Sem salões de beleza!</li>
        </ul>
    </section>
    <section class="choice">
        <div class="heading">
            <h2 class="basic-title choice__title">estrelas escolhem</h2>
        </div>
        <div class="slider">
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/choice-1.jpg" alt="" />
            </div>
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/choice-2.jpg" alt="" />
            </div>
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/choice-3.jpg" alt="" />
            </div>
        </div>
        <p class="choice__text">
            Qualquer que seja bonita a maquiagem, sobrancelhas despenteadas
            estragam toda a imagem e adicionam-te idade.
        </p>
        <p class="choice__text">
            Ajustar as sobrancelhas é doloroso e difícil, e depois disso, a
            irritação pode permanecer por vários dias. Esqueça-te disso!
        </p>
        <p class="choice__text">
            Com a ajuda de <span class="flawless">FLAWLESS BROWS </span>em alguns
            minutos você vai trazer as sobrancelhas em perfeita forma!
        </p>
    </section>
    <section class="description">
        <div class="heading">
            <h2 class="basic-title description__title">
                FLAWLESS BROWS — DEPILADORA INOVADORA PARA SOBRANCELHAS
            </h2>
        </div>
        <div class="description__grid">
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/1.jpg" />
                <div class="description__text">
                    Compacto e não ocupa muito espaço no saco de cosmética
                </div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/2.jpg" />
                <div class="description__text">
                    LED retroiluminado para correção precisa
                </div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/3.jpg" />
                <div class="description__text">
                    Portátil e alimentado por bateria
                </div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/4.jpg" />
                <div class="description__text">
                    Estojo em forma de rímel elegante
                </div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/5.jpg" />
                <div class="description__text">Seguro e hipoalergênico</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/6.jpg" />
                <div class="description__text">Adequado para cada menina!</div>
            </div>
        </div>
    </section>
    <section class="prop">
        <div class="heading">
            <h2 class="basic-title prop__title">
                SOBRANCELHAS SEMPRE ARRUMADAS E ESTILOSAS
            </h2>
        </div>
        <ul class="prop__list">
            <li class="prop__item">
                <p class="prop__main">Resultado instantâneo e indolor</p>
                <p>
                    Você não precisa mais suportar a dor de uma pinça ou fio.
                    Irritação e vermelhidão após a correção desaparecerão para sempre!
                </p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Seguro e hipoalergênico</p>
                <p>
                    FLAWLESS BROWS tem um bocal revestido com ouro de 18 quilates: não
                    causa irritação, alergias e cuidados com a pele!
                </p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Para qualquer forma de sobrancelha</p>
                <p>
                    Você não precisa mais ir ao mestre para criar a forma de
                    sobrancelha perfeita para o seu rosto.
                </p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Aprovado por estilistas de sobrancelhas</p>
                <p>
                    Profissionais artesãos nos salões estão cada vez mais abandonando
                    o fio e pinças em favor de FLAWLESS BROWS.
                </p>
            </li>
        </ul>
    </section>
    <section class="reviews">
        <div class="heading">
            <h2 class="basic-title reviews__title">
                ДMENINAS GOSTAM DE EFEITOS DE FLAWLESS BROWS
            </h2>
        </div>
        <p class="reviews__stat">
            <span class="stat-num">98%</span> compradores recomendam este produto
        </p>
        <div class="reviews__graphics">
            <div class="reviews__graphics--inner"></div>
        </div>
        <div class="slider">
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/review-1.jpg" alt="" />
                <h3 class="reviews__name">Sofia, 29 anos</h3>
                <p class="reviews__text">
                    Todos os estilistas dizem que as sobrancelhas são a base do rosto,
                    então eu sempre cuidadosamente cuidei delas, embora eu odiasse
                    extrair elas. Em um ponto eu estava cansado de suportar a dor por
                    uma questão de beleza e eu comprei um depilador milagroso sem
                    tinta. O bocal é confortável: modele as sobrancelhas com muita
                    facilidade. Em vez de meia hora de tortura, como era antes, em
                    alguns minutos posso corrigir minhas sobrancelhas sem sentir dor
                    alguma. Isso é salvação!
                </p>
            </div>
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/review-2.jpg" alt="" />
                <h3 class="reviews__name">Bianca, 31 anos</h3>
                <p class="reviews__text">
                    Minhas lindas sobrancelhas estavam estragadas no salão de beleza:
                    elas formavam uma forma que não se encaixava. Eu decidi
                    consertá-lo e comprei um depilador FLAWLESS BROWS. Não é
                    comparável a uma pinça: é muito fácil modelar a forma, sem dor! As
                    sobrancelhas ficam magníficas, como eu queria. É fácil de usar:
                    passo apenas 2 minutos, e o resultado é melhor que o dos
                    profissionais!
                </p>
            </div>
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover3/review-3.jpg" alt="" />
                <h3 class="reviews__name">Clara, 27 anos</h3>
                <p class="reviews__text">
                    Por natureza eu tenho sobrancelhas grossas, que exigem cuidados
                    constantes, caso contrário, elas parecem feias e desleixadas.
                    Anteriormente, uma vez em 2 semanas fui para o bar da testa, onde
                    o mestre moldou minhas sobrancelhas. Apesar de ser uma grande
                    especialista, ainda era dolorosa e desagradável. Agora eu uso
                    FLAWLESS BROWS e esqueço o desconforto e a irritação. É legal,
                    garotas, eu aconselho a todos!
                </p>
            </div>
        </div>
    </section>
    <section class="order">
        <div class="heading">
            <h2 class="basic-title order__title">compra e pagamento</h2>
        </div>
        <ul class="order__list">
            <li class="order__item">
                <p class="order__main">Entrega rápida</p>
                <p>Entregamos o seu pedido dentro de 1-3 dias.</p>
            </li>
            <li class="order__item">
                <p class="order__main">Pagamento após entrega</p>
                <p>
                    O pagamento é feito
                    somente após o recibimento do pedido em mãos.
                </p>
            </li>
            <li class="order__item">
                <p class="order__main">Garantias</p>
                <p>Todos os produtos são testados e totalmente certificados!</p>
            </li>
        </ul>
    </section>
    <section class="offer offer--bottom">
        <div class="offer__main-bg">
            <p class="offer__desc">
                FLAWLESS BROWS DE FINISHING TOUCH SOBRANCELHAS IDEAIS SEM PINÇAS E
                DOR
            </p>
            <div class="offer__discount">-50%</div>
        </div>
        <ul class="offer__list">
            <li class="offer__item">indoloroso</li>
            <li class="offer__item">rapidamente</li>
            <li class="offer__item">compactamente</li>
            <li class="offer__item">elegantemente</li>
        </ul>
        <div class="offer__price">
            <div class="offer__old old-price">
                <p class="old-price__text">preço antigo</p>
                <p class="old-price__num">
                    {{ $prices[1]['originalPrice'] }} RSD
                </p>
            </div>
            <div class="offer__new new-price">
                <p class="new-price__text">preço novo</p>
                <p class="new-price__num">
                    {{ $prices[1]['amount'] }} RSD
                </p>
            </div>
        </div>
        {{--
        <h2 class="offer__timer-title offer__timer-title--bottom">--}}
        {{--Até a promoção terminar--}}
        {{--
     </h2>
     --}}
        {{--
        <div class="timer">
           <div class="countbox clearfix"></div>
        </div>
        --}}
        <p class="offer__balance">
            Restam apenas
            <span class="balance-count">&nbsp;9&nbsp;</span>&nbsp;peças com
            desconto
        </p>
        <form class="main-form" id="main-form" method="POST" action="#">
            <label for="name">Por exemplo: Pedro Carlos Costa</label>
            <input
                    id="name"
                    type="text"
                    name="name"
                    placeholder="Nome completo"
                    required
            />
            <label for="phone">Por exemplo: +3519876543210</label>
            <input
                    id="phone"
                    type="tel"
                    name="phone"
                    placeholder="Seu número de telefone"
                    required
            />
            <button type="submit">encomendar com desconto</button>
        </form>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(function() {
        $('a[href^="#"]').click(function() {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });

        $('.slider').slick({
            infinite: true,
            dots: true
        });
    });
</script>
{{--<script src="http://flawlessbrows169.xcartpro.com/m7/scripts/timer.min.js"></script>--}}
</body>
</html>