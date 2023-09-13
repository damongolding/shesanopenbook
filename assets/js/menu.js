const menuButton = document.getElementById("menu-button");
const nav = document.getElementsByTagName("nav")[0];

menuButton.addEventListener("click", () => {
    nav.classList.toggle("open");
});
