const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEvenListener("click", () => {
    nav.classList.add ("visible");
})

cerrar.addEvenListener("click", () => {
    nav.classList.remove ("visible");
})