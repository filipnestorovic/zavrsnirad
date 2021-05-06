<style>
    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        border: 1px solid transparent;
        border-radius: .25rem;
        text-align:center;
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }
    .alert-success {
        color: #155724 !important;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
    .alert-success h3 {
        color: #155724 !important;
    }
    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
</style>

@if($errors->any())
    <div class="alert alert-danger" role="alert" >
        <b>{{$errors->first()}}</b>
    </div>
@endif

@php
    $discountText = "";
    switch ($product->country_code) {
        case "rs":
            $discountText = "PRIMENJEN DODATNI POPUST OD";
            break;
        case "bg":
            $discountText = "ПРИЛОЖЕНО ДОПЪЛНИТЕЛНО ОТСТЪПКА ОТ";
            break;
        case "ba":
            $discountText = "PRIMIJENJEN DODATNI POPUST OD";
            break;
        case "gr":
            $discountText = "ΕΦΑΡΜΟΓΗ ΠΡΟΣΘΕΤΗΣ ΕΚΠΤΩΣΗΣ";
            break;
        case "pl":
            $discountText = "ZASTOSOWANA DODATKOWA RABAT W WYSOKOŚCI";
            break;
        case "ro":
            $discountText = "REDUCERE ADICIONALĂ APLICATĂ DE";
            break;
    }
@endphp

@if($discount)
    <div class="alert alert-success" role="alert" style="">
        <h3 class="alert-heading">{{ $discountText }} {{$discount}}%!</h3>
    </div>
@endif