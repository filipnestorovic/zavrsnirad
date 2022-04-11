<!DOCTYPE>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/') }}flexovalFiles/antismellsocks/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/antismellsocks/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Open+Sans&amp;display=swap" rel="stylesheet">
</head>
<body>
<header class="intro">
    <div class="intro__main">
        <div class="intro__top">
            <p class="intro__slogan"> Anti-Smell Socks</p>
            <p class="intro__subtitle"> O melhor do 2020!</p>
        </div>
    </div>
    <div class="intro__bottom">
        <div class="builets">
            <div class="builets__list">
                <div class="builets__item"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/builets__item_1.png" alt><span>
                     100% algodão</span>
                </div>
                <div class="builets__item"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/builets__item_2.png" alt><span>
                     Tratamento antibiótico</span>
                </div>
                <div class="builets__item"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/builets__item_3.png" alt><span>
                     Ajuste preciso na forma do seu pé</span>
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price__item price__item--lef">
                <span>Stara cena:</span>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
            <div class="price__center">
                <b> -40%</b>
            </div>
            <div class="price__item price__item--righ">
                <span>Nova cena:</span>
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
            </div>
        </div>
        <br>
        <a href="#offer" class="btn"> Encomenda com desconto</a>
        <br>
    </div>
</header>
<main class="main">
    <section class="sect1">
        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect1_top.png" alt class="sect1__top">
        <div class="content">
            <h2 class="sect1__title"> Vantagens de <br>Anti-Smell Socks </h2>
            <div class="sect1__grid">
                <div class="sect1__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect1_1.png" alt>
                    <p> Forma anatómica</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect1_2.png" alt>
                    <p> Respiração</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect1_3.png" alt>
                    <p> Impregnação de antifúngicos</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect1_4.png" alt>
                    <p> Alta resistência <br>ao desgaste</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect2__top.png" alt class="sect1__bottom">
    </section>
    <section class="sect2">
        <div class="content">
            <div class="sect2__main">
                <h2 class="sect2__title"> O QUE SÃO <br>Anti-Smell Socks?</h2>
                <p class="sect2__text"> A diferença entre estas meias e as meias normais é um tratamento especial e a impregnação de antifúngicos sanitizados, que não só protege os pés de doenças fúngicas, mas também elimina o cheiro desagradável do suor, ao mesmo tempo que proporciona um maior nível de conforto (atua como desodorizante). As meias mantêm a sua caraterística antimicrobiana mesmo após múltiplas lavagens.</p>
                <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect2_img1.png" alt class="no-pad">
                <p class="sect2__text"> Essas médias darão confiança a qualquer pessoa. Pode usá-las tanto para dar um passeio, como para fazer desporto. Independentemente do tipo de actividade, não há necessidade de se preocupar com o aparecimento do mau cheiro dos pés.</p>
                <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect2_img2.png" alt class="no-pad">
            </div>
            <a href="#offer" class="btn"> Encomendar</a>
        </div>
    </section>
    <section class="sect5">
        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/backround_4.png" alt class="sect5__top">
        <h2 class="sect5__title"> OPINIÕES SOBRE <br>Anti-Smell Socks</h2>
        <div class="reviews owl-carousel">
            <div class="reviews__item">
                <div class="reviews__header">
                    <div class="reviews__lef">
                        <img class="ava" src="{{ asset('/') }}flexovalFiles/antismellsocks/ava_1.png" alt>
                        <p class="reviews__name"> Federico</p>
                    </div>
                </div>
                <div class="reviews__main">
                    <p class="reviews__comment reviews__comment--righ"> Boa tarde, Federico! Gostaste de Anti-Smell Socks?</p>
                    <div class="reviews__user">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_1.png" alt class="reviews__img">
                        <p class="reviews__comment reviews__comment--left"> Olá, sim, muito! Faço muito desporto e, naturalmente, depois de treinar o cheiro dos pés deixa muito a desejar, mas não nestas meias. Não há cheiro nenhum. Só as uso agora!!! Muito obrigado!</p>
                    </div>
                    <p class="reviews__comment reviews__comment--righ"> Estamos muito felizes!</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__header">
                    <div class="reviews__lef">
                        <img class="ava" src="{{ asset('/') }}flexovalFiles/antismellsocks/ava_2.png" alt>
                        <p class="reviews__name"> André K.</p>
                    </div>
                </div>
                <div class="reviews__main">
                    <p class="reviews__comment reviews__comment--righ"> Olá. Sentam-te bem os Anti-Smell Socks?</p>
                    <div class="reviews__user">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_2.png" alt class="reviews__img">
                        <p class="reviews__comment reviews__comment--left"> Boa tarde! O tamanho serve perfeitamente. Sentam-se muito confortavelmente na perna, tudo como descrito no site. Encomendei mais 2 pares para o meu filho. Obrigado!</p>
                    </div>
                    <div class="reviews__user"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_2.png" alt class="reviews__img">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/comment_1.png" alt class=" reviews__comment--img">
                    </div>
                    <br>
                    <p class="reviews__comment reviews__comment--righ"> Usá-las com prazer!</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__header">
                    <div class="reviews__lef">
                        <img class="ava" src="{{ asset('/') }}flexovalFiles/antismellsocks/ava_3.png" alt>
                        <p class="reviews__name"> Victor Cor</p>
                    </div>
                </div>
                <div class="reviews__main">
                    <p class="reviews__comment reviews__comment--righ"> Boa tarde, você recebeu Anti-Smell Socks?</p>
                    <div class="reviews__user">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_3.png" alt class="reviews__img">
                        <p class="reviews__comment reviews__comment--left"> Olá. Sim, agradeço-lhe pela sua entrega rápida em apenas dois dias. Gosto muito das meias, é a melhor invenção da humanidade! Sempre tive um problema de mau cheiro, agora que esse problema está resolvido! Muito obrigado!</p>
                    </div>
                    <div class="reviews__user"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_3.png" alt class="reviews__img">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/comment_2.png" alt class=" reviews__comment--img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect6">
        <div class="content">
            <h3 class="sect6__title"> Como faço o pedido?</h3>
            <div class="sect6__grid">
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_1.png" alt>
                    <p><b> APLICAÇÃO</b> Deixe uma aplicação no nosso website</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_2.png" alt>
                    <p><b> CHAMADA</b> O gestor clarifica os detalhes da encomenda</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_3.png" alt>
                    <p><b> ENVIO</b> Entregamos a encomenda dentro de 2-5 dias</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_4.png" alt>
                    <p><b> RECEPÇÃO</b> Pague na recepção</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="intro">
    <div class="intro__main">
        <div class="intro__top">
            <p class="intro__slogan"> Anti-Smell Socks</p>
            <p class="intro__subtitle"> O melhor do 2020!</p>
        </div>
    </div>
    <div class="intro__bottom">
        <div class="price">
            <div class="price__item price__item--lef">
                <span>Stara cena:</span>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
            <div class="price__center">
                <b> -40%</b>
            </div>
            <div class="price__item price__item--righ">
                <span>Nova cena:</span>
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
            </div>
        </div>
        <br>
        <form id="offer" method="POST" action="{{$orderRoute}}" class="form">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" name="name" required placeholder="Ime i prezime">
            <input type="tel" name="phone" required placeholder="Telefon">
            <button class="btn">Završite porudžbinu</button>
        </form>
    </div>
</footer>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".reviews").owlCarousel({
            margin: 20,
            items: 1,
            dots: true,
            nav: false,
            autoHeight: true
        });
    });
</script>
</body>
</html>
