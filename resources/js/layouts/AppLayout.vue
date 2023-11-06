<script>
import RouteLink from "../../basket/RouteLink.vue";
// import {
// 	// enable as enableDarkMode,
// 	// disable as disableDarkMode,
// 	// setFetchMethod
// } from 'darkreader';
//
// setFetchMethod(window.fetch);
//
// enableDarkMode({
// 	brightness: 100,
// 	contrast: 90,
// 	sepia: 10,
// });

export default {
	name: "AppLayout",
	components: {RouteLink},
	data() {
		return {
			year: new Date().getFullYear()
		};
	},
	// methods: {
	// 	toggleDarkMode() {
	// 		let isEnabled = this.getDarkMoodState();
	// 		isEnabled = !isEnabled;
	// 		this.setDarkMode(isEnabled);
	// 	},
	// 	setDarkMode(isEnabled) {
	// 		if (isEnabled) {
	// 			enableDarkMode({
	// 				brightness: 100,
	// 				contrast: 90,
	// 				sepia: 10,
	// 			});
	// 		} else {
	// 			disableDarkMode();
	// 		}
	// 		this.setDarkMoodState(isEnabled);
	// 	},
	// 	getDarkMoodState() {
	// 		return (localStorage.getItem('darkModeEnabled') === 'true');
	// 	},
	// 	setDarkMoodState(isEnabled) {
	// 		localStorage.setItem('darkModeEnabled', isEnabled ? 'true' : 'false')
	// 	}
	// },
	// created() {
	// 	const isEnabled = this.getDarkMoodState() || window.matchMedia('(prefers-color-scheme: dark)').matches;
	// 	this.setDarkMode(isEnabled);
	// },
}
</script>

<template>
	<div class="AppLayout" style="font-size: 1.5rem;">
		<header>
			<link href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css"
			      rel="stylesheet">
			<link rel="stylesheet"
			      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		</header>

		<nav class="navbar navbar-light bg-dark p-1">
			<div class="container-fluid col-10">
				<a class="navbar-brand text-light" href="/"><p style="font-size: 33px">Danoxv</p></a>
				<a class="navbar-brand text-light text-center col-md-4" href="tel:+79524218870"><small>+7 952
					421‒**‒**</small></a>
				<div class="navbar navbar-right">
					<button @click="toggleDarkMode" style="margin-left:10px;"
					        class="btn btn-secondary bi bi-circle-half"
					        id="darkModeButton"></button>
				</div>
			</div>
		</nav>
		<div class="max-width">
			<main class="pt-md-5">
				<div class="container">
					<slot/>
				</div>
			</main>
		</div>
		<!--		Подвал-->
		<footer class="text-center text-lg-start bg-light text-muted">

			<section class="d-flex justify-content-center p-4 border-bottom">
				<div>
					<i class="fa fa-telegram" aria-hidden="true"></i>
					<a class="btn btn-social-icon btn-lg btn-github"
					   href="https://github.com/Danoxv">
						<span class="fa fa-github"></span>
					</a>
				</div>
			</section>

			<section class="">
				<div class="container text-center text-md-start mt-5">
					<div class="row mt-3">
						<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
							<h6 class="text-md-start fw-bold mb-4">
								<i class="fas fa-gem me-3"></i>Danoxv ❤️
							</h6>
							<p>
								Делаю мир проще, помогая <a href="https://sijeko.ru/">Sijeko</a>
							</p>
						</div>

						<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
							<h6 class="text-uppercase fw-bold mb-4">
								Useful links
							</h6>
							<p>
								<a class="text-reset" :href="route('projects.index')">Project</a>
							</p>
							<p>
								<a class="text-reset" :href="route('wishlist.getWishlist')">Wishlist</a>
							</p>
							<p>
								<a class="text-reset">Works</a>
							</p>
							<p>
								<a class="text-reset" href="https://t.me/Danoxv">Help</a>
							</p>
						</div>

						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
							<h6 class="text-uppercase fw-bold mb-4">Contact</h6>
							<p><i class="fas fa-home me-3"></i> Белгород, Россия</p>
							<p>
								<i class="fas fa-envelope me-3"></i>
								Danoxv@yandex.ru
							</p>
							<p><i class="fas fa-phone me-3"></i><a href=”tel:+79524218870”>+7 952
								421‒88‒70</a></p>
						</div>
					</div>

				</div>
			</section>

			<div class="text-center p-4 bg-dark" style="background-color: rgba(0, 0, 0, 0.05);">
				<p class="text-light">© Danoxv 2022-{{ this.year }}</p>
			</div>
		</footer>
	</div>
</template>

<style lang="scss" scoped>
.max-width {
	max-width: 1200px;
	margin-left: auto;
	margin-right: auto;
	//border: 3px solid #73AD21;
}
</style>
