// Bootstrap Plugins
import 'bootstrap/js/src/dropdown';
import 'bootstrap/js/src/collapse';
//
// import initAnchorLinks from './anchor-links';
// import initDefault from './relative-time';

export function run(document: Document): void {
	// Убираем маркер безъяваскриптовости
	document.body.classList.remove('no-js');

	// Асинхронная загрузка CSS
	const preloadCss = document.querySelectorAll('[rel=preload][as=style]');
	// В Хроме список будет пустым, а в Файрфоксе будет содержать неподгруженные стили
	preloadCss.forEach((styleElement) => {
		styleElement.setAttribute('rel', 'stylesheet');
	});

	// initDefault(document);
	//
	// initAnchorLinks(document);
}
