
// const expandBtn = document.querySelectorAll(".expand-btn");

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
document.getElementById("drop").addEventListener("click", function(e) {
document.getElementById("myDropdown").classList.toggle("show");
});
// Close the dropdown if the user clicks outside of it
window.addEventListener("click", function(event) {
if (!event.target.matches('.dropbtn')) {
    document.querySelectorAll(".dropdown-content.show")
    .forEach(openDropdown => openDropdown.classList.remove('show'))
}
});


