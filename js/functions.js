/* 
 * Copyright (C) 2020 ICS WMSU - All Rights Reserved
 * Director's List Web Application
 * Developed By: Jason A. Catadman and Jaydee C. Ballaho
 */

function navigateMenu(x) {
    x.classList.toggle("change");
    var menu = document.getElementById("nav-container");
    if(menu.className != "shownmenu") {
        menu.className = "shownmenu";
    }
    else {
        menu.className = "hiddenmenu";
    }
}

window.onload = function() {
    // Add active class to the current button (highlight it)
    var header = document.getElementById("nav-bar");
    var btns = header.getElementsByClassName("nav-bar-item");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            if (current.length > 0) { 
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
        });
    }
}