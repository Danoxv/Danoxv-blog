<template>
	<AppLayout>
		<div class="col">
			<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="15000">
						<img src="/banners/banner1.jpg" data-bs-target class="d-block w-100"
						     alt="...">
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="/banners/banner2.png" class="d-block w-100"
						     alt="...">
					</div>
				</div>
				<button class="carousel-control-prev bg-dark-subtle" type="button"
				        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Предыдущий</span>
				</button>
				<button class="carousel-control-next bg-dark-subtle" type="button"
				        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Следующий</span>
				</button>
			</div>
		</div>

		<div class="mt-5">
			<p class="h3 text-center fw-bold p-md-5">Проекты</p>
			<div class="row row-cols-1 row-cols-md-2 g-4">

				<div v-for="project in proj">
					<div class="col">
						<div class="card">
					<img class="card-img-top img-thumbnail img-fluid" :src="project.filename" alt="Image not found">
							<div class="card-body bg-dark-subtle text-dark rounded-bottom-5 pt-0 h-10">
								<h4 class="card-title text-center">{{project.name}}</h4>
								<p class="card-text text-center">{{project.description}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-5">
			<p class="h3 text-center fw-bold p-md-5">Вишлист</p>
			<ul class="list-group list-group-horizontal t">
				<template v-for="wishl in wish">
					<li class="list-group-item text-center flex-fill">
						<a class="link-primary" :href="wishl.link_product">{{wishl.name}}</a></li>
				</template>
			</ul>
		</div>

		<div class="mt-5">
			<p class="h3 text-center fw-bold p-md-5">Что почитать/послушать?</p>

			<table class="table text-left">
				<thead class="table-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Книги</th>
					<th scope="col">Статьи</th>
					<th scope="col">Треки</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>Otto</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>Thornton</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
				</tr>
				</tbody>
			</table>

		</div>
	</AppLayout>
</template>

<script>
import AppLayout from "@/layouts/AppLayout.vue";

export default {
	name: "Index",
	components: {AppLayout},
	props: {
		wishlists: {type: Object, required: true},
		projects: {type: Object, required: true}
	},
	data() {
		return {
			wish: this.wishlists,
			proj: this.projects
		}
	},
}
</script>

<style scoped>

.carousel-control-prev,
.carousel-control-next {
	width: 25px;
	height: 25px;
	opacity: 0;
	border-radius:20px;
	transition: opacity 0.2s ease-in-out;
	top: 50%;
	transform: translateY(-50%);
}

.carousel:hover .carousel-control-prev,
.carousel:hover .carousel-control-next {
	opacity: 1;
}

.carousel-control-prev-icon::before,
.carousel-control-next-icon::before {
	content: '';
	display: inline-block;
	width: 20px;
	height: 20px;
}
</style>
