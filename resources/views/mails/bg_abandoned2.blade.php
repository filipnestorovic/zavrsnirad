@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{$data->logo_transparent}}" alt="logo" width="200px;"/>
@endcomponent
@endslot

Здравейте {{ $data->name }},

Имате ли нужда от помощ за завършването на Вашата поръчка? Нашият екип за поддръжка е на Ваше разположение.

Съдържанието на Вашата количка все още е запазено. Освен това добавихме допълнителна 20% отстъпка към Вашата поръчка.

Ние ще запазим Вашата поръчка за още един ден, но поради голямото търсене, не можем да гарантираме, че съдържанието на Вашата количка ще бъде налично по-късно.

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
