/* Highlight current page in navbar */

let navBar = document.querySelectorAll("nav ul li a")
let currentUrl = window.location.href; 

if (currentUrl.endsWith("index.php")) {
    navBar[0].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.endsWith("discover.php")) {
    navBar[1].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.endsWith("signup.php")) {
    navBar[2].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.endsWith("login.php")) {
    navBar[3].style.color = "rgb(119, 119, 219)" 
}

