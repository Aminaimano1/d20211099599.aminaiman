function indexFunction(){
    var menuBtn = document.getElementById("menuBtn")
    var sidenav = document.getElementById("sidenav")
    var menu = document.getElementById("menu")

    menuBtn.onclick = function(){
        if(sidenav.style.right == "-250px"){
            sidenav.style.right = "0";
        }
        else{
            sidenav.style.right = "-250px";
        }
    }
}

