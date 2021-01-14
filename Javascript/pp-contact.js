
var form = document.querySelector('.my-form');
form.style.backgroundColor = 'black'

var nav = document.querySelector('#navbar');
nav.style.borderBottom = 'solid 3px white'

var header = document.querySelector('#header-2');
header.style.fontSize = '18px'











/*const myForm = document.querySelector('.my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const box = document.querySelector('#box');
const userList = document.querySelector('#users');

myForm.addEventListener('submit', onSubmit);

fuction onSubmit(e){
	e.preventDefault();

	if(nameInput.value === '' || emailInput.value === '') {
		box.classList.add('error');
		box.innerHTML = 'Please enter all fields';

		setTimeout(() => box.remove(), 3000);
	}	else {
		const li = document.createElement ('li');
		li.appendChild(document.createTextNode('${nameInput.value} : ${emailInput.value}'));

		userList.appendChild(li);

		//Clear fields
		nameInput.value = '';
		emailInput.value = '';

	}
}*/

/*const btn = document.querySelector('.btn');

btn.addEventListener('click', (e) => {
	e.preventDefault();
	document.querySelector('#my-form')
	.style.background = '#ccc'; //changes form colour when clicked (USE)
});*/




/*const myForm = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const msg = document.querySelector('.msg');
const userList = document.querySelector('#users');

myForm.addEventListener('submit', onSubmit);

fuction onSubmit(e){
	e.preventDefault();

	if(nameInput.value === '' || emailInput.value === '') {
		msg.innerHTML = 'Please enter all fields';

		setTimeout(() => msg.remove(), 3000) //in seconds
	}	else {
		const li = document.createElement ('li');
		li.appendChild(document.createTextNode('${nameInput.value} : ${emailInput.value}'));

		userList.appendChild(li);

		//Clear fields
		nameInput.value = '';
		emailInput.value = '';

	}
}*/

//in HTML need <ul id="users"></ul>