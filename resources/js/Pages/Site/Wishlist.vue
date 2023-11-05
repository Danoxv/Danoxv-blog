<template>
	<AppLayout>


		<div class="container">
			<h1 class="text-center">Мой вишлист</h1>

			<ul class="list-group">
				<li class="list-group-item active bg-dark text-light">Категория 1</li>
				<li class="list-group-item">
					<a href="https://example.com/product1"><strong class="h4">Товар 1</strong></a>
					<span class="badge badge-secondary">$10</span>
					<p>Описание товара 1...</p>
				</li>
				<li class="list-group-item">
					<a href="https://example.com/product2"><strong class="h4">Товар 2</strong></a>
					<span class="badge badge-secondary">$15</span>
					<p>Описание товара 2...</p>
				</li>

				<li class="list-group-item active bg-dark text-light">Категория 2</li>
				<li class="list-group-item">
					<a href="https://example.com/product3"><strong class="h4">Товар 3</strong></a>
					<span class="badge badge-secondary">$20</span>
					<p>Описание товара 3...</p>
				</li>
				<li class="list-group-item">
					<a href="https://example.com/product4"><strong class="h4">Товар 4</strong></a>
					<span class="badge badge-secondary">$25</span>
					<p>Описание товара 4...</p>
				</li>

				<li class="list-group-item active bg-dark text-light">Категория 3</li>
				<li class="list-group-item disabled">
					<a href="https://example.com/product5"><strong class="h4">Товар 5 (Уже есть)</strong></a>
					<span class="badge badge-secondary">$30</span>
					<p>Описание товара 5...</p>
				</li>
			</ul>
		</div>
	</AppLayout>
</template>

<script>

import AppLayout from "@/layouts/AppLayout.vue";

export default {
	name: "Wishlist",
	components: {AppLayout}
}
</script>

<style scoped>
</style>
