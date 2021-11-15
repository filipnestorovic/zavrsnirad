<!DOCTYPE html>
<html >
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="description" content="Набор для перестановки мебели Архимед">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/movermate/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/movermate/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/movermate/main.css">
</head>
<body>
<main class="main">
    <section class="welcome">
        <div class="container">
            <div class="welcome__content">
                <h1>Набор для перестановки мебели Архимед</h1>
                <div class="welcome__blocks">
                    <div class="welcome__block">
                        <h2>Лучший помощник при уборке и переезде</h2>
                        <div class="welcome__items">
                            <div class="welcome__item">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/chek.png" alt="">
                                <p>Минимум усилий даже при перемещении тяжелых вещей</p>
                            </div>
                            <div class="welcome__item">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/chek.png" alt="">
                                <p>Надежный механизм, выполненный из качественных материалов</p>
                            </div>
                            <div class="welcome__item">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/chek.png" alt="">
                                <p>Набор максимально прост в использовании</p>
                            </div>
                        </div>
                        <div class="welcome__button">
                            <a href="#form">Poručite sada</a>
                        </div>
                    </div>
                    <div class="welcome__block">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/welcome1.png" alt="" class="welcome__img">
                        <div class="welcome__price">
                            <div class="welcome__price--old old-price-wrapper">
                                <p>Stara cena</p>
                                <span>
                                 <span class="price-value">
                                    {{ $prices[1]['originalPrice'] }}
                                 </span>
                                 RSD
                              </span>
                            </div>
                            <div class="welcome__price--new price-wrapper">
                                <p>Nova sada</p>
                                <span>
                                 <span class="price-value">
                                    {{ $prices[1]['amount'] }}
                                 </span>
                                 RSD
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="welcome__amount"><img src="{{ asset('/') }}dailysharkFiles/movermate/znak.png" alt="">Количество товаров на складе ограничено
                </p>
            </div>
        </div>
    </section>
    <section class="welcome-mob">
        <div class="container">
            <div class="welcome-mob__content">
                <h2>Набор для перестановки мебели Архимед</h2>
                <h3>Лучший помощник при уборке и переезде</h3>
                <img class="welcome-mob__img" src="{{ asset('/') }}dailysharkFiles/movermate/welcome2.png" alt="">
                <div class="welcome__price">
                    <div class="welcome__price--old old-price-wrapper">
                        <p>Stara cena</p>
                        <span>
                           <span class="price-value">
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                           RSD
                        </span>
                    </div>
                    <div class="welcome__price--new price-wrapper">
                        <p>Nova sada</p>
                        <span>
                           <span class="price-value">
                              {{ $prices[1]['amount'] }}
                           </span>
                           RSD
                        </span>
                    </div>
                </div>
                <img class="welcome-mob__img" src="{{ asset('/') }}dailysharkFiles/movermate/welcome3.png" alt="">
                <div class="welcome__button">
                    <a href="#form">Poručite sada</a>
                </div>
                <p class="welcome__amount"><img src="{{ asset('/') }}dailysharkFiles/movermate/znak.png" alt="">Количество товаров на складе ограничено
                </p>
                <div class="welcome__items">
                    <div class="welcome__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/chek.png" alt="">
                        <p>Минимум усилий даже при перемещении тяжелых вещей</p>
                    </div>
                    <div class="welcome__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/chek.png" alt="">
                        <p>Надежный механизм, выполненный из качественных материалов</p>
                    </div>
                    <div class="welcome__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/chek.png" alt="">
                        <p>Набор максимально прост в использовании</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tasks">
        <div class="container">
            <div class="tasks__content">
                <h2>Сделайте простыми сложные задачи</h2>
                <div class="tasks__blocks">
                    <div class="tasks__block">
                        <div class="tasks__description">
                            <p>Возможно, когда-то вы сталкивались ситуацией, когда при неудачной перестановке мебели пострадали стены и пол. Забудьте об этих неприятных моментах!</p>
                            <p><strong>«Архимед» создан для того, чтобы каждый человек мог без труда и ущерба
                                    переставить мебель.</strong> Переместить диван в другую комнату или огромный комод? Без проблем! Помыть пол под шкафом? Нет ничего проще!
                            </p>
                        </div>
                    </div>
                    <div class="tasks__block">
                        <div class="tasks__slider">
                            <div class="tasks__img">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/tasks1.png" alt="">
                            </div>
                            <div class="tasks__img">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/tasks2.png" alt="">
                            </div>
                            <div class="tasks__img">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/tasks3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="advantages__content">
                <h2>Преимущества набора Архимед</h2>
                <div class="advantages__items">
                    <div class="advantages__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/advantages1.png" alt="">
                        <p>Справится даже хрупкая девушка</p>
                    </div>
                    <div class="advantages__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/advantages2.png" alt="">
                        <p>Легкая уборка под шкафами и диванами</p>
                    </div>
                    <div class="advantages__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/advantages3.png" alt="">
                        <p>Боль в спине больше не будет беспокоить</p>
                    </div>
                    <div class="advantages__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/advantages4.png" alt="">
                        <p>Никаких царапин на напольном покрытии</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <div class="video__content">
                <h2>Не тратьте время и деньги на грузчиков</h2>
                <div class="video__items">
                    <video src="{{ asset('/') }}dailysharkFiles/movermate/video1.mp4" controls muted autoplay></video>
                    <video src="{{ asset('/') }}dailysharkFiles/movermate/video2.mp4" controls muted autoplay></video>
                </div>
                <div class="welcome__button">
                    <a href="#form">Poručite sada</a>
                </div>
            </div>
        </div>
    </section>
    <section class="easy">
        <div class="container">
            <div class="easy__content">
                <div class="easy__blocks">
                    <div class="easy__block easy__block--left">
                        <h2>Простая эксплуатация</h2>
                        <div class="easy__items">
                            <div class="easy__item">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/easy1.png" alt="">
                                <p>Вставьте подъемник нижнюю часть мебели и нажмите на ручку</p>
                            </div>
                            <div class="easy__item">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/easy2.png" alt="">
                                <p>Поместите платформы под углы мебели</p>
                            </div>
                            <div class="easy__item">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/easy3.png" alt="">
                                <p>Поднимите ручку подъемника и он лекго выйдет из под мебели</p>
                            </div>
                            <div class="easy__item">
                                <img src="{{ asset('/') }}dailysharkFiles/movermate/easy4.png" alt="">
                                <p>Готово! Вы можете передвинуть необходимые вещи в любом направлении</p>
                            </div>
                        </div>
                    </div>
                    <div class="easy__block easy__block--right">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/easy5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="set">
        <div class="container">
            <div class="set__content">
                <h2>Набор Архимед 5 в 1</h2>
                <div class="set__blocks">
                    <div class="set__block">
                        <p><strong>Количество подъемников:</strong> 1;</p>
                        <p><strong>Количество платформ на колесиках:</strong> 4;</p>
                        <p><strong>Размер одной платформы:</strong> 10х 7,8 х 3см;</p>
                        <p><strong>Длина ручки-подъемника:</strong> 35 см;</p>
                        <p><strong>Материал:</strong> прочная закаленная сталь, пластик, резина;</p>
                        <p><strong>Вес:</strong> 1200 грамм.</p>
                        <p><strong>Максимальная нагрузка на 1 платформу:</strong> 100кг</p>
                    </div>
                    <div class="set__block">
                        <img class="easy__img" src="{{ asset('/') }}dailysharkFiles/movermate/set1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="reviews__content">
                <h2>Отзывы</h2>
                <div class="reviews__slider">
                    <div class="reviews__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/reviews1.png" alt="">
                    </div>
                    <div class="reviews__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/reviews2.png" alt="">
                    </div>
                    <div class="reviews__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/reviews3.png" alt="">
                    </div>
                    <div class="reviews__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/reviews4.png" alt="">
                    </div>
                    <div class="reviews__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/reviews5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="delivery">
        <div class="container">
            <div class="delivery__content">
                <h2>Доставка</h2>
                <h3>Доставляем по всех стране</h3>
                <div class="delivery__items">
                    <div class="delivery__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/delivery1.png" alt="">
                        <p>Почтой России</p>
                    </div>
                    <div class="delivery__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/delivery2.png" alt="">
                        <p>Курьерской службой</p>
                    </div>
                    <div class="delivery__item">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/delivery3.png" alt="">
                        <p>Через постоматы</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome" id="form">
        <div class="container">
            <div class="welcome__content">
                <h1>Набор для перестановки мебели Архимед</h1>
                <div class="welcome__blocks">
                    <div class="welcome__block">
                        <h2>Лучший помощник при уборке и переезде</h2>
                        <form method="post" action="{{$orderRoute}}">
                            <div class="welcome__price">
                                <div class="welcome__price--old old-price-wrapper">
                                    <p>Stara cena</p>
                                    <span>
                                    <span class="price-value">
                                       {{ $prices[1]['originalPrice'] }}
                                    </span>
                                    RSD
                                 </span>
                                </div>
                                <div class="welcome__price--new price-wrapper">
                                    <p>Nova sada</p>
                                    <span>
                                    <span class="price-value">
                                       {{ $prices[1]['amount'] }}
                                    </span>
                                    RSD
                                 </span>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" type="text" placeholder="Ime i prezime" required>
                            <input name="phone" type="tel" placeholder="Telefon" required>
                            <input name="shipping_address" type="text" placeholder="Adresa" required>
                            <input name="shipping_city" type="text" placeholder="Grad" required>
                            <button type="submit">Poručite sada</button>
                        </form>
                    </div>
                    <div class="welcome__block">
                        <img src="{{ asset('/') }}dailysharkFiles/movermate/welcome1.png" alt="" class="welcome__img">
                    </div>
                </div>
            </div>
        </div>
        <section class="welcome-mob">
            <div class="container">
                <div class="welcome-mob__content">
                    <h2>Набор для перестановки мебели Архимед</h2>
                    <h3>Лучший помощник при уборке и переезде</h3>
                    <img class="welcome-mob__img" src="{{ asset('/') }}dailysharkFiles/movermate/welcome2.png" alt="">
                    <div class="welcome__price">
                        <div class="welcome__price--old old-price-wrapper">
                            <p>Stara cena</p>
                            <span>
                              <span class="price-wrapper">
                                 {{ $prices[1]['originalPrice'] }}
                              </span>
                              RSD
                           </span>
                        </div>
                        <div class="welcome__price--new price-wrapper">
                            <p>Nova sada</p>
                            <span>
                              <span class="price-wrapper">
                                 {{ $prices[1]['amount'] }}
                              </span>
                              RSD
                           </span>
                        </div>
                    </div>
                    <img class="welcome-mob__img" src="{{ asset('/') }}dailysharkFiles/movermate/welcome3.png" alt="">
                    <form method="post" action="{{$orderRoute}}">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input name="name" type="text" placeholder="Ime i prezime" required>
                        <input name="phone" type="tel" placeholder="Telefon" required>
                        <input name="shipping_address" type="text" placeholder="Adresa" required>
                        <input name="shipping_city" type="text" placeholder="Grad" required>
                        <button type="submit">Poručite sada</button>
                    </form>
                </div>
            </div>
        </section>
    </section>
</main>
<div id="details-wrapper"></div>
<script src="{{ asset('/') }}dailysharkFiles/movermate/scripts.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/movermate/slick.min.js"></script>
</body>
</html>