const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
accordionItemHeaders.forEach((t) => {
    t.addEventListener("click", (e) => {
        t.classList.toggle("active");
        const o = t.nextElementSibling;
        t.classList.contains("active") ? (o.style.maxHeight = o.scrollHeight + "px") : (o.style.maxHeight = 0);
    });
});
const topButton = document.querySelector("#topbtn");
function scrollFunction() {
    window.pageYOffset > 300 ? (topButton.style.display = "block") : (topButton.style.display = "none");
}
function Top() {
    window.scrollTo(0, 0);
}
function myFunction() {
    var t = ((document.body.scrollTop || document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight)) * 100;
    document.getElementById("scrollBar").style.width = t + "%";
}
var preloader;
function loadNow(t) {
    t <= 0
        ? displayContent()
        : ((preloader.style.opacity = t),
          window.setTimeout(function () {
              loadNow(t - 0.05);
          }, 100));
}
function displayContent() {
    (preloader.style.display = "none"), (document.getElementById("content").style.display = "block");
}
window.addEventListener("scroll", scrollFunction),
    topButton.addEventListener("click", Top),
    (window.onscroll = function () {
        myFunction();
    }),
    document.addEventListener("DOMContentLoaded", function () {
        (preloader = document.getElementById("preloader")), loadNow(1);
    }),
    $(function () {
        $(".toggle").on("click", function () {
            $(".item").hasClass("active") ? $(".item").removeClass("active") : $(".item").addClass("active");
        });
    });

/* Load More Function WIP  */ 
