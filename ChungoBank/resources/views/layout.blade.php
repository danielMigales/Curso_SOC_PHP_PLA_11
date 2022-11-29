<!DOCTYPE html>
<html>
<head>
	<title>Chungo Bank</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/cb.css')}}">
</head>
<body>
	<div class='contenedor'>
		<header>
			<img src="{{asset('assets/img/chungobank.png')}}">
			<h4>Chungobank Investments & Trusts</h4>
		</header>
		<nav>
			<div><a href="/">Gestión comercial</a></div>
			<div><a href="/altaMtoPuntos">Cuenta Puntos</a> | 
			<a href="/altaPersonas">Alta personas</a></div>
		</nav>
		<h4 class='center'>@yield('titulo')</h4>
		<section>
			<form>
				@yield('contenido')
			</form>
		</section>
	</div>
</body>
</html>