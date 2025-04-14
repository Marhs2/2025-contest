const mottoContainer = $(".mottoContianer");

[...mottoContainer.get(0).children].forEach((e) => {
  e.addEventListener("mouseenter", () => {
    [...mottoContainer.get(0).children].forEach((item) => {
      $(`.mottoDes${e.className.replace(/[^0-9]/g, "")}`).css("opacity",1);
      item.style.backgroundImage = `url('./images/${e.className}.PNG')`;
    });
  });

  e.addEventListener("mouseleave", () => {
    console.log(e);
    [...mottoContainer.get(0).children].forEach((item) => {
      $(`.mottoDes${e.className.replace(/[^0-9]/g, "")}`).css("opacity",0);
      item.style.backgroundImage = `url('./images/${item.className}.PNG')`;
    });
  });
});
