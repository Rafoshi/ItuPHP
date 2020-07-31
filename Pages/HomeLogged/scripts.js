function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
}
function dropBox() {
	const drop_btn = document.querySelector(".drop-btn span");
	const menu_wrapper = document.querySelector(".wrapper");

	drop_btn.onclick = () => {
		menu_wrapper.classList.toggle("show");
		tooltip.classList.toggle("show");
	};
}
