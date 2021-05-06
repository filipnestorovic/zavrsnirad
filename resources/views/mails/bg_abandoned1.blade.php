@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{$data->logo_transparent}}" alt="logo" width="200px;"/>
@endcomponent
@endslot

Здравейте {{ $data->name }},

Вие сте пропуснали да завършите поръчката :( Но не се тревожете, специалната цена все още е валидна и продуктът е запазен за Вас.

И не само това, за да Ви помогнем с Вашето решение, ние добавихме <b>15% отстъпка</b> към съдържанието на Вашата количка.

Поради голямото търсене, ние не сме сигурни колко дълго ще бъдем способни да задържим Вашата поръчка, така че Ви молим да я завършите възможно най-скоро.

@component('mail::button', ['url' => $data->buttonUrl, 'color' => 'primary'])
ЗАВЪРШЕТЕ ПОКУПКАТА﻿
@endcomponent

Ако имате някакви въпроси или предложения, ние ще сме тук за Вас 24/7

@wombatshop.eu
info@wombatshop.eu

Благодаря, {{ config('app.name') }}

<style>
.button {
width: 200px;
text-align: center;
font-weight: bold;
}
</style>

<!-- Body here -->

@slot('subcopy')
@component('mail::subcopy')
<!-- subcopy here -->
@endcomponent
@endslot

@slot('footer')
@component('mail::footer')
<!-- footer here -->
@endcomponent
@endslot
@endcomponent
