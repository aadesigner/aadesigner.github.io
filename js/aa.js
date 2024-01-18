// AALayer Designs
// All Rights Reserved.
// --
// www.aalayer.com

const darkMode = document.querySelector("#dark-mode");
const lightMode = document.querySelector("#light-mode");
const autoMode = document.querySelector("#auto-mode");
const html = document.querySelector("html");
const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
	html.classList.add("bg-dark");
	html.classList.remove("bg-light");
	document.querySelector("#dark-mode").classList.add("active");
} else if (savedTheme === "light") {
	html.classList.add("bg-light");
	html.classList.remove("bg-dark");
	document.querySelector("#light-mode").classList.add("active");
} else {
	if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
		html.classList.add("bg-dark");
		html.classList.remove("bg-light");
	} else {
		html.classList.add("bg-light");
		html.classList.remove("bg-dark");
	}
	document.querySelector("#auto-mode").classList.add("active");
}

darkMode.addEventListener("click", function() {
	html.classList.add("bg-dark");
	html.classList.remove("bg-light");
	localStorage.setItem("theme", "dark");
	document.querySelector("#dark-mode").classList.add("active");
	document.querySelector("#light-mode").classList.remove("active");
	document.querySelector("#auto-mode").classList.remove("active");
});

lightMode.addEventListener("click", function() {
	html.classList.add("bg-light");
	html.classList.remove("bg-dark");
	localStorage.setItem("theme", "light");
	document.querySelector("#light-mode").classList.add("active");
	document.querySelector("#dark-mode").classList.remove("active");
	document.querySelector("#auto-mode").classList.remove("active");
});

autoMode.addEventListener("click", function() {
	if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
		html.classList.add("bg-dark");
		html.classList.remove("bg-light");
	} else {
		html.classList.add("bg-light");
		html.classList.remove("bg-dark");
	}
	localStorage.removeItem("theme");
	document.querySelector("#auto-mode").classList.add("active");
	document.querySelector("#light-mode").classList.remove("active");
	document.querySelector("#dark-mode").classList.remove("active");
});

$(document).ready(function() {
	$(window).scroll(function() {
		console.log($(window).scrollTop())
		if ($(window).scrollTop() > 19) {
			$('#scroll').addClass('fixed-top');
		}
		if ($(window).scrollTop() < 20) {
			$('#scroll').removeClass('fixed-top');
		}
	});
});

(function newFact() {
	var facts = ['Your vision, our expertise.',
		'Better looking website + increased sales.', 'A web design that stands out.', 'Your vision, our expertise.'
	];
	var randomQuote = Math.floor(Math.random() * facts.length);
	document.getElementById('contactText').innerHTML = facts[randomQuote];
})();