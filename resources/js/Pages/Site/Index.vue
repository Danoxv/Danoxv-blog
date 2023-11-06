<template>
	<AppLayout>
		<div class="col">
			<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="15000">
						<img src="sijeko571.png" class="d-block w-100"
						     alt="...">
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="sijeko571.png" class="d-block w-100"
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

		<div class="p-md-5">
			<p class="h3 text-center fw-bold">Проекты</p>
			<div class="row row-cols-1 row-cols-md-2 g-4">

				<div v-for="project in projects">
					<div class="col">
						<div class="card">
							<img src="sijeko716.png" class="card-img-top"
							     alt="...">
							<div class="card-body">
								<h4 class="card-title">{{project.name}}</h4>
								<p class="card-text">{{project.description}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="p-md-5">
			<p class="h3 text-center fw-bold">Вишлист</p>
			<ul class="list-group list-group-horizontal t">
				<template v-for="wish in wishlists">
					<li class="list-group-item text-center flex-fill"><a class="link-dark"
					:href="wish.link_product">{{wish.name}}</a></li>
				</template>
			</ul>
		</div>

		<div class="p-md-5">
			<p class="h3 text-center fw-bold">Что почитать/послушать?</p>

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
			wishlists: this.wishlists,
			projects: this.projects
		}
	},
}
</script>

<style scoped>

</style>
