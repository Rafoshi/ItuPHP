function greenAlert() {
	classRemove("greenAlert", "hide");
	classRemove("greenCircle", "hide");
	classRemove("greenCheck", "hide");
	classRemove("greenTitle", "hide");
	classRemove("greenMessage", "hide");

	classAdd("greenAlert", "transition");

	setTimeout(() => {
		classAdd("greenAlert", "hide");
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
