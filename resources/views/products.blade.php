@extends('layouts.plantilla')
@section('titulo')
  Products
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="splilist">
            <div class="listado">
                @foreach ($products as $product)
                  @if ($product->stock>0)
                  <div class="item">
                      <a href="product/{{$product->id}}"><img src="storage/index.jpg" alt=""> </a>
                      <a href="product/{{$product->id}}">{{$product->name}}</a>
                      <a href="product/{{$product->id}}">Precio: ${{$product->price}}</a>
                  </div>
                @endif
                @endforeach
              </div>
          </div>
        </div>
  </div>
@endsection
