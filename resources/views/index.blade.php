<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html lang="es">
	<head>
		<title>Kimi Antonelli, campeón 2026 | F1 Hall of Fame</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="La temporada histórica de Kimi Antonelli: estadísticas, momentos clave y el Mercedes-AMG F1 W17." />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload champion-page">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>F1 Hall of Fame</h1>
						<p>Historias, temporadas y leyendas que hicieron historia en la Fórmula 1.</p>
						<ul class="actions">
							<li><a href="#campeon" class="button icon solid fa-arrow-down scrolly">Explorar la historia</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
					</header>

				<!-- Nav -->
					<nav id="nav" aria-label="Navegación principal">
						<ul class="links">
							<li class="active"><a href="#campeon">El campeón</a></li>
							<li><a href="#temporada">La temporada</a></li>
							<li><a href="#cronologia">Momentos clave</a></li>
							<li><a href="#monoplaza">El Mercedes W17</a></li>
							<li><a href="{{ route('champions.index') }}">Todos los campeones</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<article id="campeon" class="champion-hero" aria-labelledby="champion-title">
							<div class="champion-hero__copy">
								<p class="champion-eyebrow"><span></span> Campeón del mundo · Temporada 2026</p>
								<h1 id="champion-title">Kimi<br />Antonelli</h1>
								<p class="champion-hero__subtitle">El talento que llevó a Mercedes a la cima.</p>
								<p class="champion-hero__summary">Con 20 años, Kimi Antonelli selló su primer título mundial el 1 de noviembre de 2026, en el Gran Premio de México, y escribió un nuevo capítulo en la historia de la Fórmula 1.</p>
								<div class="champion-hero__actions">
									<a class="champion-button" href="#temporada">Descubrir la temporada <span aria-hidden="true">↓</span></a>
									<a class="champion-text-link" href="#monoplaza">Conocer el W17</a>
								</div>
							</div>
							<figure class="champion-hero__image">
								<img src="{{ asset('images/kimi-antonelli-cargado-hombros-max.webp') }}" alt="Kimi Antonelli celebra en el podio junto a otros pilotos" />
								<figcaption>La celebración de un campeón. Temporada 2026.</figcaption>
							</figure>
						</article>

						<section class="champion-stats" aria-label="Estadísticas de Kimi Antonelli en 2026">
							<div class="champion-stat">
								<strong aria-hidden="true"><span data-count-up="9">9</span></strong>
								<span class="champion-stat__label" aria-hidden="true">Victorias</span>
								<span class="champion-sr-only">9 victorias</span>
							</div>
							<div class="champion-stat">
								<strong aria-hidden="true"><span data-count-up="16">16</span></strong>
								<span class="champion-stat__label" aria-hidden="true">Podios</span>
								<span class="champion-sr-only">16 podios</span>
							</div>
							<div class="champion-stat">
								<strong aria-hidden="true"><span data-count-up="7">7</span></strong>
								<span class="champion-stat__label" aria-hidden="true">Pole positions</span>
								<span class="champion-sr-only">7 pole positions</span>
							</div>
							<div class="champion-stat">
								<strong aria-hidden="true"><span data-count-up="20">20</span></strong>
								<span class="champion-stat__label" aria-hidden="true">Años al ser campeón</span>
								<span class="champion-sr-only">20 años al ser campeón</span>
							</div>
						</section>

						<section id="video-campeonato" class="champion-video" aria-labelledby="champion-video-title">
							<div class="champion-section-heading">
								<p class="champion-eyebrow"><span></span> Gran Premio de México · 2026</p>
								<h2 id="champion-video-title">El instante en que México coronó al campeón</h2>
								<p>Revive el momento que selló el campeonato de Kimi Antonelli.</p>
							</div>
							<div class="champion-video__frame">
								<video controls playsinline preload="metadata" aria-label="El momento en que Kimi Antonelli asegura el campeonato en México">
									<source src="{{ asset('videos/Kimi Antonelli Is The F1 World Champion!.mp4') }}" type="video/mp4" />
									Tu navegador no puede reproducir este video. <a href="{{ asset('videos/Kimi Antonelli Is The F1 World Champion!.mp4') }}">Descárgalo aquí</a>.
								</video>
							</div>
							@include('partials.reaction-bar')
						</section>

						<section id="temporada" class="champion-season" aria-labelledby="season-title">
							<div class="champion-section-heading">
								<p class="champion-eyebrow"><span></span> Temporada 2026</p>
								<h2 id="season-title">Una temporada para la historia</h2>
								<p>Nueve victorias, dieciséis podios y una regularidad que convirtió el potencial en un campeonato mundial.</p>
							</div>
							<div class="champion-season__body">
								<p>Al volante de Mercedes, Antonelli combinó velocidad a una vuelta con resultados constantes los domingos. Su campaña culminó en México: con el título asegurado, se convirtió en el campeón más joven de la historia de la Fórmula 1.</p>
								<a class="champion-inline-link" href="#cronologia">Ver los momentos clave <span aria-hidden="true">→</span></a>
							</div>
						</section>

						<section id="cronologia" class="champion-timeline" aria-labelledby="timeline-title">
							<div class="champion-section-heading">
								<p class="champion-eyebrow"><span></span> El camino al título</p>
								<h2 id="timeline-title">Los números de una campaña histórica</h2>
							</div>
							<ol class="champion-timeline__list">
								<li><span class="champion-timeline__number">01</span><div><h3>Velocidad en clasificación</h3><p>Siete pole positions marcaron el ritmo de los sábados.</p></div></li>
								<li><span class="champion-timeline__number">02</span><div><h3>Convertir ritmo en victorias</h3><p>Nueve triunfos lo llevaron a pelear por la corona.</p></div></li>
								<li><span class="champion-timeline__number">03</span><div><h3>Constancia en el podio</h3><p>Dieciséis podios reflejaron una temporada de alto nivel.</p></div></li>
								<li><span class="champion-timeline__number">04</span><div><h3>Consagración en México</h3><p>El 1 de noviembre aseguró el campeonato en el Gran Premio de México.</p></div></li>
							</ol>
						</section>

						<section id="monoplaza" class="champion-car" aria-labelledby="car-title">
							<div class="champion-car__image">
								<img src="{{ asset('images/mercedes-auto.jpg') }}" alt="Monoplaza Mercedes-AMG de Fórmula 1" loading="lazy" />
							</div>
							<div class="champion-car__copy">
								<p class="champion-eyebrow"><span></span> La máquina · Mercedes-AMG F1 W17</p>
								<h2 id="car-title">Un equipo, una temporada inolvidable</h2>
								<p>El Mercedes-AMG F1 W17 fue el compañero de Antonelli durante su campaña ganadora. El rendimiento del equipo y la precisión del piloto se combinaron para sumar siete poles y nueve victorias.</p>
								<a class="champion-inline-link" href="#campeon">Volver al campeón <span aria-hidden="true">↑</span></a>
							</div>
						</section>

						<section id="campeones" class="champion-archive-preview" aria-labelledby="archive-preview-title">
							<div class="champion-section-heading">
								<p class="champion-eyebrow"><span></span> Historia de la Fórmula 1</p>
								<h2 id="archive-preview-title">Campeones que hicieron historia</h2>
								<p>De los pioneros de 1950 a las leyendas de hoy: descubre sus temporadas y sus títulos.</p>
							</div>
							<div class="champion-archive-grid">
								@forelse ($featuredChampions as $featuredChampion)
									@include('champions.partials.card', ['driver' => $featuredChampion])
								@empty
									<p class="champion-archive-empty">La galería histórica estará disponible pronto.</p>
								@endforelse
							</div>
							<div class="champion-archive-preview__action">
								<a class="champion-button" href="{{ route('champions.index') }}">Explorar todos los campeones <span aria-hidden="true">→</span></a>
							</div>
						</section>
					</div>

				<footer id="footer" class="champion-footer">
					<div>
						<p class="champion-eyebrow"><span></span> F1 Hall of Fame</p>
						<p>Un homenaje a las temporadas y pilotos que dejan huella.</p>
					</div>
					<a href="#intro" class="champion-inline-link">Volver al inicio <span aria-hidden="true">↑</span></a>
				</footer>

				<div id="copyright">
					<ul><li>&copy; 2026 F1 Hall of Fame</li><li>Diseño base: <a href="https://html5up.net">HTML5 UP</a></li></ul>
				</div>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
			<script src="{{ asset('assets/js/champion.js') }}"></script>

	</body>
</html>