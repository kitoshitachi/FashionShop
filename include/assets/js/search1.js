/*------------------------------Display Sub Search-------------------------*/
const thanhSearch = document.querySelector("#thanhSearch");

const subSearch = document.querySelector(".sub_search_display");
const dis_subSearch= document.querySelector(".sub_search_container_body")
thanhSearch.addEventListener("focusin", function () {
    subSearch.classList.add("active")
    document.getElementById("sub_search_input").focus()
    dis_subSearch.classList.add("active")
})
subSearch.addEventListener("focusout", function () {
    subSearch.classList.remove("active")
    dis_subSearch.classList.remove("active")
})


/*------------------------------Search-------------------------*/
const dis_sub_search = document.querySelector(".sub_search_container_body")
function myFunction() {
    var input, filter, div_root, div, txtValue;
    var count=0 

    if (dis_sub_search.getElementsByTagName("div").length != 0) {

        var dis_sub_search_item = dis_sub_search.getElementsByTagName("div")
        
        while (dis_sub_search.children.length != 0) {
            dis_sub_search_item[0].parentNode.removeChild(dis_sub_search_item[0])
        }
    }

    input = document.getElementById("sub_search_input");
    filter = input.value.toUpperCase();
    div_root = document.querySelector(".category-right-content");
    div = div_root.getElementsByTagName("div");

    if (filter != "") {
        for (i = 0; i < div.length; i++) {
            a = div[i].getElementsByTagName("h1")[0].cloneNode(true);
            a1 = div[i].getElementsByTagName("p")[0].cloneNode(true);
            
            b = div[i].getElementsByTagName("img")[0].src;
      
            x = document.createElement("img")
            x.setAttribute("src", b);
            x.setAttribute("height", "100px");
    
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                count++;
                if(count > 4) continue
                else {
                    //console.log(count)
                    y = document.createElement("div");
                    y1 = document.createElement("div");
                    y2 = document.createElement("div");
                    y.setAttribute("height", "100px");
                    y2.appendChild(x);
                    y1.appendChild(a);
                    y1.appendChild(a1);   
                    
                    y.appendChild(y2);
                    y.appendChild(y1);
                    document.querySelector(".sub_search_container_body").appendChild(y);
    
                } 
                
            }
        }

        const search_footer = document.querySelector(".sub_search_container_footer")
        const search_button_footer = search_footer.getElementsByTagName("button")
        console.log(search_button_footer.length)
        if(search_button_footer.length != 0) {
            search_button_footer[0].parentNode.removeChild(search_button_footer[0]);
        }
        
    
        btn = document.createElement("button")
        const newContent = document.createTextNode("See more (" + count +")");
        btn.appendChild(newContent);
        search_footer.appendChild(btn)
        document.querySelector(".sub_search_container_footer").appendChild(btn);
    }
    else {
        const search_footer = document.querySelector(".sub_search_container_footer")
        const search_button_footer = search_footer.getElementsByTagName("button")
        if(search_button_footer.length != 0) {
            search_button_footer[0].parentNode.removeChild(search_button_footer[0]);
        }
    }
}






