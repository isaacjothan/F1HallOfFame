<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Todos los campeones | F1 Hall of Fame</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Explora a los campeones mundiales de Fórmula 1 por nombre, década y nacionalidad." />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload champion-page archive-page">
		<div id="wrapper" class="fade-in">
			<div id="intro">
				<p class="champion-eyebrow"><span></span> F1 Hall of Fame · Archivo histórico</p>
				<h1>Todos los campeones</h1>
				<p>{{ $seasonCount }} temporadas de talento, velocidad y leyendas.</p>
				<ul class="actions">
					<li><a href="#galeria" class="button icon solid fa-arrow-down scrolly">Explorar la galería</a></li>
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
				<section id="galeria" class="champions-archive" aria-labelledby="gallery-title">
					<header class="champions-archive__heading">
						<p class="champion-eyebrow"><span></span> Desde 1950 hasta hoy</p>
						<h2 id="gallery-title">Una historia de campeones</h2>
						<p>{{ $seasonCount }} temporadas · {{ $champions->total() }} {{ $champions->total() === 1 ? 'piloto campeón' : 'pilotos campeones' }}</p>
					</header>

					<form class="champions-filters" method="GET" action="{{ route('champions.index') }}" role="search">
						<div class="champions-filters__field champions-filters__search">
							<label for="champion-search">Buscar piloto</label>
							<input id="champion-search" type="search" name="q" value="{{ $search }}" placeholder="Ej. Ayrton Senna" />
						</div>
						<div class="champions-filters__field">
							<label for="champion-decade">Década</label>
							<select id="champion-decade" name="decade">
								<option value="">Todas</option>
								@foreach ($decades as $decade)
									<option value="{{ $decade }}" @selected($selectedDecade === $decade)>{{ $decade }}–{{ $decade + 9 }}</option>
								@endforeach
							</select>
						</div>
						<div class="champions-filters__field">
							<label for="champion-nationality">Nacionalidad</label>
							<select id="champion-nationality" name="nationality">
								<option value="">Todas</option>
								@foreach ($nationalities as $nationality)
									<option value="{{ $nationality }}" @selected($selectedNationality === $nationality)>{{ $nationality }}</option>
								@endforeach
							</select>
						</div>
						<div class="champions-filters__actions">
							<button class="champion-button" type="submit">Filtrar</button>
							@if ($search !== '' || $selectedDecade !== null || $selectedNationality !== null)
								<a class="champion-inline-link" href="{{ route('champions.index') }}">Limpiar</a>
							@endif
						</div>
					</form>

					@if ($champions->isNotEmpty())
						<div class="champion-archive-grid">
							@foreach ($champions as $driver)
								@include('champions.partials.card', ['driver' => $driver])
							@endforeach
						</div>

						@if ($champions->hasPages())
							<nav class="champion-pagination" aria-label="Paginación de campeones">
								@if ($champions->onFirstPage())
									<span aria-disabled="true">← Anterior</span>
								@else
									<a href="{{ $champions->previousPageUrl() }}">← Anterior</a>
								@endif
								<span class="champion-pagination__status">Página {{ $champions->currentPage() }} de {{ $champions->lastPage() }}</span>
								@if ($champions->hasMorePages())
									<a href="{{ $champions->nextPageUrl() }}">Siguiente →</a>
								@else
									<span aria-disabled="true">Siguiente →</span>
								@endif
							</nav>
						@endif
					@else
						<div class="champion-archive-empty">
							<p class="champion-eyebrow"><span></span> Sin resultados</p>
							<h3>No encontramos campeones con esos filtros.</h3>
							<p>Prueba con otro nombre, década o nacionalidad.</p>
							<a class="champion-inline-link" href="{{ route('champions.index') }}">Ver todos los campeones <span aria-hidden="true">→</span></a>
						</div>
					@endif
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