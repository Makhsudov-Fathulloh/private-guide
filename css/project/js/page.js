/* Header fixed */
const header = document.getElementById("page-header");
const sticky = header.offsetTop;

window.onscroll = function () {
    myFunction();
};

function myFunction() {
    // console.log(window.pageYOffset);
    if (window.pageYOffset > 115 && window.pageYOffset > sticky) {
        header.classList.add("fixed-header");
    } else {
        header.classList.remove("fixed-header");
    }
}
/* /Header fixed */
