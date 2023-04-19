const btnMobile = document.getElementById("btn-mobile");

function toggleMenu() {
    const navbar = document.getElementById("navbar");

    if(navbar.classList.contains("active")) {
        navbar.classList.remove("active");
    } else {
        navbar.classList.add("active");
    }
}

btnMobile.addEventListener("click", toggleMenu);