/**
 * Различные настройки клиентского приложения
 */

// App name
export const APP_NAME = import.meta.env.VITE_APP_NAME || 'Danoxv';
// App version in the form of: <major>.<minor>.<build>+<SHA>
export const APP_VERSION = import.meta.env.VITE_APP_VERSION || '0.1.666+abcdef7';

// Sentry DSN
export const SENTRY_DSN = import.meta.env.VITE_SENTRY_DSN;
