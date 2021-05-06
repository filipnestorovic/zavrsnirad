@component('mail::layout')

@slot('header')
    @component('mail::header', ['url' => config('app.url')])
        <img src="{{$data->logo_transparent}}" alt="logo" width="200px;"/>
    @endcomponent
@endslot

Poštovani/a {{ $data->name }},

Zaboravili ste da kompletirate narudžbinu :( Ali, ne brinite, akcijska cena još uvek važi, a proizvod se čuva za Vas.

I ne samo to, kako bismo Vam pomogli u odluci dodali smo Vam popust od <b>15%</b> na već snižene cene.

Obzirom na visoku tražnju, nismo sigurno koliko dugo ćemo moći da čuvamo Vašu narudžbinu pa Vas molimo da je kompletirate što pre.

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
