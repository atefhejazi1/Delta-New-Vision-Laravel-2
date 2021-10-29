window.onscroll = function () {
    let navbar = document.querySelector(".navbar");
    navbar.classList.toggle("fixed-navbar", window.scrollY > 0);

    if (window.scrollY > 0) {
        document
            .querySelectorAll("header .navbar .navbar-nav .nav-item .nav-link")
            .forEach((e) => {
                e.style.color = "#fff";
                e.onmouseover = () => {
                    e.style.color = "#fff";
                    e.style.borderBottom = "2px solid #fff";
                    e.style.transition = "0.6s";
                };
                e.onmouseout = () => {
                    e.style.color = "#fff";
                    e.style.transition = "0.6s";
                    e.style.borderBottom = "0px";
                };
            });

        document.querySelector(
            "header .navbar .navbar-nav .nav-item .active"
        ).style.borderBottom = "0";

        document.querySelector("header .navbar .navbar-brand h1").style.color =
            "#fff";
        document.querySelector("header .navbar .navbar-brand h1 span").style.color =
            "#fff";
    } else {
        document
            .querySelectorAll("header .navbar .navbar-nav .nav-item .nav-link")
            .forEach((e) => {
                e.style.color = "#00318b";
                e.onmouseover = () => {
                    e.style.color = "#00318b";
                    e.style.borderBottom = "2px solid #fff";
                    e.style.transition = "0.6s";
                };
                e.onmouseout = () => {
                    e.style.transition = "0.6s";
                    e.style.color = "#00318b";
                    e.style.borderBottom = "0px";
                };
            });
        document.querySelector(
            "header .navbar .navbar-nav .nav-item .active"
        ).style.borderBottom = "2px solid #00318b";

        document.querySelector("header .navbar .navbar-brand h1").style.color =
            "#00318b";
        document.querySelector("header .navbar .navbar-brand h1 span").style.color =
            "#0089d9";
    }
    let scrollTopTop = document.querySelector(".scroll-Top");
    if (this.scrollY > 800) {
        scrollTopTop.classList.add("show-scroll-top");
    } else {
        scrollTopTop.classList.remove("show-scroll-top");
    }
};

document.querySelector(".scroll-Top").onclick = function () {
    window.scrollTo(0, 0);
};

const firstName = document.querySelector('#firstName')
const secondName = document.querySelector('#secondName')
const email = document.querySelector('#email')
const message = document.querySelector('#message')
const form = document.querySelector('#form')
const errorElement = document.querySelector('#error')
errorElement.style.display = "none"


form.addEventListener('submit', (e) => {
    let messages = []
    if (firstName.value === '' || firstName.value === null) {
        messages.push("First Name Is Required")
    }
    if (secondName.value === '' || secondName.value === null) {
        messages.push("Second Name Is Required")
    }

    if (message.value === '' || message.value === null) {
        messages.push("Message Is Required")
    }

    if (message.length < 10) {
        messages.push("Please Enter Correct Subject and More Than 10 Characters")
    }

    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!re.test(email.value)) {
        messages.push("Your Email Is Not Valid")
    }

    if (messages.length > 0) {
        errorElement.style.display = "block"
        errorElement.innerHTML = messages.join(', <br> ')
        e.preventDefault();
    }
})
