function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
}

function orangeAlert() {
	classRemove("orangeAlert", "hide");
	classRemove("orangeCircle", "hide");
	classRemove("orangeCheck", "hide");
	classRemove("orangeTitle", "hide");
	classRemove("orangeMessage", "hide");

	classAdd("orangeAlert", "transition");

	setTimeout(() => {
		classAdd("orangeAlert", "hide");
	}, 2500);
}

function errorPhone() {
	orangeAlert();
	classAdd("smartphone", "buzz");

	setTimeout(() => {
		classRemove("smartphone", "buzz");
	}, 2500);
}

function errorWeb() {
	orangeAlert();
	classAdd("web", "buzz");

	setTimeout(() => {
		classRemove("web", "buzz");
	}, 2500);
}

function webMobile() {
	orangeAlert();
	classAdd("webMobile", "buzz");

	setTimeout(() => {
		classRemove("webMobile", "buzz");
	}, 2500);
}

function changeClass(id, classRemove, newClass) {
	const targetElement = document.getElementById(id);
	targetElement.classList.remove(classRemove);
	targetElement.classList.add(newClass);
}

function classRemove(id, classRemove) {
	const targetElement = document.getElementById(id);
	targetElement.classList.remove(classRemove);
}

function classAdd(id, classAdd) {
	const targetElement = document.getElementById(id);
	targetElement.classList.add(classAdd);
}
