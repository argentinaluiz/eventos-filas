@component('mail::message')
# Ol?

O estoque de {{$product->name}} esta acima do maximo permitido

Estoque atual: {{$product->stock}}

Estoque M?ximo: {{$product->stock_max}}

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
