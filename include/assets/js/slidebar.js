/*------------------------------slidebar-------------------------*/
const itemslidebar = document.querySelectorAll(".category-left-li")
itemslidebar.forEach(function (menu, index) {
    menu.addEventListener("click", function () {
        menu.classList.toggle("block")
    })

})
/*------------------------------bo loc-------------------------*/

function clickboloc_function() {
    var x = document.getElementById("boloc-hide");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    else {
        x.style.display = "none";
    }
    console.log(x.style.display)
}