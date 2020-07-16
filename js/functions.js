/* 
 * Copyright (C) 2020 ICS WMSU - All Rights Reserved
 * Director's List Web Application
 * Developed By: Jason A. Catadman and Jaydee C. Ballaho
 */

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

function openNav() {
    document.getElementById("nav-container").style.width = "300px";
}

function closeNav() {
    document.getElementById("nav-container").style.width = "0";
}