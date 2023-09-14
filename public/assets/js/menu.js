const menuButton = document.getElementById("menu-button");
const header = document.getElementsByTagName("header")[0];

menuButton.addEventListener("click", () => {
    header.classList.toggle("open");
});
