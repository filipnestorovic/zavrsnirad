@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{$data->logo_transparent}}" alt="logo" width="200px;"/>
@endcomponent
@endslot

Poštovani/a {{ $data->name }},

<h1>Još uvek čuvamo proizvod za Vas. Jedan klik Vas deli od kompletiranja narudžbine.</h1>

Da li Vam je potrebna pomoć prilikom kompletiranja narudžbine? Naš support tim Vam stoji na raspolaganju.

Sadržaj Vaše korpe se još uvek čuva. Takođe, dodali smo dodatnih <b>20%</b> popusta na Vašu porudžbinu.

Čuvaćemo Vašu narudžbinu još 24h ali usled velike tražnje ne možemo da garantujemo da će sadržaj Vaše korpe biti dostupan kasnije.

@component('mail::button', ['url' => $data->buttonUrl, 'color' => 'primary'])
ZAVRŠI KUPOVINU
@endcomponent

Za sva pitanja stojimo Vam na raspolaganju, svakog dana od 10-18h na <a href="tel:+381600460469">060/046-0469</a>

Hvala, {{ config('app.name') }}

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
