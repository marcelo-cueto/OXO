@extends('layouts.plantilla')
@section('titulo')
  Home
@endsection

@section('principal')
  <div class="container register">
        <div class="row">
          <div class="">
            <div class="slider">
        			<ul>
                <li><img src="storage/WhatsApp Image 2019-03-28 at 12.43.33.jpeg" alt=""> </li>
        				<li><img src="storage/_MG_4219redes.jpg" alt=""></li>
                <li><img src="storage/_MG_4060redes.jpg" alt=""></li>
                <li><img src="storage/_MG_4280redes.jpg" alt=""></li>
          		</ul>
  		      </div>
            <div class="tipos">
              <div class="type">
                  <p class="p1">Slips</p>
                  <a href="/slip"><img src='storage/_MG_4352redes.jpg' alt=""></a>
                </div>
                  <div class="type">
                  <p class="p2">Boxers</p>
                  <a href="/boxer"><img src='storage/_MG_4352redes.jpg' alt=""></a>
                </li>
                </div>
                  <div class="type">
                  <p class="p3"> Mini Boxers</p>
                  <a href="/miniboxer"><img src='storage/_MG_4352redes.jpg' alt=""></a>
                </li>


            </div>
          </div>
        </div>
  </div>
@endsection
