@extends('layouts.plantilla')
@section('titulo')
  Slips
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="splilist">
            <div class="listado">
                <h1>Mini Boxer</h1>
                @foreach ($miniBoxers as $miniBoxer)
                  @if ($miniBoxer->stock>0)
                  <div class="item">
                      <a href="product/{{$miniBoxer->id}}"><img src="storage/index.jpg" alt=""> </a>
                      <a href="product/{{$miniBoxer->id}}">Producto: {{$miniBoxer->name}}</a>
                      <a href="product/{{$miniBoxer->id}}">Precio: ${{$miniBoxer->price}}</a>
                  </div>
                @endif
                @endforeach
              </div>
          </div>
        </div>
  </div>
@endsection
