/* Highlight current page in navbar */

let nav = document.querySelectorAll("nav ul li a")
let currentUrl = window.location.href; 

if (currentUrl.endsWith("index.php")) {
    nav[0].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.endsWith("discover.php")) {
    nav[1].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.endsWith("signup.php")) {
    nav[2].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.endsWith("login.php")) {
    nav[3].style.color = "rgb(119, 119, 219)" 
}

