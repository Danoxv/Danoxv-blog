/// <reference types="vite/client" />

interface ImportMetaEnv {
	readonly VITE_APP_NAME?: string;
	readonly VITE_APP_VERSION?: string;
	readonly VITE_TELEGRAM_BOT_USERNAME: string;
	readonly VITE_SENTRY_DSN: string;
	//readonly VITE_VIDEO_JANUS_WS_URL: string;
	// more .env variables...
}

interface ImportMeta {
	readonly env: ImportMetaEnv;
}
