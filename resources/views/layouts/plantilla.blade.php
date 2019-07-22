<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Anton|Montserrat|Permanent+Marker|Prompt:600i|Roboto+Slab" rel="stylesheet">
  <link
         href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script
         src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     <script
         src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
         <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<title>
		@yield("titulo")
	</title>
</head>
<body>
	<header>
		<nav>
      <a href="/home"><img src="/storage/index.jpg" alt=""> </a>
			<ul class=>
				<li>
					<a href="/products">| Productos |</a>
				</li>
				@if (Auth::check())
				@if (Auth::user()->is_admin == '1')
          <li><a href="/agregarProducto">Agregar Producto |</a></li>
          <li><a href="/crearAdminUser">Crear Administrador |</a></li>
        @endif
				<li>
					<form method="POST" action="/logout">
						{{csrf_field()}}
						<button class="searchB" type="submit">Salir</button>
					</form>
				</li>
				@else
					<li>
						<a href="/register">Registracion |</a>
					</li>
					<li>
						<a href="/login">Login |</a>
					</li>
				@endif
        @if ($cart->list())
          <li>
  					<a href="/checkout">
  						<button class="searchB">Entrega la guita</button>
  					</a>
          </li>
        @endif
        <li>
          <form action="/search" method="GET">
            {{csrf_field()}}
            <input type="text" name="search" class="search">
            <button type="submit" class="searchB">Search</button>
          </form>
        </li>
      </ul>
		</nav>

	</header>
	<section class="container">
		@yield("principal")
	</section>
</body>
<script type="text/javascript" src="model.js">

</script>
</html>
