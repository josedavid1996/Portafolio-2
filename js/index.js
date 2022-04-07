// 1.Variables
const $d = document,
  $menu__show = $d.querySelector("#menu__show"),
  $header__nav = $d.querySelector(".header__nav");

$d.addEventListener("click", (e) => {
  if (e.target === $menu__show) {
    $header__nav.classList.toggle("is-active");
  }
});
