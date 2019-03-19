import loginForm from '../components/login'

var login = document.getElementById('login');
if(login != null){
	new Vue({
		el: '#login',
		components: {
			loginForm
		}
	})
}