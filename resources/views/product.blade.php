@extends('layouts.plantilla')
@section('titulo')
  Producto
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="itemList">
            <div class="picItem">
              <img src="storage/index.jpg" alt="">
            </div>
            <div class="infoItem">
                <ul>
                  <li><p >{{$product->name}}</p></li>
                  <li><p >$ {{$product->price}} </p> </li>
                  @if (Auth::check())
                    <li>
                    @if (!$cart->contains($product))
                  		<form action="/addToCart/{{$product->id}}" method="POST">
                  			{{csrf_field()}}
                  			<button class="btn btn-primary" type="Submit">Add to cart</button>
                  		</form>
                      </li>
	                    @endif
                      @if (Auth::user()->is_admin==1)
                        <li>
                        <form action="/modifyProduct/{id}" method="POST">
                          {{csrf_field()}}
                          <input type="hidden" name="" value="{{$product->id}}">
                          <button class="searchB" type="Submit">Modificar</button>
                        </form>
                      </li>
                      @endif
                  @endif
                </ul>
            </div>
          </div>
        </div>
  </div>
@endsection
