const menuBar = document.querySelector(".bar");
// console.log

menuBar.addEventListener("click", (e) => {
  e.preventDefault();
  // console.log(e.target);
  const menu = document.querySelector(".menu-a");
  // menu.style.display = "flex";
  menu.classList.toggle("show");
});
