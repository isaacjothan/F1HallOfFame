<article class="champion-card">
	<a class="champion-card__link" href="{{ route('champions.show', $driver) }}" aria-label="Ver trayectoria de {{ $driver->name }}">
		<div class="champion-card__portrait">
			@if ($driver->image_path)
				<img src="{{ asset($driver->image_path) }}" alt="{{ $driver->name }}" loading="lazy" />
			@else
				<div class="champion-card__placeholder" aria-hidden="true">
					<span>{{ mb_substr($driver->name, 0, 1) }}</span>
					<small>{{ $driver->nationality ?? 'Leyenda de la F1' }}</small>
				</div>
			@endif
			<span class="champion-card__titles">{{ $driver->championships_count }} {{ $driver->championships_count === 1 ? 'título' : 'títulos' }}</span>
		</div>
		<div class="champion-card__content">
			@if ($driver->nationality)
				<p class="champion-card__nationality">{{ $driver->nationality }}</p>
			@endif
			<h3>{{ $driver->name }}</h3>
			<p class="champion-card__seasons" aria-label="Temporadas de campeonato">
				@foreach ($driver->championships as $championship)
					<span>{{ $championship->season }}</span>
				@endforeach
			</p>
			<span class="champion-card__cta">Ver trayectoria <span aria-hidden="true">→</span></span>
		</div>
	</a>
</article>