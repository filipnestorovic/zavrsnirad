@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{$data->logo_transparent}}" alt="logo" width="200px;"/>
@endcomponent
@endslot

<h1 style="padding-top: 40px; text-align: center;" align="center">Hvala Vam na ukazanom poverenju! Vaša porudžbina je primljena i potvrdjena!</h1>

<br>

<h3 style="margin-top: 30px; text-align: center;" align="center">Kontakt podaci</h3>

<table class="table-fill" style="border-radius: 3px; border-collapse: collapse; height: auto; max-width: 600px; width: 100%; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); animation: float 5s infinite; margin: auto; padding: 5px;" bgcolor="white">
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: none; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle">Ime</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle"> {{ $data->name }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle">Email</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle"> {{ $data->email }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle">Telefon</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle"> {{ $data->phone }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle">Adresa</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle"> {{ $data->street }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle">Grad</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle"> {{ $data->city }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: none; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="border-bottom-left-radius: 3px; font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle">Poštanski broj</td>
<td style="border-bottom-right-radius: 3px; font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle"> {{ $data->zip }} </td>
</tr>
</table>

<br>

<h3 style="margin-top: 30px; text-align: center;" align="center">Detalji porudžbine</h3>

<table class="table-fill" style="border-radius: 3px; border-collapse: collapse; height: auto; max-width: 600px; width: 100%; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); animation: float 5s infinite; margin: auto; padding: 5px;" bgcolor="white">
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: none; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle">Broj porudžbine</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle"> {{ $data->id_order }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle">Datum porudžbine</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle"> {{ $data->id_order }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle">Proizvod</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle"> {{ $data->product_name }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: solid; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle">Koli&#269;ina</td>
<td style="font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#FFFFFF" valign="middle"> {{ $data->quantity }} </td>
</tr>
<tr style="border-top-width: 1px; border-top-color: #C1C3D1; border-top-style: solid; border-bottom-width: 1px; border-bottom-color: #C1C3D1; border-bottom-style: none; color: #666B85; font-size: 16px; font-weight: normal; text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);">
<td style="border-bottom-left-radius: 3px; font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 1px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle"><b>Ukupno</b></td>
<td style="border-bottom-right-radius: 3px; font-weight: 300; font-size: 18px; text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1); border-right-width: 0px; border-right-color: #C1C3D1; border-right-style: solid; padding: 14px;" align="left" bgcolor="#EBEBEB" valign="middle">
    <b> {{ $data->price }} RSD </b> @if($data->is_order_with_free_shipping==0) + PTT troškovi @endif
</td>
</tr>
</table>

<br><br>

<h3 style="text-align: center;" align="center">Za sve informacije mozete nas kontaktirati putem Facebook-a, Instagrama i na 060/046-0469</h3>
<br>

<h3 style="text-align: center;" align="center"><b>Vaš {{ $data->brand_name }}</b></h3>
<br>

{{--<div id="thankHome" style="margin-top: 30px;" align="center">--}}
{{--<a href="" style="color: #666B85;"></a>--}}
{{--</div>--}}


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
