<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>{{ $driver->name }} | F1 Hall of Fame</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Trayectoria de {{ $driver->name }}, campeón mundial de Fórmula 1." />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload champion-page archive-page">
		<div id="wrapper" class="fade-in">
			<div id="intro" class="champion-profile-intro">
				<p class="champion-eyebrow"><span></span> Leyenda de la Fórmula 1</p>
				<h1>{{ $driver->name }}</h1>
				<p>{{ $driver->nationality ?? 'Campeón mundial' }} · {{ $driver->championships_count }} {{ $driver->championships_count === 1 ? 'título mundial' : 'títulos mundiales' }}</p>
				<ul class="actions">
					<li><a href="#trayectoria" class="button icon solid fa-arrow-down scrolly">Ver sus temporadas</a></li>
				</ul>
			</div>

			<header id="header">
				<a href="{{ route('home') }}" class="logo">F1 Hall of Fame</a>
			</header>

			<nav id="nav" aria-label="Navegación principal">
				<ul class="links">
					<li><a href="{{ route('home') }}">Campeón vigente</a></li>
					<li class="active"><a href="{{ route('champions.index') }}">Todos los campeones</a></li>
				</ul>
			</nav>

			<div id="main">
				<article class="champion-profile" aria-labelledby="profile-title">
					<div class="champion-profile__portrait">
						@if ($driver->image_path)
							<img src="{{ asset($driver->image_path) }}" alt="{{ $driver->name }}" />
						@else
							<div class="champion-card__placeholder" aria-hidden="true">
								<span>{{ mb_substr($driver->name, 0, 1) }}</span>
								<small>{{ $driver->nationality ?? 'Leyenda de la F1' }}</small>
							</div>
						@endif
					</div>
					<div class="champion-profile__content">
						<p class="champion-eyebrow"><span></span> {{ $driver->nationality ?? 'Campeón mundial' }}</p>
						<h2 id="profile-title">{{ $driver->name }}</h2>
						<p>{{ $driver->biography ?? 'Su nombre forma parte de la historia del Campeonato Mundial de Fórmula 1.' }}</p>
						<div class="champion-profile__stat"><strong>{{ $driver->championships_count }}</strong><span>{{ $driver->championships_count === 1 ? 'título mundial' : 'títulos mundiales' }}</span></div>
					</div>
				</article>

				<section id="trayectoria" class="champion-profile-seasons" aria-labelledby="seasons-title">
					<div class="champion-section-heading">
						<p class="champion-eyebrow"><span></span> Su legado</p>
						<h2 id="seasons-title">Temporadas de campeonato</h2>
					</div>
					<ol class="champion-profile-seasons__list">
						@foreach ($driver->championships as $championship)
							<li><span>{{ $championship->season }}</span><strong>Campeón mundial de Fórmula 1</strong></li>
						@endforeach
					</ol>
					<a class="champion-inline-link" href="{{ route('champions.index') }}">← Volver a todos los campeones</a>
				</section>
			</div>

			<footer id="footer" class="champion-footer">
				<div>
					<p class="champion-eyebrow"><span></span> F1 Hall of Fame</p>
					<p>Un homenaje a las temporadas y pilotos que dejan huella.</p>
				</div>
				<a href="{{ route('home') }}" class="champion-inline-link">Volver al inicio <span aria-hidden="true">↑</span></a>
			</footer>

			<div id="copyright">
				<ul><li>&copy; 2026 F1 Hall of Fame</li><li>Diseño base: <a href="https://html5up.net">HTML5 UP</a></li></ul>
			</div>
		</div>

		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
		<script src="{{ asset('assets/js/browser.min.js') }}"></script>
		<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/util.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>