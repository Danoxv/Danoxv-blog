<template>
	<InertiaLink :href="route(name, params)">
		<slot></slot>
	</InertiaLink>
</template>


<script lang="ts" setup>
import { Link as InertiaLink } from '@inertiajs/vue3';

defineProps<{
	name?: string;
	params?: object;
}>();
</script>
