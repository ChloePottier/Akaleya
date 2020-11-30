window.onscroll = function() {
    stickyToScroll();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyToScroll() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        navbar.classList.add("dis-block");
    } else {
        navbar.classList.remove("sticky");
        navbar.classList.remove("dis-block");
        navbar.classList.add("dis-none");
    }
}