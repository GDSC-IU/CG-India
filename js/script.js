window.onscroll = function() {fixnav()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function fixnav() {
	if (window.scrollY >= sticky) {
		navbar.classList.add("fixed-top")
	} else {
		navbar.classList.remove("fixed-top");
	}
}

window.onresize = function() {fitframe()};
function fitframe() {
	var src1 = './assets/pdf/CGI.pdf#zoom=136.5%';
	var src2 = './assets/pdf/CGI.pdf#zoom=37%';
	if (window.screen.availWidth <= 768) {
		document.getElementById('iframe').src = src1;
	}
	else {
		document.getElementById('iframe').src = src2;
	}
}

// document.getElementById('collapseNavbar').addEventListener('blur', remove);
// function remove() {
// 	document.getElementById('collapseNavbar').classList.remove('show');
// 	// document.getElementById('collapseNavbar').style.display = none;
// };