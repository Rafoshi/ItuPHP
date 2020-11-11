function classRemove(id, classRemove) {
	const targetElement = document.getElementById(id);
	targetElement.classList.remove(classRemove);
}

function classAdd(id, classAdd) {
	const targetElement = document.getElementById(id);
	targetElement.classList.add(classAdd);
}

function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
}

// Alerts
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

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);

//Grean alert
var botao=document.querySelector("#login-button")
      botao.addEventListener("click",function(){
        $('.alert').addClass("show");
        $('.alert').removeClass("hide");
        $('.alert').addClass("showAlert");
        setTimeout(function(){
          $('.alert').removeClass("show");
          $('.alert').addClass("hide");
        },2000);
      });

// It's a block of errors animations cards
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

// Function to drop box on navbar
function dropBox() {
	const drop_btn = document.querySelector(".drop-btn");
	const menu_wrapper = document.querySelector(".combo-box");
	const icon = document.querySelector("#settings-icon");

	drop_btn.onclick = () => {
		menu_wrapper.classList.toggle("show");
		icon.classList.toggle("show");
	};
}

function deleteAccount() {
	classRemove("delete-account", "hide-delete");
}

function cancelDelete() {
	classAdd("delete-account", "hide-delete");
}

function directToHome() {
	window.location.href = '../index.html';
}

function deleteAnimation() {
	classAdd("icon-delete", "icon-delete-animation");
	setTimeout(() => {
		cancelDelete();
		directToHome();
	}, 400);
}

// A Jquery function for portfolio
$(function () {
	var selectedClass = "";
	$(".fil-cat").click(function () {
		selectedClass = $(this).attr("data-rel");
		$("#portfolio").fadeTo(100, 0.1);
		$("#portfolio div")
			.not("." + selectedClass)
			.fadeOut()
			.removeClass("scale-anm");
		setTimeout(function () {
			$("." + selectedClass)
				.fadeIn()
				.addClass("scale-anm");
			$("#portfolio").fadeTo(300, 1);
		}, 300);
	});
});
