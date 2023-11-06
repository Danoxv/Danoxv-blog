<template>
	<AppLayout>
		<div class="container">
			<h1 class="text-center">Мой вишлист</h1>

			<ul class="list-group" style="font-size: 1.5rem;">
				<template v-for="category in categories">
					<li class="list-group-item active bg-dark text-light">{{ category.name }}</li>
					<template v-for="item in category.wishlists">
						<div v-if="item.status === 'start'">
							<li class="list-group-item">
								<a :href="item.link_product"><strong class="h4">{{item.name}}</strong></a>
								<span class="badge badge-secondary"> ~ {{item.price_product}} ₽</span>
								<p>{{ item.description}}</p>
							</li>
						</div>
						<div v-else>
							<li class="list-group-item disabled" style="background-color: #bec4c0;">
								<a :href="item.link_product"><strong class="h4">{{item.name}}</strong></a>
								<span class="badge badge-secondary"> ~ {{item.price_product}} ₽</span>
								<p>{{ item.description}}</p>
							</li>
						</div>
					</template>
				</template>
			</ul>

		</div>
	</AppLayout>
</template>

<script>

import AppLayout from "@/layouts/AppLayout.vue";
import {defineComponent} from 'vue';

export default defineComponent({
	name: 'Wishlist',
	components: {AppLayout},
	props: {CategoriesWish: {type: Object, required: true}},
	data() {
		return {
			categories: this.CategoriesWish,
		}
	},
});
</script>

<style scoped>
</style>
