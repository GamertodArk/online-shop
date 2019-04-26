let btn = __('register_btn');

btn.addEventListener('click', e => {
	e.preventDefault();

	let username = __('username').value;
	let email = __('email').value;
	let password = __('password').value;
	let password2 = __('password2').value;

	let data = {
		username,
		email,
		password,
		password2
	};

	// Send data to the server
	send_data('signup', data);
});