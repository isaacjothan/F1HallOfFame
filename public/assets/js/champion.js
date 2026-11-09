(() => {
	const counters = document.querySelectorAll('[data-count-up]');
	const prefersReducedMotion = window.matchMedia
		&& window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	if (counters.length === 0 || !('IntersectionObserver' in window) || prefersReducedMotion) {
		return;
	}

	const duration = 2200;
	const observer = new IntersectionObserver((entries, activeObserver) => {
		entries.forEach((entry) => {
			if (!entry.isIntersecting) {
				return;
			}

			activeObserver.unobserve(entry.target);

			const counter = entry.target;
			const target = Number(counter.dataset.countUp);
			const startTime = performance.now();

			const updateCounter = (currentTime) => {
				const progress = Math.min((currentTime - startTime) / duration, 1);
				const easedProgress = 1 - Math.pow(1 - progress, 3);

				counter.textContent = String(Math.round(target * easedProgress));

				if (progress < 1) {
					requestAnimationFrame(updateCounter);
				}
			};

			counter.textContent = '0';
			requestAnimationFrame(updateCounter);
		});
	}, { threshold: 0.35 });

	counters.forEach((counter) => {
		observer.observe(counter);
	});
})();