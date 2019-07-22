@extends('layouts.plantilla')
@section('titulo')
  Slips
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="splilist">

            <div class="listado">
                @foreach ($slips as $slip)
                  @if ($slip->stock>0)
                  <div class="item">
                      <a href="product/{{$slip->id}}"><img src="storage/index.jpg" alt=""> </a>
                      <a style="font-weight=bold;"href="product/{{$slip->id}}">{{$slip->name}}</a>
                      <a href="product/{{$slip->id}}">Precio: {{$slip->price}}</a>
                  </div>
                  @endif
                @endforeach
              </div>
          </div>
        </div>
  </div>
@endsection
