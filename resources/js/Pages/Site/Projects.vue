<template>
	<AppLayout>
		<div class="container">
			<h1 class="text-center">Проекты</h1>
			<div class="row row-cols-5 row-cols-md-2 g-4">
				<div class="col rounded-bottom-5 rounded-top-5">
					<div class="card">
						<img src="Снимок экрана от 2023-10-25 02-27-49.png"
						     class="card-img-top img-fluid" alt="...">
						<div class="card-body bg-dark text-light rounded-bottom-5">
							<h3 class="card-title text-center">Заголовок карточки</h3>
							<p class="card-text text-center h4">Это более длинная карта. Этот
								контент немного
								длиннее.</p>
						</div>
					</div>
				</div>
				<div class="col rounded-bottom-5 rounded-top-5">
					<div class="card">
						<img src="sijeko716.png" class="card-img-top img-fluid" alt="...">
						<div class="card-body bg-dark text-light rounded-bottom-5">
							<h3 class="card-title text-center">Заголовок карточки</h3>
							<p class="card-text text-center h4">Это более длинная карта. Этот
								контент немного
								длиннее.</p>
						</div>
					</div>
				</div>
				<div class="col rounded-bottom-5 rounded-top-5">
					<div class="card ">
						<img src="sijeko716.png" class="card-img-top" alt="...">
						<div class="card-body bg-dark text-light rounded-bottom-5">
							<h3 class="card-title text-center">Заголовок карточки</h3>
							<p class="card-text text-center h4">Это более длинная карта. Этот
								контент немного
								длиннее.</p>
						</div>
					</div>
				</div>
				<div class="col rounded-bottom-5 rounded-top-5">
					<div class="card ">
						<img src="sijeko716.png" class="card-img-top" alt="...">
						<div class="card-body bg-dark text-light rounded-bottom-5">
							<h3 class="card-title text-center">Заголовок карточки</h3>
							<p class="card-text text-center h4">Это более длинная карта. Этот
								контент немного
								длиннее.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</AppLayout>
</template>

<script>
import AppLayout from "@/layouts/AppLayout.vue";

export default {
	name: "Project",
	components: {AppLayout}
}
</script>

<style scoped>
</style>
