const header_menu = document.querySelector(".header_menu")
window.addEventListener("scroll", function(){
    x = window.pageYOffset
    console.log(x)
    if (x > 0){
        header_menu.classList.add("sticky")
    }
    else{
        header_menu.classList.remove("sticky")
    }
})

