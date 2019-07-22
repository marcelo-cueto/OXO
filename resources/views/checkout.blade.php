@extends('layouts.plantilla')
@section('titulo')
  Checkout
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="splilist">
            <div class="listado">
              <ul>
                @php
                  $total=0;
                @endphp
                @foreach ($cart->list() as $product)
                  <li class="checkoutList">
                      <a href="product/{{$product->id}}"><img src="storage/index.jpg" alt=""> </a>
                      <a href="product/{{$product->id}}">{{$product->name}}</a>
                      <a href="product/{{$product->id}}">Precio: ${{$product->price}}</a>
                  </li>
                  @php
                    $total +=$product->price;
                  @endphp
                @endforeach
                </ul>
                <p>Total: ${{$total}}</p>
                @if (Auth::check())
                		<form method="POST" action="checkout">
                			{{csrf_field()}}
                			<button class="searchB" type="submit">Terminar compra</button>

                		</form>
                	@else
                		<p style="color:red">You must be logged to finish shopping</p>
                	@endif
              </div>
          </div>
        </div>
  </div>
@endsection
