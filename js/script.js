/* Highlight current page in navbar */

let navBar = document.querySelectorAll("nav ul li a")
let currentUrl = window.location.href; 

if (currentUrl.includes("index.php")) {
    navBar[0].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.includes("discover.php")) {
    navBar[1].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.includes("signup.php")) {
    navBar[2].style.color = "rgb(119, 119, 219)" 
} else if (currentUrl.includes("login.php")) {
    navBar[3].style.color = "rgb(119, 119, 219)" 
}

