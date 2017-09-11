@component('mail::message')
    # Ola

    O estoque de {{$product->name}} esta abaixo do minimo permitido.

    Estoque Atual: {{$product->stock}}

    Estoque Minimo: {{intval($product->stock_max*0.10)}}

    Obrigado,<br>
{{ config('app.name') }}
@endcomponent
