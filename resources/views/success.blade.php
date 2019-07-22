@extends('layouts.plantilla')
@section('titulo')
  success
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="splilist">
            <div class="success">


              <h1>Compra realizada!!</h1>

            	<p>Se a efectuado la compra exitosamente :)</p>

            	<p>
            		<a href="/products">Continuar comprando</a>
            	</p>
              </div>
          </div>
        </div>
  </div>
@endsection
