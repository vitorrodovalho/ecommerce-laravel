@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="thank-you-section">
       <h1>Obrigado por realizar <br> seu pedido!</h1>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button">Página Inicial</a>
       </div>
   </div>
@endsection
