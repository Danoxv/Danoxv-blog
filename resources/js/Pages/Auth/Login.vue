<template>
	<AppLayout>
		<form @submit.prevent="submit">

			<div>
				<label for="username">Имя пользователя:</label>
				<input type="text" id="username" name="username" v-model="form.username">
				<div v-for="error of form.errors.username || []">{{ error }}</div>
			</div>

			<div>
				<label for="password">Пароль:</label>
				<input type="password" id="password" name="password" v-model="form.password">
				<div v-for="error of form.errors.password || []">{{ error }}</div>
			</div>

			<input type="hidden" name="_token" v-model="form._token" />
			<button type="submit">Отправить</button>
		</form>
	</AppLayout>
</template>

<script>
import AppLayout from '@/layouts/AppLayout.vue';
import {defineComponent} from "vue";
import axios from "axios";

export default defineComponent({
	name: 'LoginForm',
	components: {AppLayout},
	props: {
		username: { type: String, default: ''},
		errors: { type: Object},
	},

	data() {
		return {
			form: this.$inertia.form({
				username: this.username,
				password: '',
				remember: false,
				_token: document.querySelector('meta[name=csrf-token]')?.getAttribute('content') || '',
			}),
		}
	},

	mounted() {
		console.log(this.errors);
	},

	methods: {
		submit() {
			axios.post(this.route('login.auth'), this.form).then((response) => {
				window.location.href = response.data.redirect;
			}).catch((error) => {
				this.form.errors = error.response?.data?.errors || {password: [error.response.data.message]};
			});
		},
	},
});
</script>
