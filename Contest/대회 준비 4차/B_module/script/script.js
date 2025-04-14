const motto = [...document.querySelector(".motto").children];

motto.forEach((e) => {
  e.addEventListener("mouseenter", () => {
    document.querySelector(`.Des${e.className.replace(/[^0-9]/g,"")}`).style.opacity = 1
    motto.forEach((item) => {
      item.style.backgroundImage = `url("./Images/${e.className}.png")`;
    });
  });

  e.addEventListener("mouseleave", () => {
    document.querySelector(`.Des${e.className.replace(/[^0-9]/g,"")}`).style.opacity = 0
    motto.forEach((item) => {
      item.style.backgroundImage = `url("./Images/${item.className}.png")`;
    });
  });
});
