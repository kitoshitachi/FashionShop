
/*------------------------------tao Bo loc Size-------------------------*/

const button = document.querySelector(".boloc-item-size-bottom");
const Size = ["S","M","L","XL","XXL"];

for(let i = 0; i < Size.length;i++){
    const button_size = document.createElement('button');
    button_size.setAttribute('class','but_size');
    button_size.textContent = Size[i];
    button_size.setAttribute('onclick','selectButton(this)');
    button.appendChild(button_size);
}

/*------------------------------Bo loc Size-------------------------*/
function selectButton(btns){
    console.log(btns.classList.contains("size_select"));
    if(btns.classList.contains("size_select"))
        btns.classList.remove("size_select");
    else
        btns.classList.add("size_select");
}
/*------------------------------tao Bo loc mau-------------------------*/
const color_bar = document.querySelector(".boloc-item-color-bottom");
const Color = ["red","green","blue","yellow","pink","brown","aqua"];
for(let i = 0; i < Color.length; i++){
    const box = document.createElement('li');
    box.setAttribute('class', 'boxColor');
    box.setAttribute('id',Color[i]);
    box.style.backgroundColor = Color[i];
    box.setAttribute('onclick','selectBox(this)');
    color_bar.appendChild(box);
}


/*------------------------------Bo loc Mau-------------------------*/

function selectBox(btns){
    console.log(btns.classList.contains("selectBox"));
    if(btns.classList.contains("selectBox"))
        btns.classList.remove("selectBox");
    else
        btns.classList.add("selectBox");
}

/*------------------------------Xoa Bo loc-------------------------*/
const button_xoa = document.querySelector("#boloc_bottom_left")
button_xoa.addEventListener("click", function () {
    const SizeActive = document.querySelectorAll(".size_select")
    const ColorActive = document.querySelectorAll(".selectBox")
    for (i = 0; i < SizeActive.length; i++) {
        SizeActive[i].classList.remove("size_select");
    }
    for (i = 0; i < ColorActive.length; i++) {
        ColorActive[i].classList.remove("selectBox");
    }  
})
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
    //console.log(x.style.display)
}