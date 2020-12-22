// Notif box Functions
function notif_box_opener() {
    var notif_box = document.querySelector(".dash-notification-box");
    var overlay = document.querySelector(".notif-close-overlay");
    
    notif_box.classList.toggle("active-box");
    overlay.classList.toggle("active-box");
}

// Sidebar Toggle Functions
function sideBarOpener(){
    var sidebar = document.querySelector("#sidebar");
    var overlay = document.querySelector(".sidebar-overlay");
    var dash_layout = document.querySelector(".dash-layout");


    sidebar.classList.toggle("sidebar-min");
    overlay.classList.toggle("sidebar-overlay-active");
    dash_layout.classList.toggle("dash-layout-min");
}


// Nice Select Start
// $(document).ready(function() {
//     $('select').niceSelect();
// });



// Switch Tab Functions
function openCity(evt, cityName) {
var i, tabcontent, tablinks;

tabcontent = document.getElementsByClassName("user-left-box-tabs");
for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
}

tablinks = document.getElementsByClassName("user-left-box-tab-links");
for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active-tablink", "");
}

document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active-tablink";
}




//Sidebar Dropdown Functions
window.onload = function(){
	var a = document.querySelectorAll("li.dropdown");

	for (var i = 0; i<a.length; i++){
	    a[i].onclick = function () {
            // changing li style
            this.classList.toggle("drop_active");

            // Finding elements of drop down
	        var elements = this.children;
	        for (var i = 0; i<elements.length; i++){
	            if (elements[i].tagName == "DIV"){
	                var ul = elements[i];
                }
                if (elements[i].tagName == "A"){
	                var icon_parent = elements[i];
                }
            }
            var icon = icon_parent.lastElementChild;

            // getting ul actual height
            var height = ul.scrollHeight;

            if(ul.style.height == height + "px"){
                ul.style.height = "0px";
                ul.classList.remove("drop_show");
                icon.style.transform = "rotate(0deg)";
            }else{
                ul.style.height = height + "px";
                ul.classList.add("drop_show");
                icon.style.transform = "rotate(-90deg)";
            }
        };
	}
}
