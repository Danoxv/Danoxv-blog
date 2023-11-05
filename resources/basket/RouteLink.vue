<script lang="ts" setup>
import { Link as InertiaLink } from '@inertiajs/vue3';

defineProps<{
	name: string;
	params?: object;
}>();
</script>

<template>
	<InertiaLink :href="route(name, params)" :class="{ active: route().current(name) }">
		<template v-if="$slots.default"><slot/></template>
		<template v-else>{{ route(name, params) }}</template>
	</InertiaLink>
</template>
