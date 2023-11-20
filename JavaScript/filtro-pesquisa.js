const inputSearch = document.querySelector("#search");
const navMenu = document.querySelector("[data-type='nav-menu']");
const divs = Array.from(navMenu.querySelectorAll("div.area-tecido"));

inputSearch.addEventListener("input", function () {
    const str = this.value.toLowerCase();
    filterData(str);
});

function filterData(str) {
    divs.forEach((div) => {
        const textContent = div.textContent.toLowerCase();
        if (textContent.includes(str)) {
            div.classList.remove("hide");
            div.closest("ol").setAttribute("open", ""); 
        } else {
            div.classList.add("hide");
            div.closest("ol").removeAttribute("open"); 
        }
    });
}