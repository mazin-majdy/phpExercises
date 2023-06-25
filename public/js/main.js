let text = document.querySelector(".landing h1").dataset.text;
let i = 0;
let write = function () {
  let fun = setInterval(() => {

    document.getElementById("heading").textContent += text[i];
    i++;
    if (i == text.length) {
      clearInterval(fun);
    }
  }, 100);

}
write();
let index = 1000;
let readMore = document.querySelectorAll(".exercises .box .info button");
let more = document.querySelectorAll(".exercises .box .more");
let section = document.querySelector('.exercises');
for (let i = 0; i < readMore.length; i++) {
  readMore[i].onclick = function () {
    more[i].classList.toggle("active");
    more[i].style.cssText = "z-index:" + index + 5;
    document.addEventListener("click", (e) => {
      if (e.target !== readMore[i]) {
        more[i].classList.remove('active');
      }
    })
  }
}
logo = document.querySelector('.header .logo')
function myScript() {
  logo.classList.add('active');
}
