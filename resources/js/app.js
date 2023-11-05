import './bootstrap';

// Import modules...
import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import {run} from './modules/vanilla-app';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {ZiggyVue} from '../../vendor/tightenco/ziggy/src/js/vue';
import {APP_NAME} from './config';
import CKEditor from '@ckeditor/ckeditor5-vue';
//import { initSentryForVue } from './modules/vue-sentry';
import '../scss/app.scss';

const document = window.document;
const appName = APP_NAME || document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
document.addEventListener('DOMContentLoaded', () => {
	run(document);
});
createInertiaApp({
	//id: 'app',
	title: (title) => `${title} ${appName}`,
	resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
	setup({el, App, props, plugin}) {
		const vueApp = createApp({render: () => h(App, props)});
		vueApp.use(CKEditor);
		//initSentryForVue(document, vueApp);
		// eslint-disable-next-line no-undef
		return vueApp.use(ZiggyVue, Ziggy).use(plugin).mount(el);
	},
	progress: {
		color: '#4B5563',
	},
}).then(() => {
	//
});
