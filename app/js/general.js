
// This funtion sends data to a spesific url using fetch 
function send_data(state, data, url = '?view=data') {
	
	// let url = '?view=data'	
	let init = {
		method: 'POST',
		body: `state=${state}&data=${JSON.stringify(data)}`,
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		}
	};

	fetch(url, init)

		// Check if the response was sent successfully
		.then(response => {
			if(response.ok) {
				return response.text();
			}else {
				console.log('Red response ok');
				console.log(response);
			}
		})

		// If everything is ok, redirect the user
		.then(text => {
			if (text) { console.log(text); }
		})

		// Error handler
		.catch(error => console.log(`There was a problem with the Fetch request: ${error.message}`));
}

// This funtion its a shorcut from the getElementById funtion
function __(id) {
	return document.getElementById(id);
}

// send_data('login', {username:'Gamertod', password: '123456'});