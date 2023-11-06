<template>
	<AppLayout>
		<div class="container">
			<h1 class="text-center">Проекты</h1>
			<div class="row row-cols-5 row-cols-md-2 g-5">
				<div v-for="project in projects.data">
					<div class="col rounded-bottom-5 rounded-top-5">
						<div class="card">
							<img src="sijeko716.png"
							     class="card-img-top img-fluid" alt="...">
							<div class="card-body bg-dark text-light rounded-bottom-5 pt-0 h-10">
								<h3 class="card-title text-center">{{project.name}}</h3>
								<p class="card-text text-center h4">{{project.description}}</p>
							</div>
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
	components: {AppLayout},
	props: {
		models: {type: Object, required: true}
	},
	data() {
		return {
			projects: this.models
		}
	},
}
</script>

<style scoped>
</style>
