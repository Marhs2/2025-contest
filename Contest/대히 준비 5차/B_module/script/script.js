const mottoCon = [...$(".mottoContainer").get(0).children];

mottoCon.forEach((e) => {
  e.addEventListener("mouseenter", () => {
    $(".des" + e.className.replace(/[^0-9]/g, "")).get(0).style.opacity = 1
    mottoCon.forEach((item) => {
      item.style.backgroundImage = `url("./images/${e.className}.png")`;
    });
  });
  
  e.addEventListener("mouseleave", () => {
    $(".des" + e.className.replace(/[^0-9]/g, "")).get(0).style.opacity = 0
    mottoCon.forEach((item) => {
      item.style.backgroundImage = `url("./images/${item.className}.png")`;
    });
  });
});
