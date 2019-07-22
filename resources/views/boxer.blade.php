@extends('layouts.plantilla')
@section('titulo')
  Slips
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="splilist">
            <div class="listado">
                <h1>Boxer</h1>
                @foreach ($boxers as $boxer)
                  @if ($boxer->stock>0)
                  <div class="item">
                      <a href="product/{{$boxer->id}}"><img src="storage/index.jpg" alt=""> </a>
                      <a href="product/{{$boxer->id}}">Producto: {{$boxer->name}}</a>
                      <a href="product/{{$boxer->id}}">Precio: ${{$boxer->price}}</a>
                  </div>
                @endif
                @endforeach
              </div>
          </div>
        </div>
  </div>
@endsection
