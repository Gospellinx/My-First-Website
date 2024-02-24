const sign_in_btn = document.querySelector("#sign_in_btn");
const sign_up_btn = document.querySelector("#sign_up_btn");
const container = document.querySelector(".container");

sign_up_btn.addEventsListener('click', () => {
	container.classList.add("sign-up-mode");
	)};
sign_in_btn.addEventsListener('click', () => {
	container.classList.remove("sign-up-mode");
	)};
