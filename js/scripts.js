function baseUrl() {
	const origin = document.location.origin;
	const localhost = "http://localhost";
	const head = document.head;

	if (origin === localhost) {
		head.insertAdjacentHTML("beforeend", `<base href="${localhost}/mealpicker/">`);
	} else {
		head.insertAdjacentHTML("beforeend", `<base href="${origin}">`);
	}
}

window.onload = () => {
	baseUrl();
	// openCloseMenu();
	// currentItem();
	// copyrightYear();
	// skillsApi();
};
