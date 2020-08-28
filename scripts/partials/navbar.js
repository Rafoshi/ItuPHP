let show = true;

const menuSection = document.querySelector(".menu-section")
const menuToggle = menuSection.querySelector(".menu-toggle")

menuToggle.addEventListener("click", () => {

    document.body.style.overflow = show ? "hidden" : "initial"

    menuSection.classList.toggle("on", show)
    show = !show;
})

function linkClicked() {
    document.body.style.overflow = show ? "initial" : "initial"
    menuSection.classList.toggle("on", show)

}